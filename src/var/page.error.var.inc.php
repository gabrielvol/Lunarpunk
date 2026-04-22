<?php
/* * NombreDeProyecto * ========================================================
   Error Variables [/src/var/page.error.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *
   Variables en comun para los archivos `[/src/error/xxx.php]`

   // REF [26] Lightbox
   // REF [36] Form variables
*/


/* // Error pages ----------------------------------------------------------- */
$page_int           = 1;

$nav_pageCurrent        = 'page_error';
$nav_pageCurrent_int    = '';
    
$page_construccion      = 0;

$has_form               = 0; /* // REF [36] Form variables */

/* // Form identifier Global ------------------------------------------------ *
   La variable $form_id puede ser declarada de tres formas:
   
   a) De manera global en `[/src/var/form.var.inc.php]` para todo el sitio
   b) En el archivo `[/src/var/page.PAGEINT.var.inc.php]` para un grupo de paginas
   c) En la pagina donde va a ser usado */
// $form_id = 'xyzForm'; /* // REF [36*] Form variables */
// $form_id_spelled = 'Contactanos';

$has_lightbox           = 0; /* // REF [26] */
$has_pop_video          = 0;
$has_scrolling          = 0;
$has_slider             = 0;
//    $has_CUSTOMVARIABLE     = ($page_CUSTOMVARIABLE) ? 1 : 0;
//    $has_CUSTOMVARIABLE     = 0;
//    $lang_GB                = 1;
?>