<?php
/* * NombreDeProyecto * ========================================================
   PHP Variables Main Loader [/src/var/main.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *
   Listado principal de includes de variables php.

   // REF [36] Form variables
   // REF [50] Google captcha

   #php #variables #includes #filemtime
*/

/* // Secrets --------------------------------------------------------------- */
include('domain.var.inc.php');
include('secrets.var.inc.php');


/* // Asset helper ---------------------------------------------------------- */
include_once($_SERVER['DOCUMENT_ROOT'] . ($dir_env ?? '') . '/common/asset.filemtime.inc.php');


/* // Activadores ----------------------------------------------------------- */
include('act/global.act.inc.php');
include('act/header.act.inc.php');
include('act/nav.act.inc.php');
    
    
/* // Data ------------------------------------------------------------------ */
if (!isset($gettext_act)) { include('lang.var.inc.php'); }
//include('date.var.inc.php');
include('url.var.inc.php');
// include('web.var.inc.php');
include('global.var.inc.php');

/* Los archivos data.PAGEINT también deben ser cargados en page.PAGEINT */
// include('data.PAGEINT.var.inc.php');
    
include('meta.titlesDesc.var.inc.php');
// include('address.var.inc.php');
// include('tel.var.inc.php');
include('email.var.inc.php');
    
// include('social.var.inc.php');
    
// include('file.var.inc.php');
// include('media.var.inc.php');
// if (($nav_pageCurrent === 'page_PAGEINT') || ($nav_pageCurrent_int === 'page_PAGEINT_int')) { include 'page.PAGEINT.var.inc.php'; }

/* // REF [36] Form variables Form variable */
/* // REF [50] Google captcha */
if($has_form){ include('form.var.inc.php'); }

include('class.var.inc.php');

/* Entornos no-produccion
if($dir_env !== ''){ include('xxx.var.inc.php'); }

/* Solo entorno
if($dir_env == '/stage'){ include('xxx.var.inc.php'); }

/* Solo entorno produccion
if(empty($dir_env)){ include('xxx.var.inc.php'); }
*/

?>