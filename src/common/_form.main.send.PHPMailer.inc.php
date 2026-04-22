<?php
ob_start();

/*
// REF [29] Form Status OK, tick
*/

/* // Import the PHPMailer class into the global namespace ------------------ */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* // Inicia proceso de form luego de form.submit() ------------------------- */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
/* // Import the PHPMailer class into the global namespace ------------------ */
    $phpMailerBase = $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/';
    if (!is_file($phpMailerBase . 'Exception.php') || !is_file($phpMailerBase . 'PHPMailer.php') || !is_file($phpMailerBase . 'SMTP.php')) {
        return;
    }
    require_once $phpMailerBase . 'Exception.php';
    require_once $phpMailerBase . 'PHPMailer.php';
    require_once $phpMailerBase . 'SMTP.php';
    
/* // Create variables for form data ---------------------------------------- */
    $data_nombre__mainForm = $_POST['data_nombre__mainForm'];
        
    /* El resto de las variables estan en `[/src/common/form.var.data.php]` */

/* // INICIA VALIDACIÓN EN .form_validation_div ----------------------------- *
    if(!isset($data_nombre__mainForm) || trim($data_nombre__mainForm) == ''){
        $form_validation_div_msg__mainForm = $form_validation_msg_data_nombre__mainForm;
        $form_validation_div_class__mainForm = " form_validation_div_invalid";
        $form_validation_input_class_data_nombre__mainForm = " form_validation_input_invalid";
        $form_input_autofocus_data_nombre__mainForm = "autofocus";

    /* El resto de las variables estan en `[/src/common/form.var.data.php]` */
        
/* // FIN de validacion en .form_validation_div ----------------------------- */

