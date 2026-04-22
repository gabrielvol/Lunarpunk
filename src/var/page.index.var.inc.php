<?php
/* * NombreDeProyecto * ========================================================
   Index / Inicio Variables [/src/var/page.index.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *
   Variables en comun para los archivos `[/src/index.php]` y `[/src/home.php]`

   // REF [26] Lightbox
   // REF [36] Form variables
*/



/* // Index / Home pages ---------------------------------------------------- */
$page_construccion      = 0;
    /* // REF [53*] Page redirect
     * Si se activa `$page_redirect` hay que setear la variable `$page_redirect_url`
     */
$page_redirect          = 0;

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
$has_scrolling          = 1;
$has_slider             = 0;
$page_noTrack           = (!empty($dir_env)) ? 1 : 0;
//    $has_CUSTOMVARIABLE     = ($page_CUSTOMVARIABLE) ? 1 : 0;
//    $has_CUSTOMVARIABLE     = 0;
//    $lang_GB                = 1;
?>