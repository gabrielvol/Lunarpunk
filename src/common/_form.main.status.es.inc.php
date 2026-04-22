<?php
/* * NombreDeProyecto * ========================================================
   Form Status [/src/common/form.main.status.es.inc.php]
   ========================================================================== */

/* // Form Status ----------------------------------------------------------- */
$form_status_pop_button_close_txt           = 'Cerrar';
$form_status_pop_h2_ok_classes__mainForm    = 'mbm greenSystem txAlignCenter';
$form_status_pop_h2_error_classes__mainForm = 'mbm errorColour txAlignCenter';
$form_status_pop_anchor_classes__mainForm   = 'mbm txAlignCenter';

$form_status_ini_globalA__mainForm      = 'Complete el formulario por favor.';
$form_status_ini_globalB__mainForm      = 'Nos comunicaremos con Ud. a la brevedad.';
$form_status_ini_global__mainForm       = $form_status_ini_globalA__mainForm . ' ' . $form_status_ini_globalB__mainForm;

$form_status_ok_globalA__mainForm       = 'Mensaje enviado!';
$form_status_ok_globalB__mainForm       = 'Los datos se han enviado correctamente. Muchas Gracias.';
$form_status_ok_global__mainForm        = $form_status_ok_globalA__mainForm . ' ' . $form_status_ok_globalB__mainForm;

$form_status_error_globalA__mainForm    = 'Hubo un error al enviar el mensaje.';
$form_status_error_globalB__mainForm    = 'Intente nuevamente m&aacute;s tarde.';
$form_status_error_globalC__mainForm    = 'Puede comunicarse enviando un mensaje por correo electr&oacute;nico a <a href="' . $form_status_recipient_mailto__global . '" class="' . $form_status_pop_anchor_classes__mainForm . '">' . $form_status_recipient__global . '</a>';
$form_status_error_global__mainForm        = $form_status_error_globalA__mainForm . ' ' . $form_status_error_globalB__mainForm . ' ' . $form_status_error_globalC__mainForm;

// $form_status_marquee__mainForm = '<p class="form_status form_status_ini">'. $form_status_ini_global__mainForm .'</p>';



/* // Captcha Status -------------------------------------------------------- */
$form_status_captcha_ini__mainForm                    = '<p class="form_status form_status_captcha">Captcha: todavía no se ejecuta la validación</p>';
$form_status_captcha_ok_tokenConseguido__mainForm         = '<p class="form_status form_status_captcha">Token Conseguido: </p>';
$form_status_captcha_ok_successTrue__mainForm         = '<p class="form_status form_status_captcha">Captcha: success true!</p>';
$form_status_ok_validation__mainForm                  = '<p class="form_status form_status_captcha">Captcha: Form. Validación OK! Ahora corre PHPMailer</p>';
$form_status_captcha_error_lowScore__mainForm         = '<p class="form_status form_status_captcha">Captcha: Error. Score menor a 0.5</p>';
$form_status_captcha_error_successFalse__mainForm     = '<p class="form_status form_status_captcha">Captcha: Error. Success false</p>';
$form_status_captcha_error_other__mainForm            = '<p class="form_status form_status_captcha">Captcha: Error. Otro tipo de error</p>';



/* // Validation ------------------------------------------------------------ */
$form_validation_div_msg__mainForm                  = '';
$form_validation_div_class__mainForm                = 'displayNone';

$form_validation_msg_data_nombre__mainForm          = 'Por favor, ingrese su nombre.';
$form_validation_msg_data_apellido__mainForm        = 'Por favor, ingrese su apellido.';
$form_validation_msg_data_nombreAp__mainForm        = 'Por favor, ingrese su nombre y apellido.';
$form_validation_msg_data_nombreCo__mainForm        = 'Por favor, ingrese su nombre completo.';
$form_validation_msg_data_cantidad__mainForm        = 'Por favor, ingrese una cantidad.';
   
$form_validation_msg_data_direccion__mainForm       = 'Por favor, ingrese su direcci&oacute;n.';
$form_validation_msg_data_ciudad__mainForm          = 'Por favor, ingrese su ciudad.';
$form_validation_msg_data_domicilio__mainForm       = 'Por favor, ingrese su domicilio.';
$form_validation_msg_data_localidad__mainForm       = 'Por favor, ingrese su localidad.';
$form_validation_msg_data_codigoPostal__mainForm    = 'Por favor, ingrese su c&oacute;digo postal.'; 
$form_validation_msg_data_provincia__mainForm       = 'Por favor, ingrese su provincia.';
$form_validation_msg_data_pais__mainForm            = 'Por favor, ingrese su pa&iacute;s.';
   
$form_validation_msg_data_fecha__mainForm           = 'Por favor, indique la fecha deseada.';
$form_validation_msg_data_dni__mainForm             = 'Por favor, ingrese su n&uacute;mero de DNI.';
   
$form_validation_msg_data_email__mainForm           = 'Por favor, ingrese una direcci&oacute;n de correo v&aacute;lida.'; 
$form_validation_msg_data_telefono__mainForm        = 'Por favor, ingrese su n&uacute;mero de tel&eacute;fono.'; 
$form_validation_msg_data_celular__mainForm         = 'Por favor, ingrese su n&uacute;mero de celular.'; 
$form_validation_msg_data_whatsAppAreaCode__mainForm = 'Por favor, ingrese un código de área.'; 
$form_validation_msg_data_whatsAppNumber__mainForm  = 'Por favor, ingrese su n&uacute;mero.'; 
   
$form_validation_msg_data_webSite__mainForm         = 'Por favor, ingrese su sitio web.';
$form_validation_msg_data_facebook__mainForm        = 'Por favor, ingrese su perfil de Facebook.';
$form_validation_msg_data_instagram__mainForm       = 'Por favor, ingrese su perfil de Instagram.';
$form_validation_msg_data_comoQueres__mainForm      = 'Por favor, indique un medio de contacto.';
   
$form_validation_msg_data_empresa__mainForm         = 'Por favor, ingrese el nombre de su empresa.';
$form_validation_msg_data_razonSocial__mainForm     = 'Por favor, ingrese su raz&oacute;n social.';
$form_validation_msg_data_cargo__mainForm           = 'Por favor, ingrese su cargo.';
$form_validation_msg_data_rubro__mainForm           = 'Por favor, ingrese un rubro.';
$form_validation_msg_data_asunto__mainForm          = 'Por favor, ingrese un asunto.';

$form_validation_msg_data_username__mainForm        = 'Por favor, ingres&aacute; tu nombre de usuario.';
$form_validation_msg_data_password__mainForm        = 'Por favor, ingres&aacute; su contrase&ntilde;a.';
   
$form_validation_msg_data_area__mainForm            = 'Por favor, elija un &aacute;rea de contacto.';        
$form_validation_msg_data_newsletter__mainForm      = 'Por favor, elija una opci&oacute;n.';
$form_validation_msg_data_mensaje__mainForm         = 'Por favor, complete su mensaje.';

?>