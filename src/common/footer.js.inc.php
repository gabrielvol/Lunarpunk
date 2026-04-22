<?php
/* * NombreDeProyecto * ========================================================
   <footer> .js [/src/common/footer.js.inc.php]
   ========================================================================== */

/* // Descripcion -----------------------------------------------------------
 * Archivo de carga de scripts .js
 * Este archivo se carga en `[/src/common/footer.inc.php]`
 * 
 * _global.js
 * 
 * _nav_.js
 * 
 * _scrolling.js
 * 
 * .js por página
 * 
 * scrollKeep.js
 * 
 * _forms.js
 * 
 * _captcha.js
 * 
 * _lightbox.js
 * 
 * _slick.js
 * 
 * pop.video.js
 * 
 * SEO scripts
 * 
*/
       
/* if($has_vimeo): ?>
<script src="https://player.vimeo.com/api/player.js"></script>
<?php endif; */

if($dir_env): /* // REF [48] Dev window width */ ?>
<script src="<?php echo asset_versioned('/js/_global.stage.js', $dir_env); ?>"></script>

<?php elseif(empty($dir_env)): ?>
<script src="<?php echo asset_versioned('/js/_global.produ.js', $dir_env); ?>"></script>

<?php endif; ?>


<script src="<?php echo asset_versioned('/js/_global.all.js', $dir_env); ?>"></script>


<?php if($nav_accordion_act): /* nav `[/var/act/nav.act.inc.php]` */ ?>
<script src="<?php echo asset_versioned('/js/_nav_accordion.js', $dir_env); ?>"></script>

<?php endif; if($nav_drawer_act): /* // REF [06] nav `[/var/act/nav.act.inc.php]` */ ?>
<script src="<?php echo asset_versioned('/js/_nav_drawer.js', $dir_env); ?>"></script>
    
<?php endif;


if($has_scrolling): ?>
<script src="<?php echo asset_versioned('/js/_scrolling.js', $dir_env); ?>"></script>

<?php endif;


if($nav_pageCurrent == 'page_index'): /*
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_index.js', $dir_env); ?>"></script>
*/ ?>

<?php endif; if($page_int): /* // Internas
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_int.js', $dir_env); ?>"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_index_index'): /*
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_home.js', $dir_env); ?>"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_index_home'): /*
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_inicio.js', $dir_env); ?>"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_contacto'): /*
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_contacto.js', $dir_env); ?>"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_gracias'): /*
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_gracias.js', $dir_env); ?>"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_PAGINA'): /*
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
*/ ?>

<?php endif; if($nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
*/ ?>

<?php endif; if($nav_pageCurrent == 'page_PAGINA' || $nav_pageCurrent_int == 'page_PAGINA_INT'): /*
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
*/ ?>

<?php endif; if($page_construccion): /*
<script src="<?php echo asset_versioned('/js/page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_script.js">"></script>
<script src="<?php echo asset_versioned('/js/_page_construccion.js', $dir_env); ?>"></script>
*/ ?>

<?php endif;


if($has_form): /* // REF [36] Form variables */ ?>
<script src="<?php echo asset_versioned('/js/scrollKeep.js', $dir_env); ?>"></script><?php /* // REF [25] */ ?>
<?php /* <script src="<?php echo asset_versioned('/js/ui-datepicker.jQuery.js', $dir_env); ?>"></script> REF [31] */ ?>
<script src="<?php echo asset_versioned('/js/_form.js', $dir_env); ?>"></script>

<?php endif;


/* // REF [50] Google reCaptcha
 * Luego de crear los condicionales hay que crear el archivo correspondiente
 * en `[/src/js/__captcha_xyzForm.js]`
 * 
 */
if($has_captcha == 1 && $form_id == 'mainForm'): ?>
<script src="<?php echo asset_versioned('/js/_captcha_mainForm.js', $dir_env); ?>"></script>

<?php /* elseif($has_captcha == 1 && $form_id == 'contactoForm'): ?>
<script src="<?php echo asset_versioned('/js/_captcha_contactoForm.js', $dir_env); ?>"></script>

<?php /* elseif($has_captcha == 1 && $form_id == 'iniciarSesionForm'): ?>
<script src="<?php echo asset_versioned('/js/_captcha_iniciarSesionForm.js', $dir_env); ?>"></script>

<?php elseif($has_captcha == 1 && $form_id == 'recuperarContrasenaForm'): ?>
<script src="<?php echo asset_versioned('/js/_captcha_recuperarContrasenaForm.js', $dir_env); ?>"></script>

<?php */ endif;


/* // REF [26] Lightbox */
if($has_lightbox == 1): ?>
<script src="<?php echo asset_versioned('/js/lightbox.min.js', $dir_env); ?>"></script>
<script src="<?php echo asset_versioned('/js/_lightbox.js', $dir_env); ?>"></script>

<?php endif;


if($has_slider): ?>
<script src="<?php echo asset_versioned('/js/slick.js', $dir_env); ?>"></script>
<script src="<?php echo asset_versioned('/js/_slick.js', $dir_env); ?>"></script>

<?php endif;


if($has_pop_video): ?>
<script src="<?php echo asset_versioned('/js/_pop.video.js', $dir_env); ?>"></script>

<?php endif; ?>