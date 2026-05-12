/* =============================================================================
   gulpfile.js — SASS → CSS (autoprefix + minify) — Node 22+ compatible
   Reqs:
     npm i -D gulp sass gulp-dart-sass gulp-postcss autoprefixer cssnano gulp-sourcemaps fancy-log
   Tasks:
     gulp         -> build once
     gulp watch   -> build once, then watch .scss and rebuild on save
   ============================================================================= */

const { src, dest, series, watch } = require('gulp');
const gulpSass     = require('gulp-dart-sass');
const postcss      = require('gulp-postcss');
const sourcemaps   = require('gulp-sourcemaps');
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

// --- Helpers ---
function onError(err) {
  log.error('❌ Gulp error:', err.message || err);
  this.emit && this.emit('end');
}

// Convert a vinyl stream into a Promise so Gulp waits correctly
function streamToPromise(stream) {
  return new Promise((resolve, reject) => {
    stream.on('error', reject);
    // some plugins end on 'end', others on 'finish' after dest()
    stream.on('finish', resolve);
    stream.on('end', resolve);
  });
}

// 1) Compile SASS -> expanded CSS (+ sourcemaps) to /compilation
function compileSass() {
  const t0 = Date.now();
  const jobs = paths.scssEntries.map(entry => {
    const s = src(entry.in, { allowEmpty: true })
      .pipe(sourcemaps.init())
      .pipe(gulpSass({ outputStyle: 'expanded' }).on('error', gulpSass.logError))
      .on('error', onError)
      .pipe(sourcemaps.write('.'))
      .pipe(dest(paths.cssOutTemp)); // writes <inputName>.css and .map
    return streamToPromise(s);
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
    const s = src(path.join(paths.cssOutTemp, entry.out), {
      allowEmpty: true,
      base: paths.cssOutTemp,
    })
      .pipe(postcss(plugins))
      .on('error', onError)
      .pipe(dest(paths.cssOutFinal)); // -> src/css/<filename>.css
    return streamToPromise(s);
  });

  return Promise.all(jobs).then(() => {
    log(`✨ PostCSS done in ${Date.now() - t0} ms`);
  });
}

// 3) Watcher with logs (no initial build here)
function watchSCSS() {
  log('👀 Watching SCSS...');
  return watch(paths.scssWatch, { delay: 200 }, series(compileSass, processCSS))
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
