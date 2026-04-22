<?php
/* * NombreDeProyecto * ========================================================
   PAGEINT Variables [/src/var/page.PAGEINT.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *

   // REF [26] Lightbox
   // REF [36] Form variables
*/


/* // Variables en comun para las paginas internas de PAGEINT --------------- */

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



/* // Titles ---------------------------------------------------------------- *
   Ej.:
   $pageRecetas_title_huevoFrito    = 'Cómo hacer un exquisito huevo frito';
   $page_heading_id                 = '';
 
   Los archivos data.PAGEINT tambien deben ser cargados en `[/src/var/main.var.inc.php]` */
// include('data.PAGEINT.var.inc.php');

if(isset($gettext_lang)){
    
if($gettext_lang == 'en_GB'){
    $PAGEINT_title_PAGEID    = 'TituloPageID_GB';
/*
    $PAGEINT_title_PAGEID    = 'TituloPageID_GB';
    $PAGEINT_title_PAGEID    = 'TituloPageID_GB';
*/

    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id          = $PAGEINT_title_PAGEID;
        $page_heading_id = $PAGEINT_title_PAGEID; }
/*
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
      $page_title_id = $PAGEINT_title_PAGEID;
      $page_heading_id = $PAGEINT_title_PAGEID; }
*/


} elseif($gettext_lang == 'xx_XX'){
    $PAGEINT_title_PAGEID    = 'sinTraduccion';
/*
    $PAGEINT_title_PAGEID    = 'sinTraduccion';
    $PAGEINT_title_PAGEID    = 'sinTraduccion';
*/
    
    $nav_main_item_PAGEINTID    = '';

    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id = $PAGEINT_title_PAGEID;
        $page_heading_id = $PAGEINT_title_PAGEID; }
/*
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
      $page_title_id = $PAGEINT_title_PAGEID;
      $page_heading_id = $PAGEINT_title_PAGEID; }
*/    


} else {
    $PAGEINT_title_PAGEID       = 'TituloPageID';
/*
    $PAGEINT_title_PAGEID       = 'TituloPageID';
    $PAGEINT_title_PAGEID       = 'TituloPageID';
*/    
    
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
        $page_title_id = $PAGEINT_title_PAGEID;
        $page_heading_id    = $PAGEINT_title_PAGEID; }

/*
    if($nav_pageCurrent_id == "page_PAGEINT_ID"){
      $page_title_id = $PAGEINT_title_PAGEID;
      $page_heading_id = $PAGEINT_title_PAGEID; }
*/    
} }

?>