/* // INICIA VALIDACIÓN en .form_validation_span ---------------------------- */
    if(!isset($data_nombre__mainForm) || trim($data_nombre__mainForm) == ''){
        $form_validation_span_msg_data_nombre__mainForm = $form_validation_msg_data_nombre__mainForm;
        $form_validation_span_msg_data_nombre_en__mainForm = $form_validation_msg_data_nombre_en__mainForm;
        $form_validation_span_class_data_nombre__mainForm = " form_validation_span_active";
        $form_validation_input_class_data_nombre__mainForm = " form_validation_input_invalid";
        $form_input_autofocus_data_nombre__mainForm = "autofocus";
        
    /* El resto de las variables estan en `[/src/common/form.var.data.php]` */
        
/* // FIN de validacion en .form_validation_span ---------------------------- */
        
    } else {
/* // Si todos los campos validan inicia $mail ------------------------------ */
        $mail = new PHPMailer(true);
        try {
            $mail->CharSet = PHPMailer::CHARSET_UTF8;
            
/* // $mail SMTPDebug ------------------------------------------------------- */
            #$mail->SMTPDebug = 2;
            #$mail->SMTPDebug = SMTP::DEBUG_CONNECTION; 
                    
/* // $mail Host de conexion SMTP ------------------------------------------- */
            $mail->isSMTP();
            $mail->Host = $ENV_form_PHPMailer_SMTPhost;
            
/* // $mail Usuario y Password SMTP ----------------------------------------- */
            $mail->SMTPAuth = true;
            $mail->Username = $ENV_form_PHPMailer_account;
            $mail->Password = $ENV_form_PHPMailer_password;
            
/* // $mail Seguridad TLS / SSL / Puertos ----------------------------------- */
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->SMTPSecure = 'ssl';

            #$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            #$mail->SMTPSecure = 'tls';

            #$mail->Port = 25;
            #$mail->Port = 26;
            $mail->Port = 465;
            #$mail->Port = 587;

/* // Descomentar si el servidor SMTP tiene un certificado autofirmado ------ */
            #$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];
            
/* // Descomentar si se requiere desactivar cifrado - (se suele usar en conjunto con la siguiente línea) - */
            #$mail->SMTPSecure = false;
            
/* // Descomentar si se requiere desactivar completamente TLS (sin cifrado) - */
            #$mail->SMTPAutoTLS = false;

/* // Direcciones remitente y destinatarios --------------------------------- */
            $mail->setFrom($ENV_form_PHPMailer_account, $site_name_form . ' Web Form');
            
            $mail->addAddress('tampas@gmail.com');
            #$mail->addCC('gabrielvol@protonmail.com');
            #$mail->addBCC('ggvv@hotmail.com.ar');

            #$mail->addAddress($form_recipient__mainForm);
            #$mail->addCC($form_recipient_CC__mainForm);
            #$mail->addBCC($form_recipient_BCC__mainForm); 

            #$mail->addAddress($form_recipient__global);
            #$mail->addCC($form_recipient_CC__global);
            #$mail->addBCC($form_recipient_BCC__global);            

            /*
            $mail->addAddress($form_recipient__global);
            $addList = function ($list, $fn) use ($mail) {
                if (!isset($list)) {
                    return;
                }
                $items = preg_split('/[;,]+/', $list);
                foreach ($items as $item) {
                    $email = trim($item);
                    if ($email !== '') {
                        $mail->$fn($email);
                    }
                }
            };

            #$addList($form_recipient_CC__mainForm, 'addCC');
            #$addList($form_recipient_BCC__mainForm, 'addBCC');

            $addList($form_recipient_CC__global, 'addCC');
            $addList($form_recipient_BCC__global, 'addBCC');
            */
            
/* // Cuerpo de mail y asunto ----------------------------------------------- */
            $mail->isHTML(true);
            $mail->Subject = 'Contacto Web PHPMailer de ' . $data_nombre__mainForm . ' - ' . $form_id_spelled;
            $mail->Body  = '<small style="color:#444">Este mensaje fue enviado desde el formulario que se encuentra en ' . $data_fullURL__mainForm . '</small><br><br>';
            $mail->Body .= '<small style="color:#444"><strong>Filtro:</strong> FiltroFormWeb</small><br><br>';
            $mail->Body .= '<strong>Nombre:</strong> ' . $data_nombre__mainForm . '<br>';
            $mail->Body .= '<br /><strong>Mensaje:</strong><br />' . $data_mensaje__mainForm;
    
            /* El resto de las variables estan en `[/src/common/form.var.data.php]` */
                    
            $mail->Body .= '<br /><br /><strong>Errores:</strong><br />' . error_get_last()['message'];
            
            $mail->Body .= '<br><br>______<br><small style="color:#666">Fin del mensaje</small>';
            
/* // INICIA MENSAJE OK EN POPUP -------------------------------------------- */
            $form_status_pop__mainForm = '<div class="pop_global pop_formStatus pop_formStatus_ok" role="alertdialog" aria-labelledby="formOK">'
                . '<div role="document" tabindex="0">'
                . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">' . $form_status_pop_button_close_txt . '</button>'
                . '<h2 id="formOK" class="' . $form_status_pop_h2_ok_classes__mainForm . '">' . $form_status_ok_globalA__mainForm . '</h2>'
/* // REF [29]  . '<h2 id="formOK" class="' . $form_status_pop_h2_ok_classes__mainForm . '"><span>' . $form_status_ok_globalA__mainForm . '</span></h2>' */
                . '<p>' . $form_status_ok_globalB__mainForm . '</p>'
                . '<p>' . $form_status_ok_globalC__mainForm . '</p>'
                . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                . '</div></div><div class="modal_global modal_formStatus"></div>';
            
            $form_validation_div_class__mainForm = 'displayNone';

          // $form_status_marquee__mainForm = '<p class="form_status_marquee form_status_ok">' . $form_status_ok_global__mainForm .'</p>';
/* // FIN mensaje ok en popup ----------------------------------------------- */

            $mail->send();  
            
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */
            $_POST['data_nombre__mainForm'] = '';  
            $_POST['data_mensaje__mainForm'] = '';      
            /* El resto de las variables estan en `[/src/common/form.var.data.php]` */

            /* Redirect after successful send
            if (!headers_sent()) {
                header('Location: /gracias.php#gracias');
                exit();
            } else {
                echo '<script>window.location.href = "/gracias.php#gracias";</script>';
                echo '<noscript><meta http-equiv="refresh" content="0;url=/gracias.php#gracias" /></noscript>';
                exit();
            }
            */
            
        } catch (phpmailerException $e) {
            echo $e->errorMessage();

        } catch (Exception $e) {
/* // INICIA MENSAJE ERROR EN POPUP ----------------------------------------- */
            $form_status_pop__mainForm = '<div class="pop_global pop_formStatus pop_formStatus_error" role="alertdialog" aria-labelledby="formError">'
                . '<div role="document" tabindex="0">'
                . '<button type="button" class="button_close button_close_pop button_close_pop_formStatus hover_grow_S_ani" name="pop_formStatus_close" aria-pressed="false">' . $form_status_pop_button_close_txt . '</button>'
                . '<h2 id="formError" class="' . $form_status_pop_h2_error_classes__mainForm . '">' . $form_status_error_globalA__mainForm . '</h2>'
                . '<p>' . $form_status_error_globalB__mainForm . '</p>'
                . '<p>' . $form_status_error_globalC__mainForm . '</p>'
                . '<p class="formStatus_code">' . $mail->ErrorInfo . '</p>'
                . '<p class="formStatus_code">' . $e->getMessage() . '</p>'
                . '<button type="button" class="button_submit_pop button_submit_pop_formStatus" name="pop_formStatus_close" aria-pressed="false">OK</button>'
                . '</div></div><div class="modal_global modal_formStatus"></div>';
            
            $form_validation_div_class__mainForm = 'displayNone';

            // $form_status_marquee__mainForm = '<p class="form_status_marquee form_status_error">' . $form_status_error_global__mainForm . '</p>';
/* // FIN mensaje error en popup -------------------------------------------- */
            
            //echo 'El mensaje no se ha podido enviar, error: ', $mail->ErrorInfo;
        }
    }
}
?>
