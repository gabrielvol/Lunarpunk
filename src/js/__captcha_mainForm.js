/* * NombreDeProyecto * ========================================================
   Captcha Get Token [/src/js/_captcha_mainForm.js]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- 
Funcion captchaGetToken para obtener el token de reCaptcha V3 y asignarlo al
campo hidden `data_captchaResponseToken__`
 
1. Hay que reemplazar `mainForm` por el ID correspondiente en:
- action
- campo hidden `data_captchaResponseToken__ ... `

2. Hay que crear el condicional en `[/src/common/footer.js.inc.php]`

// REF [50] Google captcha
*/



function captchaGetToken(form) {
    grecaptcha.ready(function() {
        
// Request captcha token
        grecaptcha.execute(captcha_key_site, {action: 'mainForm'}).then(function(token) {
            
// Set token as the value of `data_captchaResponseToken__mainForm` hidden field
            data_captchaResponseToken__mainForm.value = token;
            
// Submit the form            
            form.submit();
        });
    });
}