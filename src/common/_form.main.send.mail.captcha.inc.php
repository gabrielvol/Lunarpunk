<?php
/*
// REF [29] Form Status OK, tick
// REF [50] Google reCaptcha
*/

/* // Status Captcha - Mensaje inicial -------------------------------------- */
$form_status_marquee__mainForm = $form_status_captcha_ini__mainForm;

/* // Inicia proceso de form luego de form.submit() ------------------------- */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
/*
    ini_set('sendmail_from', 'tampas@gmail.com');
    ini_set('SMTP','mail.dominio.com');

    ini_set('sendmail_from', $form_recipient__mainForm);
    ini_set('SMTP','mail.'. $domain_main);
*/

/* // Create variables for form data ---------------------------------------- */
    $data_nombre__mainForm          = $_POST['data_nombre__mainForm']; 
    /* El resto de las variables estan en `[/src/common/form.var.data.php]` */
    
/* // REF [50] Google reCaptcha --------------------------------------------- */
    $data_captchaResponseToken__mainForm                  = $_POST['data_captchaResponseToken__mainForm'];
    
// Construct the url to send your private Secret Key, token and (optionally) IP
// address of the form submitter to Google to get a spam rating for the
// submission. Las variables `$captcha_key_secret` y `$captcha_ip_remote`
// estan declaradas en `[/src/var/form.var.inc.php]`

    $captcha_url_siteverify = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $captcha_key_secret . '&response=' . $data_captchaResponseToken__mainForm . '&remoteip=' . $captcha_ip_remote;

/* // Save the response ----------------------------------------------------- */ 
// e.g. print_r($captcha_response) prints {
//   "success": true,
//   "challenge_ts": "2019-07-24T11:19:07Z",
//   "hostname": "domain.com",
//   "score": 0.9,
//   "action": "formID"
//   }

    $captcha_response = file_get_contents($captcha_url_siteverify);

/* // Decode the response --------------------------------------------------- */
// e.g. print_r($captcha_response_keys) prints Array (
//   [success] => 1
//   [challenge_ts] => 2019-07-24T11:19:07Z
//   [hostname] => domain.com
//   [score] => 0.9
//   [action] => formID
//   )

    $captcha_response_keys = json_decode($captcha_response, true);

// Check if the test was done OK, if the action name is correct and if the score
// is above your chosen threshold.

