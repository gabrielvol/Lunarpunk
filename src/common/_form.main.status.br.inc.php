<?php
/* * NombreDeProyecto * ========================================================
   Form Status [/src/common/form.main.status.br.inc.php]
   ========================================================================== */

/* // Form Status ----------------------------------------------------------- */
$form_status_pop_button_close_txt           = 'Fechar';
$form_status_pop_h2_ok_classes__mainForm    = 'mbm greenSystem txAlignCenter';
$form_status_pop_h2_error_classes__mainForm = 'mbm errorColour txAlignCenter';
$form_status_pop_anchor_classes__mainForm   = 'mbm txAlignCenter';

$form_status_ini_globalA__mainForm      = 'Por favor, preencha o formulário.';
$form_status_ini_globalB__mainForm      = 'Entraremos em contato com você em breve.';
$form_status_ini_global__mainForm       = $form_status_ini_globalA__mainForm . ' ' . $form_status_ini_globalB__mainForm;

$form_status_ok_globalA__mainForm       = 'Mensagem enviada!';
$form_status_ok_globalB__mainForm       = 'Os dados foram enviados corretamente. Muito obrigado.';
$form_status_ok_global__mainForm        = $form_status_ok_globalA__mainForm . ' ' . $form_status_ok_globalB__mainForm;

$form_status_error_globalA__mainForm    = 'Houve um erro ao enviar a mensagem.';
$form_status_error_globalB__mainForm    = 'Por favor, tente novamente mais tarde.';
$form_status_error_globalC__mainForm    = 'Você pode entrar em contato enviando um e-mail para <a href="' . $form_status_recipient_mailto__global . '" class="' . $form_status_pop_anchor_classes__mainForm . '">' . $form_status_recipient__global . '</a>';
$form_status_error_global__mainForm     = $form_status_error_globalA__mainForm . ' ' . $form_status_error_globalB__mainForm . ' ' . $form_status_error_globalC__mainForm;

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

$form_validation_msg_data_nombre__mainForm          = 'Por favor, digite seu nome.';
$form_validation_msg_data_apellido__mainForm        = 'Por favor, digite seu sobrenome.';
$form_validation_msg_data_nombreAp__mainForm        = 'Por favor, digite seu nome e sobrenome.';
$form_validation_msg_data_nombreCo__mainForm        = 'Por favor, digite seu nome completo.';
$form_validation_msg_data_cantidad__mainForm        = 'Por favor, informe uma quantidade.';

$form_validation_msg_data_direccion__mainForm       = 'Por favor, digite seu endereço.';
$form_validation_msg_data_ciudad__mainForm          = 'Por favor, digite sua cidade.';
$form_validation_msg_data_domicilio__mainForm       = 'Por favor, digite seu domicílio.';
$form_validation_msg_data_localidad__mainForm       = 'Por favor, digite sua localidade.';
$form_validation_msg_data_codigoPostal__mainForm    = 'Por favor, digite seu código postal.';
$form_validation_msg_data_provincia__mainForm       = 'Por favor, digite seu estado.';
$form_validation_msg_data_pais__mainForm            = 'Por favor, digite seu país.';

$form_validation_msg_data_fecha__mainForm           = 'Por favor, indique a data desejada.';
$form_validation_msg_data_dni__mainForm             = 'Por favor, digite seu número de documento.';

$form_validation_msg_data_email__mainForm           = 'Por favor, digite um e-mail válido.';
$form_validation_msg_data_telefono__mainForm        = 'Por favor, digite seu número de telefone.';
$form_validation_msg_data_celular__mainForm         = 'Por favor, digite seu número de celular.';
$form_validation_msg_data_whatsAppAreaCode__mainForm = 'Por favor, digite o código de área.';
$form_validation_msg_data_whatsAppNumber__mainForm  = 'Por favor, digite seu número.';

$form_validation_msg_data_webSite__mainForm         = 'Por favor, digite seu site.';
$form_validation_msg_data_facebook__mainForm        = 'Por favor, digite seu perfil do Facebook.';
$form_validation_msg_data_instagram__mainForm       = 'Por favor, digite seu perfil do Instagram.';
$form_validation_msg_data_comoQueres__mainForm      = 'Por favor, informe um meio de contato.';

$form_validation_msg_data_empresa__mainForm         = 'Por favor, digite o nome da sua empresa.';
$form_validation_msg_data_razonSocial__mainForm     = 'Por favor, digite a razão social.';
$form_validation_msg_data_cargo__mainForm           = 'Por favor, digite seu cargo.';
$form_validation_msg_data_rubro__mainForm           = 'Por favor, digite um setor.';
$form_validation_msg_data_asunto__mainForm          = 'Por favor, digite um assunto.';

$form_validation_msg_data_username__mainForm        = 'Por favor, digite seu nome de usuário.';
$form_validation_msg_data_password__mainForm        = 'Por favor, digite sua senha.';

$form_validation_msg_data_area__mainForm            = 'Por favor, selecione uma área de contato.';
$form_validation_msg_data_newsletter__mainForm      = 'Por favor, selecione uma opção.';
$form_validation_msg_data_mensaje__mainForm         = 'Por favor, escreva sua mensagem.';

?>
