<?php
/* * NombreDeProyecto * ========================================================
   Form Variables [/src/var/form.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *
 * Archivo de asignación de variables para envíos del formulario
 * Este archivo solamente se carga si la variable $has_form tiene asignado un 1
 * 
 * // REF [36] Form variable $has_form
 * // REF [50] Google reCaptcha
 *    
*/


/* // REF [50] Google reCaptcha --------------------------------------------- *
   Si se activa `$has_captcha` tambien hay que activar `$google_captcha_act`
   en  `[/etc/css/custom/act/google_act.scss]` */
$has_captcha = empty($dir_env) ? 0 : 0;

/* La variable captcha_key_site tambien debe ser declarada
   en `[/src/js/global.produ.js]` */
$captcha_key_site = 'sinclave';
$captcha_key_secret = $ENV_captcha_key_secret;

$captcha_score_treshold = 0.5;

/* Get the IP address of the origin of the submission */
$captcha_ip_remote = $_SERVER['REMOTE_ADDR'];

/* // Form identifier Global ------------------------------------------------ *
   La variable $form_id puede ser declarada de tres formas:
 
   a) De manera global en `[/src/var/form.var.inc.php]` para todo el sitio
   b) En el archivo `[/src/var/page.PAGEINT.var.inc.php]` para un grupo de paginas
   c) En la pagina donde va a ser usado */
// $form_id = 'xyzForm'; /* // REF [36*] Form variables */
// $form_id_spelled = 'Contactanos';


/* // Form Recipients Global // REF [36] ------------------------------------ */
if($dir_env !== '' && $dir_env !== '/stage'):
    /* test / maqueta */
    $form_recipient__global           = 'tampas@gmail.com';
    $form_recipient_CC__global        = 'tampas@gmail.com';
    $form_recipient_BCC__global       = 'tampas@gmail.com';
else:    
    /* produ / stage */
    $form_recipient__global           = $site_email_CONTACTO_address;
    $form_recipient_CC__global        = ''; // $site_email_CONTACTO_address;
    $form_recipient_BCC__global       = 'tampas@gmail.com';
endif;

$form_status_recipient__global        = $form_recipient__global;
$form_status_recipient_mailto__global = 'mailto:'. $form_recipient__global;


/* // Form Main // REF [36] Form variables ---------------------------------- */
if(!empty($dir_env) && $dir_env !== '/stage'):
    /* test / maqueta */
    /* Si el formulario tiene captcha solamente se va a poder testear en produccion */
    
    $form_recipient__mainForm = 'tampas@gmail.com';
    $form_recipient_CC__mainForm = 'gabrielvol@protonmail.com';
    $form_recipient_BCC__mainForm = 'ggvv@hotmail.com.ar';
else:
    /* produ / stage */
    /* Si el formulario tiene captcha solamente se va a poder testear en produccion */
    
    $form_recipient__mainForm = $site_email_CONTACTO_address;
    $form_recipient_CC__mainForm = ''; // $site_email_CONTACTO_address;
    $form_recipient_BCC__mainForm = '';
    
endif;

$form_status_recipient__mainForm = $form_recipient__mainForm;
$form_status_recipient_mailto__mainForm = 'mailto:' . $form_recipient__mainForm;


/* // Form Contacto // REF [36] Form variables ------------------------------ *
if(!empty($dir_env) && $dir_env !== '/stage'):
    /* test / maqueta
    /* Si el formulario tiene captcha solamente se va a poder testear en produccion 
    $form_recipient__contactoForm           = 'tampas@gmail.com';
    $form_recipient_CC__contactoForm        = 'ggvv@hotmail.com.ar';
    $form_recipient_BCC__contactoForm       = 'gabrielvol@protonmail.com';
else:
    /* produ / stage
    /* Si el formulario tiene captcha solamente se va a poder testear en produccion 
    $form_recipient__contactoForm           = 'tampas@gmail.com'; // $site_email_CONTACTO_address;
    $form_recipient_CC__contactoForm        = 'ggvv@hotmail.com.ar'; // $site_email_CONTACTO_address; // . ', ' . $site_email_EMAILA_address;
    $form_recipient_BCC__contactoForm       = 'gabrielvol@protonmail.com';
endif;

$form_status_recipient__contactoForm        = $form_recipient__contactoForm;
$form_status_recipient_mailto__contactoForm = 'mailto:' . $form_recipient__contactoForm;
*/

/* // Form Footer // REF [36] Form variables -------------------------------- *
if(!empty($dir_env) && $dir_env !== '/stage'):
    /* test / maqueta
    /* Si el formulario tiene captcha solamente se va a poder testear en produccion 
    $form_recipient__footerForm           = 'tampas@gmail.com';
    $form_recipient_CC__footerForm        = 'ggvv@hotmail.com.ar';
    $form_recipient_BCC__footerForm       = 'gabrielvol@protonmail.com';
else:
    /* produ / stage
    /* Si el formulario tiene captcha solamente se va a poder testear en produccion 
    $form_recipient__footerForm           = 'tampas@gmail.com'; // $site_email_CONTACTO_address;
    $form_recipient_CC__footerForm        = 'ggvv@hotmail.com.ar'; // $site_email_CONTACTO_address; // . ', ' . $site_email_EMAILA_address;
    $form_recipient_BCC__footerForm       = 'gabrielvol@protonmail.com';
endif;    

$form_status_recipient__footerForm        = $form_recipient__footerForm;
$form_status_recipient_mailto__footerForm = 'mailto:' . $form_recipient__footerForm;
*/
?>