/* // Chequeamos que success sea 1 y que action corresponda con el id del form - */
    if ($captcha_response_keys["success"] && $captcha_response_keys["action"] == 'mainForm') {

/* // Chequeamos que el score sea superior al limite indicado --------------- */
// La variable `$captcha_score_treshold`
// esta declarada en `[/src/var/form.var.inc.php]`
        if ($captcha_response_keys["score"] >= $captcha_score_treshold) {
            
            $form_status_marquee__mainForm .= $form_status_captcha_ok_successTrue__mainForm . $data_captchaResponseToken__mainForm;
            
/* // INICIA VALIDACIÓN EN .form_validation_div ----------------------------- *
            if(!isset($data_nombre__mainForm) || trim($data_nombre__mainForm) == ''){
                $form_validation_div_msg__mainForm                  = $form_validation_msg_data_nombre__mainForm;
                $form_validation_div_class__mainForm                = " form_validation_div_invalid";
                $form_validation_input_class_data_nombre__mainForm  = " form_validation_input_invalid";
                $form_input_autofocus_data_nombre__mainForm         = "autofocus";

            /* El resto de las variables estan en `[/src/common/form.var.data.php]` */
        
/* // FIN de validacion en .form_validation_div ----------------------------- */
        
/* // INICIA VALIDACIÓN en .form_validation_span ---------------------------- */
            if(!isset($data_nombre__mainForm) || trim($data_nombre__mainForm) == ''){
                $form_validation_span_msg_data_nombre__mainForm         = $form_validation_msg_data_nombre__mainForm;
                $form_validation_span_class_data_nombre__mainForm         = " form_validation_span_active";
                $form_validation_input_class_data_nombre__mainForm     = " form_validation_input_invalid";
                $form_input_autofocus_data_nombre__mainForm         = "autofocus";
                
            /* El resto de las variables estan en `[/src/common/form.var.data.php]` */
                
/* // FIN de validacion en .form_validation_span ---------------------------- */ 
            } else {
/* // Si todos los campos validan ------------------------------------------- */
                $form_status_marquee__mainForm = $form_status_ok_validation__mainForm;
                
/* // Cuerpo de mail y asunto ----------------------------------------------- */
                $formMail_recipient  = $form_recipient__mainForm;
                // $formMail_recipient  = $data_area__mainForm;
                $formMail_asunto   = "Contacto Web mail() con reCaptcha de ". $data_nombre__mainForm . ' - ' . $form_id_spelled;
                $formMail_headers  = "From: $data_nombre__mainForm <$data_email__mainForm>\r\n";
                //$formMail_headers .= "Reply-To: $data_email__mainForm \r\n";
                $formMail_headers .= "Content-type: text/html\r\n";
                $formMail_headers .= "X-Mailer: PHP5\n";
                $formMail_headers .= 'MIME-Version: 1.0' . "\n";
                //$formMail_headers .= "CC: ". $form_recipient_CC__mainForm ."\r\n";
                //$formMail_headers .= "BCC: ". $form_recipient_BCC__mainForm ."\r\n";
                $formMail_texto  = '<small style="color:#444">Este mensaje fue enviado desde el formulario que se encuentra en ' . $data_fullURL__mainForm . '</small><br /><br />';
                $formMail_texto .= '<small style="color:#444"><strong>Filtro:</strong> filtroWebForm</small><br /><br />';
                $formMail_texto .= "<strong>Nombre:</strong> ". $data_nombre__mainForm ."<br />";
    
                /* El resto de las variables estan en `[/src/common/form.var.data.php]` */

                $formMail_texto .= '<br /><br /><strong>Errores:</strong><br />' . error_get_last()['message'];

                $formMail_texto .= '<br /><br />______<br /><small style="color:#666">Fin del mensaje</small>';
                
/* // Inicia mail() --------------------------------------------------------- */
                if(mail($formMail_recipient, $formMail_asunto, $formMail_texto, $formMail_headers)){
                   
                    // echo '<META HTTP-EQUIV="Refresh" Content="0;URL='. $url_main .'/gracias.php">';            
                   
/* // INICIA MENSAJE OK EN $form_status_ ------------------------------------ *
                    $form_validation_div_class__mainForm = 'displayNone';
                    
                    $form_status_marquee__mainForm = '<p class="form_status form_status_ok" role="alert" autofocus>'. _("$form_status_ok_globalB__mainForm") .'</p>';
//FIN mensaje ok en $form_status_ ------------------------------------------- */
             
/* // INICIA MENSAJE OK EN POPUP -------------------------------------------- */
                    $form_status_pop__mainForm = '<div class="pop_general pop_warning pop_formStatus" role="alertdialog" aria-labelledby="formOK">'
                            . '<div role="document" tabindex="0">'
                            . '<button type="button" class="button_close button_close_pop hover_grow_S_ani">'. _("Cerrar") .'</button>'
                            . '<h2 id="formOK" class="'. $form_status_pop_h2_ok_classes__mainForm .'">'. _("$form_status_ok_globalA__mainForm") .'</h2>'
                            . '<p>'. _("$form_status_ok_globalB__mainForm") .'</p>'
                            . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">'. _("OK") .'</button>'
                            . '</div>'
                            . '</div>'
                            . '<div class="modal_global modal_formStatus"></div>';
                    $form_validation_div_class__mainForm = 'displayNone';
                    $form_status_marquee__mainForm = '';
/* // FIN mensaje ok en popup ----------------------------------------------- */            
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */
                    $_POST['data_nombre__mainForm']         = ''; 
                    /* El resto de las variables estan en `[/src/common/form.var.data.php]` */           

/* // Si no se pudo hacer el envio de mail devolvemos un error -------------- */
                } else {                    
            
/* // INICIA MENSAJE ERROR EN $form_status_ --------------------------------- *
                    $form_validation_div_class__mainForm = 'displayNone';
                    
                    $form_status_marquee__mainForm = '<p class="form_status form_status_error" role="alert" autofocus>'. _("$form_status_error_globalA__mainForm") .' <span class="displayBlock">'. _("$form_status_error_globalB__mainForm") .'</span></p>';
/* // FIN mensaje error en $form_status_ ------------------------------------ */
            
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- */
                    $form_status_pop__mainForm = '<div class="pop_general pop_warning pop_formStatus" role="alertdialog" aria-labelledby="formError">'
                            . '<div role="document" tabindex="0">'
                            . '<button type="button" class="button_close button_close_pop hover_grow_S_ani">'. _("Cerrar") .'</button>'
                            . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__mainForm .'">'. _("$form_status_error_globalA__mainForm") .'</h2>'
                            . '<p>'. _("$form_status_error_globalB__mainForm") .'</p>'
                            . '<p>'. _("$form_status_error_globalC__mainForm") .'</p>'
                            . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">'. _("OK") .'</button>'
                            . '</div>'
                            . '</div>'
                            . '<div class="modal_global modal_formStatus"></div>';
                    $form_validation_div_class__mainForm = 'displayNone';
                    $form_status_marquee__mainForm = '';
//FIN mensaje error en popup ------------------------------------------------ */
                }
            }
        }
        
/* // Si el score es menor al limite, pasa como spam ------------------------ */ 
    } elseif ($captcha_response_keys["score"] < $captcha_score_treshold) {
            $form_status_marquee__mainForm = $form_status_captcha_error_lowScore__mainForm;
            
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- *
            // TODO pop para sugerir otra forma de contacto cuando es spam
            
            $form_status_pop__mainForm = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
                . '<div role="document" tabindex="0">'
                . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">Cerrar</button>'
                . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__mainForm .'">' . $form_status_error_globalA__mainForm .'</h2>'
                . '<p>'. $form_status_error_globalB__mainForm .'</p>'
                . '<p>'. $form_status_error_globalC__mainForm .'</p>'
                . $form_status_captcha_error_lowScore__mainForm
                . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                . '</div>'
                . '</div>'
                . '<div class="modal_global modal_formStatus"></div>';
            
            $form_validation_div_class__mainForm    = 'displayNone';
            
            $form_status_marquee__mainForm                  = '';
/* // FIN mensaje error en popup -------------------------------------------- */

/* // Si obtenemos mensajes de error ---------------------------------------- */ 
    } elseif($captcha_response_keys["error-codes"]) {
        
        $form_status_marquee__mainForm = $form_status_captcha_error_successFalse__mainForm;
        
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- *
        // TODO pop para sugerir otra forma de contacto cuando es spam
        
        $form_status_pop__mainForm = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
            . '<div role="document" tabindex="0">'
            . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">Cerrar</button>'
            . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__mainForm .'">' . $form_status_error_globalA__mainForm .'</h2>'
            . '<p>'. $form_status_error_globalB__mainForm .'</p>'
            . '<p>'. $form_status_error_globalC__mainForm .'</p>'
            . $form_status_captcha_error_successFalse__mainForm    
            . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
            . '</div>'
            . '</div>'
            . '<div class="modal_global modal_formStatus"></div>';
        
        $form_validation_div_class__mainForm    = 'displayNone';
        
        $form_status_marquee__mainForm                  = '';        
/* // FIN mensaje error en popup -------------------------------------------- */

/* // Si success es false --------------------------------------------------- */ 
    } else {
        
        $form_status_marquee__mainForm = $form_status_captcha_error_other__mainForm;
    
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- *
        $form_status_pop__mainForm = '<div class="pop_global pop_warning pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
            . '<div role="document" tabindex="0">'
            . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">Cerrar</button>'
            . '<h2 id="formError" class="'. $form_status_pop_h2_error_classes__mainForm .'">' . $form_status_error_globalA__mainForm .'</h2>'
            . '<p>'. $form_status_error_globalB__mainForm .'</p>'
            . '<p>'. $form_status_error_globalC__mainForm .'</p>'
            . $form_status_captcha_error_other__mainForm
            . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
            . '</div>'
            . '</div>'
            . '<div class="modal_global modal_formStatus"></div>';
        $form_validation_div_class__mainForm    = 'displayNone';
        $form_status_marquee__mainForm                  = '';
/* // FIN mensaje error en popup -------------------------------------------- */
    }
}
?>