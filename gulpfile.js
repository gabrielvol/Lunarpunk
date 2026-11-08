/* =============================================================================
   gulpfile.js — SASS → CSS (autoprefix + minify) — Node 20.19+ compatible
   Reqs:
     npm i -D gulp sass gulp-sass gulp-postcss autoprefixer cssnano fancy-log
   Tasks:
     gulp         -> build once
     gulp watch   -> build once, then watch .scss and rebuild on save
   ============================================================================= */

const { src, dest, series, watch } = require('gulp');
const gulpSass     = require('gulp-sass')(require('sass'));
const postcss      = require('gulp-postcss');
const { pipeline } = require('node:stream/promises');
const { Transform } = require('node:stream');
const autoprefixer = require('autoprefixer');
const cssnano      = require('cssnano');
const log          = require('fancy-log');
const path         = require('path');

// --- Paths (adjust if needed) ---
const paths = {
  // Add as many entries as you want; "out" is the compiled CSS filename
  scssEntries: [
    { in: 'etc/css/custom/styles_main.scss', out: 'styles_main.css' },
    //{ in: 'etc/css/custom/styles_app.scss',  out: 'styles_app.css'  },
    //{ in: 'etc/css/custom/styles_zh.scss',  out: 'styles_zh.css'  },
    //{ in: 'etc/css/custom/style.scss',  out: 'style.css'  },
  ],
  scssWatch:   'etc/css/**/*.scss',   // all scss
  cssOutTemp:  'etc/css/compilation', // expanded + sourcemap
  cssOutFinal: 'src/css',             // final minified output
};

// Source paths must be relative to the emitted map, including on Windows.
function prepareSourceMap() {
  return new Transform({
    objectMode: true,
    transform(file, encoding, callback) {
      try {
        file.sourceMap.sources = file.sourceMap.sources.map(source =>
          path.relative(path.resolve(paths.cssOutTemp), path.resolve(file.base, source))
            .split(path.sep).join('/')
        );
        file.contents = Buffer.from(file.contents.toString().trimEnd() + '\n');
        callback(null, file);
      } catch (err) {
        callback(err);
      }
    },
  });
}

// 1) Compile SASS -> expanded CSS (+ sourcemaps) to /compilation
function compileSass() {
  const t0 = Date.now();
  const jobs = paths.scssEntries.map(entry => {
    return pipeline(
      src(entry.in, { sourcemaps: true }),
      gulpSass({ style: 'expanded' }),
      prepareSourceMap(),
      dest(paths.cssOutTemp, { sourcemaps: '.' })
    );
  });

  return Promise.all(jobs).then(() => {
    log(`✅ SASS compiled in ${Date.now() - t0} ms`);
  });
}

// 2) PostCSS (autoprefixer + cssnano) -> final CSS in src/css
function processCSS() {
  const plugins = [autoprefixer(), cssnano({ preset: 'default' })];
  const t0 = Date.now();

  const jobs = paths.scssEntries.map(entry => {
    return pipeline(
      src(path.join(paths.cssOutTemp, entry.out), { base: paths.cssOutTemp }),
      postcss(plugins),
      dest(paths.cssOutFinal)
    );
  });

  return Promise.all(jobs).then(() => {
    log(`✨ PostCSS done in ${Date.now() - t0} ms`);
  });
}

// 3) Watcher with logs (no initial build here)
function watchSCSS() {
  return watch(paths.scssWatch, { delay: 200 }, series(compileSass, processCSS))
    .on('ready', () => log('👀 Watching SCSS...'))
    .on('change', p => log(`📄 Changed: ${p}`))
    .on('add',    p => log(`➕ Added:   ${p}`))
    .on('unlink', p => log(`🗑  Removed: ${p}`));
}

// Public tasks
const build = series(compileSass, processCSS);

exports.build   = build;
// Run a build immediately, THEN start watching:
exports.watch   = series(build, watchSCSS);
exports.default = build;
