<?php
/* * NombreDeProyecto * ========================================================
   Form Status [/src/common/form.main.status.en.inc.php]
   ========================================================================== */

/* // Form Status ----------------------------------------------------------- */
$form_status_pop_button_close_txt           = 'Close';
$form_status_pop_h2_ok_classes__mainForm    = 'mbm greenSystem txAlignCenter';
$form_status_pop_h2_error_classes__mainForm = 'mbm errorColour txAlignCenter';
$form_status_pop_anchor_classes__mainForm   = 'mbm txAlignCenter';

$form_status_ini_globalA__mainForm      = 'Please complete the form.';
$form_status_ini_globalB__mainForm      = "We'll get in touch with you as soon as possible.";
$form_status_ini_global__mainForm       = $form_status_ini_globalA__mainForm . ' ' . $form_status_ini_globalB__mainForm;

$form_status_ok_globalA__mainForm       = 'Message sent!';
$form_status_ok_globalB__mainForm       = "Thank you. Your message has been successfully delivered, we'll be in touch shortly.";
$form_status_ok_global__mainForm        = $form_status_ok_globalA__mainForm . ' ' . $form_status_ok_globalB__mainForm;

$form_status_error_globalA__mainForm    = 'There was an error delivering your message.';
$form_status_error_globalB__mainForm    = 'Please try again later.';
$form_status_error_globalC__mainForm    = 'You can contact us by email writing to <a href="' . $form_status_recipient_mailto__global . '" class="' . $form_status_pop_anchor_classes__mainForm . '">' . $form_status_recipient__global . '</a>';
$form_status_error_global__mainForm        = $form_status_error_globalA__mainForm . ' ' . $form_status_error_globalB__mainForm . ' ' . $form_status_error_globalC__mainForm;

// $form_status_marquee__mainForm = '<p class="form_status form_status_ini">'. $form_status_ini_global__mainForm .'</p>';



/* // Captcha Status -------------------------------------------------------- */
$form_status_captcha_ini__mainForm                    = '<p class="form_status form_status_captcha">Captcha validation has not started</p>';
$form_status_captcha_ok_tokenConseguido__mainForm         = '<p class="form_status form_status_captcha">Token Conseguido: </p>';
$form_status_captcha_ok_successTrue__mainForm         = '<p class="form_status form_status_captcha">Captcha: success true!</p>';
$form_status_ok_validation__mainForm                  = '<p class="form_status form_status_captcha">Form validation OK, now send script starts</p>';
$form_status_captcha_error_lowScore__mainForm         = '<p class="form_status form_status_captcha">Captcha: Error, score lower than 0.5</p>';
$form_status_captcha_error_successFalse__mainForm     = '<p class="form_status form_status_captcha">Captcha: Error, success false</p>';
$form_status_captcha_error_other__mainForm            = '<p class="form_status form_status_captcha">Captcha: Error, unknown</p>';



/* // Validation ------------------------------------------------------------ */
$form_validation_div_msg__mainForm                  = '';
$form_validation_div_class__mainForm                = 'displayNone';

$form_validation_msg_data_nombre__mainForm          = 'Please, complete your name.';
$form_validation_msg_data_apellido__mainForm        = 'Please, complete your surname.';
$form_validation_msg_data_nombreAp__mainForm        = 'Please, complete your full name.';
$form_validation_msg_data_nombreCo__mainForm        = 'Please, complete your full name.';
$form_validation_msg_data_cantidad__mainForm        = 'Please, enter a quantity.';
   
$form_validation_msg_data_direccion__mainForm       = 'Please, complete your address.';
$form_validation_msg_data_ciudad__mainForm          = 'Please, complete your city.';
$form_validation_msg_data_domicilio__mainForm       = 'Please, complete your address.';
$form_validation_msg_data_localidad__mainForm       = 'Please, complete your locality.';
$form_validation_msg_data_codigoPostal__mainForm    = 'Please, complete your ZIP Code.'; 
$form_validation_msg_data_provincia__mainForm       = 'Please, complete your state/province.';
$form_validation_msg_data_pais__mainForm            = 'Please, complete your country.';
   
$form_validation_msg_data_fecha__mainForm           = 'Please, complete the date field.';
$form_validation_msg_data_dni__mainForm             = 'Please, complete your ID number.';
   
$form_validation_msg_data_email__mainForm           = 'Please, enter a valid email address.'; 
$form_validation_msg_data_telefono__mainForm        = 'Please, complete your phone number.'; 
$form_validation_msg_data_celular__mainForm         = 'Please, complete your cell phone number.'; 
$form_validation_msg_data_whatsAppAreaCode__mainForm = 'Please, enter your area code.'; 
$form_validation_msg_data_whatsAppNumber__mainForm  = 'Please, enter your phone number.'; 
   
$form_validation_msg_data_webSite__mainForm         = 'Please, complete your website address.';
$form_validation_msg_data_facebook__mainForm        = 'Please, complete your Facebook profile.';
$form_validation_msg_data_instagram__mainForm       = 'Please, complete your Instagram profile.';
$form_validation_msg_data_comoQueres__mainForm      = 'Please, enter a contact method.';
   
$form_validation_msg_data_empresa__mainForm         = 'Please, complete the company field.';
$form_validation_msg_data_razonSocial__mainForm     = 'Please, complete the company field.';
$form_validation_msg_data_cargo__mainForm           = 'Please, complete your position.';
$form_validation_msg_data_rubro__mainForm           = 'Please, complete your business area.';
$form_validation_msg_data_asunto__mainForm          = 'Please, complete the subject.';

$form_validation_msg_data_username__mainForm        = 'Please, complete your username.';
$form_validation_msg_data_password__mainForm        = 'Please, enter your password.';
   
$form_validation_msg_data_area__mainForm            = 'Please, choose a contact departmet.';        
$form_validation_msg_data_newsletter__mainForm      = 'Please, choose an option.';
$form_validation_msg_data_mensaje__mainForm         = 'Please, complete your message.';

?>