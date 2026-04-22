<?php
/* // Form identifier Global ------------------------------------------------ *
   La variable $form_id puede ser declarada de tres formas:
   
   a) De manera global en `[/src/var/form.var.inc.php]` para todo el sitio
   b) En el archivo `[/src/var/page.PAGEINT.var.inc.php]` para un grupo de paginas
   c) En la pagina donde va a ser usado 
*/ ?>

<form method="post" enctype="multipart/form-data" class="mha" id="<?php echo $form_id; ?>" name="<?php echo $form_id; ?>">
    <?php
        $data_fullURL__mainForm = $page_url_full;
        
        if(isset($gettext_lang) && $gettext_lang == 'en_GB'){
            include('form.main.status.en.inc.php');
        } else {
            include('form.main.status.es.inc.php');
        }
        
       // include('form.main.send.mail.inc.php');
       // include('form.main.send.mail.captcha.inc.php');

       // include('form.main.send.PHPMailer.inc.php');
       // include('form.main.send.PHPMailer.captcha.inc.php');
       // include('form.main.send.PHPMailer.file.captcha.inc.php');

        echo $form_status_marquee__mainForm;
        
        echo $form_status_file__mainForm;
        
        echo $form_status_pop__mainForm;
        
       // echo '<div class="form_validation_div '. $form_validation_div_class__mainForm .'">'. $form_validation_div_msg__mainForm .'</div>';
    ?>
    
    
    
    <?php if (!empty($form_hidden_variable__mainForm)): ?>
        <input lang="<?php echo $site_lang_HTML_attr; ?>" type="hidden" name="data_form_hidden__mainForm" id="data_form_hidden__mainForm" value="Valor escondido"> 
    <?php endif; ?>
        
        
    
    <?php if(!empty($form_var)): // REF [45] ?>
    <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_opcionSeleccionada__mainForm" class="label_opcionSeleccionada__mainForm">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Estoy consultando por el siguiente form_var:
        <?php else: ?>
            Subject: form_var
        <?php endif; ?></span>
        <input type="text" name="data_opcionSeleccionada__mainForm" id="data_opcionSeleccionada__mainForm" class="data_opcionSeleccionada__mainForm" form="<?php echo $form_id; ?>" value="<?php echo $form_var; ?>" readonly>
    </label>
    <?php endif; ?>
        
        

    <label for="data_nombre__mainForm" class="<?php echo $form_validation_input_class_data_nombre__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Name
        <?php else: ?>
            Nombre
        <?php endif; ?></span>
        <input type="text" name="data_nombre__mainForm" id="data_nombre__mainForm" class="data_nombre__mainForm <?php echo $form_validation_input_class_data_nombre__mainForm; ?>" value="<?php echo $_POST['data_nombre__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_nombre__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_nombre__mainForm; ?>"><?php echo $form_validation_span_msg_data_nombre__mainForm; ?></span>        
        <div class="input_data_holder" aria-hidden="true"><?php echo $_POST['data_nombre__mainForm']; ?></div>
        <div class="input_data_holder" aria-hidden="true"><pre><?php var_dump($_POST); ?></pre></div>
        <div class="input_data_holder" aria-hidden="true"><pre><?php print_r($_POST); ?></pre></div>  
        
    </label>
        
        

    <label for="data_apellido__mainForm" class="<?php echo $form_validation_input_class_data_apellido__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Surname
        <?php else: ?>
            Apellido
        <?php endif; ?></span>
        <input type="text" name="data_apellido__mainForm" id="data_apellido__mainForm" class="data_apellido__mainForm <?php echo $form_validation_input_class_data_apellido__mainForm; ?>" value="<?php echo $_POST['data_apellido__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_apellido__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_apellido__mainForm; ?>"><?php echo $form_validation_span_msg_data_apellido__mainForm; ?></span>
    </label>
        
        

    <label for="data_nombreAp__mainForm" class="<?php echo $form_validation_input_class_data_nombreAp__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Full Name
        <?php else: ?>
            Nombre y Apellido
        <?php endif; ?></span>
        <input type="text" name="data_nombreAp__mainForm" id="data_nombreAp__mainForm" class="data_nombreAp__mainForm <?php echo $form_validation_input_class_data_nombreAp__mainForm; ?>" value="<?php echo $_POST['data_nombreAp__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_nombreAp__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_nombreAp__mainForm; ?>"><?php echo $form_validation_span_msg_data_nombreAp__mainForm; ?></span>
    </label>
        
        

    <label for="data_nombreCo__mainForm" class="<?php echo $form_validation_input_class_data_nombreCo__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Full Name
        <?php else: ?>
            Nombre Completo
        <?php endif; ?></span>
        <input type="text" name="data_nombreCo__mainForm" id="data_nombreCo__mainForm" class="data_nombreCo__mainForm <?php echo $form_validation_input_class_data_nombreCo__mainForm; ?>" value="<?php echo $_POST['data_nombreCo__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_nombreCo__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_nombreCo__mainForm; ?>"><?php echo $form_validation_span_msg_data_nombreCo__mainForm; ?></span>
    </label>
        
        

    <label for="data_username__mainForm" class="<?php echo $form_validation_input_class_data_username__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Username
        <?php else: ?>
            Nombre de usuario
        <?php endif; ?></span>
        <input type="text" name="data_username__mainForm" id="data_username__mainForm" class="data_username__mainForm <?php echo $form_validation_input_class_data_username__mainForm; ?>" value="<?php echo $_POST['data_username__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_username__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_username__mainForm; ?>"><?php echo $form_validation_span_msg_data_username__mainForm; ?></span>
    </label>
        
        

    <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_genero__mainForm">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Gender
        <?php else: ?>
            Género
        <?php endif; ?></span>
        
        <?php $data_genero_list = [
                'Femenino'   => _('Femenino'),
                'Masculino'=> _('Masculino'),
            ];

            $data_genero_selected = $_POST['data_genero__mainForm'] ?? '';
            $data_genero_selected = array_key_exists($data_genero_selected, $data_genero_list) ? $data_genero_selected : ''; ?>
        <select name="data_genero__mainForm" id="data_genero__mainForm" class="data_genero__mainForm <?php echo $form_validation_input_class_data_genero__mainForm; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next">
            <option value="" disabled <?php echo $data_genero_selected === '' ? 'selected' : ''; ?>>
                <?php echo _('Seleccione una opci&oacute;n'); ?>
            </option>

            <?php foreach ($data_genero_list as $data_genero_value => $data_genero_option): ?>
                <option value="<?php echo $data_genero_value; ?>" <?php echo $data_genero_selected === $data_genero_value ? 'selected' : ''; ?>>
                    <?php echo $data_genero_option; ?>
                </option>
        <?php endforeach; ?>
        </select>
    </label>
        
        

    <label for="data_genero__mainForm" class="<?php echo $form_validation_input_class_data_genero__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Gender
        <?php else: ?>
            Género
        <?php endif; ?></span>
        <input type="text" name="data_genero__mainForm" id="data_genero__mainForm" class="data_genero__mainForm <?php echo $form_validation_input_class_data_genero__mainForm; ?>" value="<?php echo $_POST['data_genero__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_genero__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_genero__mainForm; ?>"><?php echo $form_validation_span_msg_data_genero__mainForm; ?></span>
    </label>
        
        

    <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_genero__mainForm">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Gender
        <?php else: ?>
            Género
        <?php endif; ?></span>        
        <input lang="<?php echo $site_lang_HTML_attr; ?>" type="text" name="data_genero__mainForm" id="data_genero__mainForm" class="data_genero__mainForm" form="<?php echo $form_id; ?>" enterkeyhint="next" list="genero_listaTotal">
        <datalist id="genero_listaTotal">
            <option value="Lesbiana">
            <option value="Gay">
            <option value="Bixesual">
            <option value="Transgénero">
            <option value="Transfemenino">
            <option value="Transmasculino">
            <option value="Travesti">
            <option value="Intersexual">
            <option value="Pansexual">
            <option value="Asexual">
            <option value="Prefiero no decirlo">
            <option value="Otre">
            <option value="Demisexual">
            <option value="Heterosexual">
            <option value="Andrógine">
            <option value="Polisexual">
            <option value="Poliamoroso">
            <option value="Poligénero">
            <option value="Queer">
            <option value="Lithsexual">
            <option value="Hombre trans">
            <option value="Mujer trans">
            <option value="Persona trans">
            <option value="Transexual">
            <option value="Sapiosexual">
            <option value="Hombre">
            <option value="Mujer">
            <option value="No binario">   
            <option value="Género neutral">  
            <option value="Género fluido">   
            <option value="Bigénero">                            
        </datalist>
        <span class="form_label_msg_sugg">La lista incluye sugerencias, pero podés completar libremente el campo.</span>
    </label>  
        
        

    <label for="data_dni__mainForm" class="<?php echo $form_validation_input_class_data_dni__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            ID number
        <?php else: ?>
            DNI
        <?php endif; ?></span>
        <input type="text" inputmode="numeric" pattern="[0-9]*" min="0" name="data_dni__mainForm" id="data_dni__mainForm" class="data_dni__mainForm <?php echo $form_validation_input_class_data_dni__mainForm; ?>" value="<?php echo $_POST['data_dni__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_dni__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_dni__mainForm; ?>"><?php echo $form_validation_span_msg_data_dni__mainForm; ?></span>
    </label>
        
        

    <label for="data_password__mainForm" class="<?php echo $form_validation_input_class_data_password__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Password
        <?php else: ?>
            Contraseña
        <?php endif; ?></span>
        <input type="password" name="contrasena__mainForm" id="data_password__mainForm" class="data_password__mainForm <?php echo $form_validation_input_class_data_password__mainForm; ?>" value="<?php echo $_POST['contrasena__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="go" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_password__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_password__mainForm; ?>"><?php echo $form_validation_span_msg_data_password__mainForm; ?></span>
        <span class="form_label_msg_sugg"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Forgot password? <a <?php echo $href_recuperarContrasena; ?>>Click here to recover</a>
        <?php else: ?>
            ¿Olvidaste tu contraseña? <a <?php echo $href_recuperarContrasena; ?>>Clic acá para recuperarla</a>
        <?php endif; ?>.</span>   
    </label>
        
        

    <label for="data_pais__mainForm" class="<?php echo $form_validation_input_class_data_pais__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Country
        <?php else: ?>
            Pa&iacute;s
        <?php endif; ?></span>
        
        <?php
            $data_pais_locale = (isset($gettext_lang) && $gettext_lang == 'en_GB') ? 'en' : 'es';
            $data_pais_list = [];
            $data_pais_bundle = \ResourceBundle::create($data_pais_locale, 'ICUDATA-region');

            if ($data_pais_bundle) {
                $country_codes = $data_pais_bundle->get('Countries');

                if ($country_codes) {
                    foreach ($country_codes as $data_pais_code_country => $data_pais_code_country_name) {
                        // Skip numeric / deprecated region codes
                        if (strlen($data_pais_code_country) === 2) {
                            $data_pais_list[$data_pais_code_country] = $data_pais_code_country_name;
                        }
                    }

                    asort($data_pais_list); // alphabetical
                }
            }
            
            $data_pais_selected = $_POST['data_pais__mainForm'] ?? '';
            $data_pais_selected = array_key_exists($data_pais_selected, $data_pais_list)
                ? $data_pais_selected
                : '';
            $data_provincia_is_argentina = ($data_pais_selected === '' || $data_pais_selected === 'AR');
        ?>
        
        <select name="data_pais__mainForm" id="data_pais__mainForm" class="data_pais__mainForm <?php echo $form_validation_input_class_data_pais__mainForm; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" <?php echo $form_input_autofocus_data_pais__mainForm; ?>>

            <option value="" disabled <?php echo $data_pais_selected === '' ? 'selected' : ''; ?>>
                <?php echo (isset($gettext_lang) && $gettext_lang == 'en_GB')
                    ? 'Select your country'
                    : 'Seleccione su país'; ?>
            </option>

            <?php foreach ($data_pais_list as $data_pais_code_list_country => $data_pais_code_list_country_name): ?>                
                <option value="<?php echo htmlspecialchars($data_pais_code_list_country, ENT_QUOTES, 'UTF-8'); ?>"
                    <?php echo $data_pais_selected === $data_pais_code_list_country ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($data_pais_code_list_country_name, ENT_QUOTES, 'UTF-8'); ?>
                </option>
            <?php endforeach; ?>

        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_pais__mainForm; ?>"><?php echo $form_validation_span_msg_data_pais__mainForm; ?></span>
    </label>
        
        

    <label
        id="data_provinciaSelectWrap__mainForm"
        for="data_provincia__mainForm"
        class="<?php echo $form_validation_input_class_data_provincia__mainForm; ?>"
        style="<?php echo $data_provincia_is_argentina ? '' : 'display:none;'; ?>">
        
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            State/Province
        <?php else: ?>
            Provincia
        <?php endif; ?></span>
        
        <?php $data_provincia_list = [
            'BuenosAires'       => 'Buenos Aires',
            'Catamarca'         => 'Catamarca',
            'Chaco'             => 'Chaco',
            'Chubut'            => 'Chubut',
            'CABA'              => 'Ciudad Autónoma de Buenos Aires',
            'Cordoba'           => 'Córdoba',
            'Corrientes'        => 'Corrientes',
            'EntreRios'         => 'Entre Ríos',
            'Formosa'           => 'Formosa',
            'Jujuy'             => 'Jujuy',
            'LaPampa'           => 'La Pampa',
            'LaRioja'           => 'La Rioja',
            'Mendoza'           => 'Mendoza',
            'Misiones'          => 'Misiones',
            'Neuquen'           => 'Neuquén',
            'RioNegro'          => 'Río Negro',
            'Salta'             => 'Salta',
            'SanJuan'           => 'San Juan',
            'SanLuis'           => 'San Luis',
            'SantaCruz'         => 'Santa Cruz',
            'SantaFe'           => 'Santa Fe',
            'SantiagoDelEstero' => 'Santiago del Estero',
            'TierraDelFuego'    => 'Tierra del Fuego',
            'Tucuman'           => 'Tucumán',
            ];

            $data_provincia_selected = $_POST['data_provincia__mainForm'] ?? '';
            $data_provincia_selected = array_key_exists($data_provincia_selected, $data_provincia_list) ? $data_provincia_selected : '';
        ?>
        
        <select name="data_provincia__mainForm" id="data_provincia__mainForm" class="data_provincia__mainForm <?php echo $form_validation_input_class_data_provincia__mainForm; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" <?php echo $form_input_autofocus_data_provincia__mainForm; ?> <?php echo $data_provincia_is_argentina ? '' : 'disabled'; ?>>
            <option value="" disabled <?php echo $data_provincia_selected === '' ? 'selected' : ''; ?>>
                <?php echo _('Seleccione su provincia'); ?>
            </option>
                
            <?php foreach ($data_provincia_list as $data_provincia_value => $data_provincia_option): ?>
                <option
                    value="<?php echo htmlspecialchars($data_provincia_value, ENT_QUOTES, 'UTF-8'); ?>"
                    <?php echo $data_provincia_selected === $data_provincia_value ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($data_provincia_option, ENT_QUOTES, 'UTF-8'); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_provincia__mainForm; ?>"><?php echo $form_validation_span_msg_data_provincia__mainForm; ?></span>
    </label>  

    <label
        id="data_provinciaTextWrap__mainForm"
        for="data_provincia_text__mainForm"
        class="<?php echo $form_validation_input_class_data_provincia__mainForm; ?>"
        style="<?php echo $data_provincia_is_argentina ? 'display:none;' : ''; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            State/Province
        <?php else: ?>
            Provincia
        <?php endif; ?></span>
        <input type="text" name="data_provincia__mainForm" id="data_provincia_text__mainForm" class="data_provincia__mainForm <?php echo $form_validation_input_class_data_provincia__mainForm; ?>" value="<?php echo $_POST['data_provincia__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" <?php echo $form_input_autofocus_data_provincia__mainForm; ?> <?php echo $data_provincia_is_argentina ? 'disabled' : ''; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_provincia__mainForm; ?>"><?php echo $form_validation_span_msg_data_provincia__mainForm; ?></span>
    </label> 
        
        

    <label for="data_ciudad__mainForm" class="<?php echo $form_validation_input_class_data_ciudad__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            City
        <?php else: ?>
            Ciudad
        <?php endif; ?></span>
        <input type="text" name="data_ciudad__mainForm" id="data_ciudad__mainForm" class="data_ciudad__mainForm <?php echo $form_validation_input_class_data_ciudad__mainForm; ?>" value="<?php echo $_POST['data_ciudad__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_ciudad__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_ciudad__mainForm; ?>"><?php echo $form_validation_span_msg_data_ciudad__mainForm; ?></span>
    </label> 
        
        

    <label for="data_codigoPostal__mainForm" class="<?php echo $form_validation_input_class_data_codigoPostal__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            C&oacute;digo postal
        <?php else: ?>
            ZIP Code
        <?php endif; ?></span>
        <input type="text" name="data_codigoPostal__mainForm" id="data_codigoPostal__mainForm" class="data_codigoPostal__mainForm <?php echo $form_validation_input_class_data_codigoPostal__mainForm; ?>" value="<?php echo $_POST['data_codigoPostal__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php echo _('Ej.:'); ?> B1846DWF, 1832" <?php echo $form_input_autofocus_data_codigoPostal__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_codigoPostal__mainForm; ?>"><?php echo $form_validation_span_msg_data_codigoPostal__mainForm; ?></span>
    </label>

    <label for="data_localidad__mainForm" class="<?php echo $form_validation_input_class_data_localidad__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Locality
        <?php else: ?>
            Localidad
        <?php endif; ?></span>
        <input type="text" name="data_localidad__mainForm" id="data_localidad__mainForm" class="data_localidad__mainForm <?php echo $form_validation_input_class_data_localidad__mainForm; ?>" value="<?php echo $_POST['data_localidad__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_localidad__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_localidad__mainForm; ?>"><?php echo $form_validation_span_msg_data_localidad__mainForm; ?></span>
    </label>
        
        

    <label for="data_direccion__mainForm" class="<?php echo $form_validation_input_class_data_direccion__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Adresss
        <?php else: ?>
            Dirección
        <?php endif; ?></span>
        <input type="text" name="data_direccion__mainForm" id="data_direccion__mainForm" class="data_direccion__mainForm <?php echo $form_validation_input_class_data_direccion__mainForm; ?>" value="<?php echo $_POST['data_direccion__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_direccion__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_direccion__mainForm; ?>"><?php echo $form_validation_span_msg_data_direccion__mainForm; ?></span>
    </label>
        
        

    <label for="data_domicilio__mainForm" class="<?php echo $form_validation_input_class_data_domicilio__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Adresss
        <?php else: ?>
            Domicilio
        <?php endif; ?></span>
        <input type="text" name="data_domicilio__mainForm" id="data_domicilio__mainForm" class="data_domicilio__mainForm <?php echo $form_validation_input_class_data_domicilio__mainForm; ?>" value="<?php echo $_POST['data_domicilio__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_domicilio__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_domicilio__mainForm; ?>"><?php echo $form_validation_span_msg_data_domicilio__mainForm; ?></span>
    </label> 
        
        

    <label for="data_comoQueres__mainForm" class="<?php echo $form_validation_input_class_data_comoQueres__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            How do you want to be contacted?
        <?php else: ?>
            ¿Cómo querés que te contactemos?
        <?php endif; ?></span>
        
        <?php $data_comoQueres_list = [
                'WhatsApp'=> _('WhatsApp'),
                'Instagram'   => _('Instagram'),
            ];

            $data_comoQueres_selected = $_POST['data_comoQueres__mainForm'] ?? '';
            $data_comoQueres_selected = array_key_exists($data_comoQueres_selected, $data_comoQueres_list) ? $data_comoQueres_selected : ''; ?>
        <select name="data_comoQueres__mainForm" id="data_comoQueres__mainForm" class="data_comoQueres__mainForm <?php echo $form_validation_input_class_data_comoQueres__mainForm; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next">
            <option value="" disabled <?php echo $data_comoQueres_selected === '' ? 'selected' : ''; ?>>
                <?php echo _('WhatsAspp o Instagram'); ?>
            </option>

            <?php foreach ($data_comoQueres_list as $data_comoQueres_value => $data_comoQueres_option): ?>
                <option value="<?php echo $data_comoQueres_value; ?>" <?php echo $data_comoQueres_selected === $data_comoQueres_value ? 'selected' : ''; ?>>
                    <?php echo $data_comoQueres_option; ?>
                </option>
        <?php endforeach; ?>
        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_comoQueres__mainForm; ?>"><?php echo $form_validation_span_msg_data_comoQueres__mainForm; ?></span>
    </label>
        
        

    <label for="data_GENERICSELECT__mainForm" class="form_required <?php echo $form_validation_input_class_data_GENERICSELECT__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            GENERICSELECT
        <?php else: ?>
            GENERICSELECT
        <?php endif; ?></span>
        
        <?php $data_GENERICSELECT_list = [
                'AAAAAAAAAAAAA'   => _('AAAAAAAAAAAAA'),
                'BBBBBBBBBBBBB'   => _('BBBBBBBBBBBBB'),
                'CCCCCCCCCCCCC'=> _('CCCCCCCCCCCCC'),
            ];

            $data_GENERICSELECT_selected = $_POST['data_GENERICSELECT__mainForm'] ?? '';
            $data_GENERICSELECT_selected = array_key_exists($data_GENERICSELECT_selected, $data_GENERICSELECT_list) ? $data_GENERICSELECT_selected : ''; ?>
        <select name="data_GENERICSELECT__mainForm" id="data_GENERICSELECT__mainForm" class="data_GENERICSELECT__mainForm <?php echo $form_validation_input_class_data_GENERICSELECT__mainForm; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next">
            <option value="" disabled <?php echo $data_GENERICSELECT_selected === '' ? 'selected' : ''; ?>>
                <?php echo _('Selecciona una opci&oacute;n por favor'); ?>
            </option>

            <?php foreach ($data_GENERICSELECT_list as $data_GENERICSELECT_value => $data_GENERICSELECT_option): ?>
                <option value="<?php echo $data_GENERICSELECT_value; ?>" <?php echo $data_GENERICSELECT_selected === $data_GENERICSELECT_value ? 'selected' : ''; ?>>
                    <?php echo $data_GENERICSELECT_option; ?>
                </option>
        <?php endforeach; ?>
        </select>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_GENERICSELECT__mainForm; ?>"><?php echo $form_validation_span_msg_data_GENERICSELECT__mainForm; ?></span>
    </label>
        
        

    <label for="data_celular__mainForm" class="<?php echo $form_validation_input_class_data_celular__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Cell phone
        <?php else: ?>
            Celular
        <?php endif; ?></span>
        <input type="tel" inputmode="tel" pattern="[0-9]*" min="0" name="data_celular__mainForm" id="data_celular__mainForm" class="data_celular__mainForm <?php echo $form_validation_input_class_data_celular__mainForm; ?>" value="<?php echo $_POST['data_celular__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_celular__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_celular__mainForm; ?>"><?php echo $form_validation_span_msg_data_celular__mainForm; ?></span>
    </label>

    <label for="data_telefono__mainForm" class="<?php echo $form_validation_input_class_data_telefono__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Telephone
        <?php else: ?>
            Tel&eacute;fono
        <?php endif; ?></span>
        <input type="tel" inputmode="tel" pattern="[0-9]*" min="0" name="data_telefono__mainForm" id="data_telefono__mainForm" class="data_telefono__mainForm <?php echo $form_validation_input_class_data_telefono__mainForm; ?>" value="<?php echo $_POST['data_telefono__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_telefono__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_telefono__mainForm; ?>"><?php echo $form_validation_span_msg_data_telefono__mainForm; ?></span>
    </label>
        
        

    <fieldset class="<?php echo $form_validation_input_class_data_whatsApp__mainForm; ?>">
        <legend class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            WhatsApp contact
        <?php else: ?>
            Nº de WhatsApp
        <?php endif; ?></legend>

        <label for="data_whatsAppAreaCode__mainForm" class="label_comp label_comp_small <?php echo $form_validation_input_class_data_whatsAppAreaCode__mainForm; ?>">
            <span class="form_label_name">Código de área</span>            
            <span class="form_label_name"><span class="txAbbreviated abbreviated_C">Código</span> de área</span>
            <input type="tel" inputmode="tel" pattern="[0-9]*" min="0" name="data_whatsAppAreaCode__mainForm" id="data_whatsAppAreaCode__mainForm" class="data_whatsAppAreaCode__mainForm <?php echo $form_validation_input_class_data_whatsAppAreaCode__mainForm; ?>" value="<?php echo $_POST['data_whatsAppAreaCode__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" <?php echo $form_input_autofocus_data_whatsAppAreaCode__mainForm; ?>>
            <span class="form_validation_span <?php echo $form_validation_span_class_data_whatsAppAreaCode__mainForm; ?>"><?php echo $form_validation_span_msg_data_whatsAppAreaCode__mainForm; ?></span>
            <span class="form_label_msg_sugg"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
                E.g. 11, 341, 2320
            <?php else: ?>
                Ej. 11, 82, 341
            <?php endif; ?></span>
        </label>

        <label for="data_whatsAppNumber__mainForm" class="label_comp label_comp_big <?php echo $form_validation_input_class_data_whatsAppNumber__mainForm; ?>">
            <span class="form_label_name">Número</span>
            <input type="tel" inputmode="tel" pattern="[0-9]*" min="0" name="data_whatsAppNumber__mainForm" id="data_whatsAppNumber__mainForm" class="data_whatsAppNumber__mainForm <?php echo $form_validation_input_class_data_whatsAppNumber__mainForm; ?>" value="<?php echo $_POST['data_whatsAppNumber__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" <?php echo $form_input_autofocus_data_whatsAppNumber__mainForm; ?>>
            <span class="form_validation_span <?php echo $form_validation_span_class_data_whatsAppNumber__mainForm; ?>"><?php echo $form_validation_span_msg_data_whatsAppNumber__mainForm; ?></span>
            <span class="form_label_msg_sugg"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
                E.g. 1234567, 12345678
            <?php else: ?>
                Ej. 3334444
            <?php endif; ?></span>
        </label>        
    </fieldset>
        
        

    <label for="data_email__mainForm" class="form_required <?php echo $form_validation_input_class_data_email__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            E-mail
        <?php else: ?>
            Correo electr&oacute;nico
        <?php endif; ?></span>
        <input type="email" inputmode="email" name="data_email__mainForm" id="data_email__mainForm" class="data_email__mainForm <?php echo $form_validation_input_class_data_email__mainForm; ?>" value="<?php echo $_POST['data_email__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_email__mainForm; ?> required>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_email__mainForm; ?>"><?php echo $form_validation_span_msg_data_email__mainForm; ?></span>  
        <span class="form_label_msg_sugg"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            An email will be sent to confirm this address
        <?php else: ?>
            Te enviaremos un correo a esta casilla para confirmar tu registro
        <?php endif; ?>.</span>
    </label>   
        
        

    <label for="data_webSite__mainForm" class="<?php echo $form_validation_input_class_data_webSite__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Website
        <?php else: ?>
            Sitio Web
        <?php endif; ?></span>
        <input type="text" inputmode="url" name="data_webSite__mainForm" id="data_webSite__mainForm" class="data_webSite__mainForm <?php echo $form_validation_input_class_data_webSite__mainForm; ?>" value="<?php echo $_POST['data_webSite__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php echo _('Debe comenzar con http://www'); ?>" <?php echo $form_input_autofocus_data_webSite__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_webSite__mainForm; ?>"><?php echo $form_validation_span_msg_data_webSite__mainForm; ?></span>
    </label>    
        
        

    <label for="data_facebook__mainForm" class="<?php echo $form_validation_input_class_data_facebook__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Facebook profile
        <?php else: ?>
            Perfil de Facebook
        <?php endif; ?></span>
        <input type="text" inputmode="url" name="data_facebook__mainForm" id="data_facebook__mainForm" class="data_facebook__mainForm <?php echo $form_validation_input_class_data_facebook__mainForm; ?>" value="<?php echo $_POST['data_facebook__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="" <?php echo $form_input_autofocus_data_facebook__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_facebook__mainForm; ?>"><?php echo $form_validation_span_msg_data_facebook__mainForm; ?></span>
    </label>  
        
        

    <label for="data_instagram__mainForm" class="<?php echo $form_validation_input_class_data_instagram__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Instagram
        <?php else: ?>
            Instagram
        <?php endif; ?></span>
        <input type="text"  inputmode="email" name="data_instagram__mainForm" id="data_instagram__mainForm" class="data_instagram__mainForm <?php echo $form_validation_input_class_data_instagram__mainForm; ?>" value="<?php echo $_POST['data_instagram__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo 'Just write the username'; } else { echo 'Solamente escribir el usuario'; } ?>" <?php echo $form_input_autofocus_data_instagram__mainForm; ?>> 
        <span class="form_validation_span <?php echo $form_validation_span_class_data_instagram__mainForm; ?>"><?php echo $form_validation_span_msg_data_instagram__mainForm; ?></span>
    </label>
        
        

    <label for="data_empresa__mainForm" class="<?php echo $form_validation_input_class_data_empresa__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Company
        <?php else: ?>
            Empresa
        <?php endif; ?></span>
        <span class="form_label_name"><?php echo _(''); ?></span>
        <input type="text" name="data_empresa__mainForm" id="data_empresa__mainForm" class="data_empresa__mainForm <?php echo $form_validation_input_class_data_empresa__mainForm; ?>" value="<?php echo $_POST['data_empresa__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_empresa__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_empresa__mainForm; ?>"><?php echo $form_validation_span_msg_data_empresa__mainForm; ?></span>
    </label>
        
        

    <label for="data_razonSocial__mainForm" class="<?php echo $form_validation_input_class_data_razonSocial__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Raz&oacute;n Social
        <?php else: ?>
            Raz&oacute;n Social
        <?php endif; ?></span>
        <input type="text" name="data_razonSocial__mainForm" id="data_razonSocial__mainForm" class="data_razonSocial__mainForm <?php echo $form_validation_input_class_data_razonSocial__mainForm; ?>" value="<?php echo $_POST['data_razonSocial__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_razonSocial__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_razonSocial__mainForm; ?>"><?php echo $form_validation_span_msg_data_razonSocial__mainForm; ?></span>
    </label>
        
        

    <label for="data_rubro__mainForm" class="<?php echo $form_validation_input_class_data_rubro__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Rubro
        <?php else: ?>
            Rubro
        <?php endif; ?></span>
        <input type="text" name="data_rubro__mainForm" id="data_rubro__mainForm" class="data_rubro__mainForm <?php echo $form_validation_input_class_data_rubro__mainForm; ?>" value="<?php echo $_POST['data_rubro__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_rubro__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_rubro__mainForm; ?>"><?php echo $form_validation_span_msg_data_rubro__mainForm; ?></span>
    </label>
        
        

    <label for="data_cargo__mainForm" class="<?php echo $form_validation_input_class_data_cargo__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Position
        <?php else: ?>
            Cargo
        <?php endif; ?></span>
        <input type="text" name="data_cargo__mainForm" id="data_cargo__mainForm" class="data_cargo__mainForm <?php echo $form_validation_input_class_data_cargo__mainForm; ?>" value="<?php echo $_POST['data_cargo__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_cargo__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_cargo__mainForm; ?>"><?php echo $form_validation_span_msg_data_cargo__mainForm; ?></span>
    </label>
        
        

    <label for="data_cantidad__mainForm" class="<?php echo $form_validation_input_class_data_cantidad__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Quantity
        <?php else: ?>
            Cantidad
        <?php endif; ?></span>
        <input type="number" pattern="[0-9]*" min="0" name="data_cantidad__mainForm" id="data_cantidad__mainForm" class="cantidad <?php echo $form_validation_input_class_data_cantidad__mainForm; ?>" value="<?php echo $_POST['data_cantidad__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_cantidad__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_cantidad__mainForm; ?>"><?php echo $form_validation_span_msg_data_cantidad__mainForm; ?></span>
    </label>
        
        

    <label for="data_cantidad__mainForm" class="<?php echo $form_validation_input_class_data_cantidad__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Cantidad de integrantes
        <?php else: ?>
            Cantidad de integrantes
        <?php endif; ?></span>
        <input type="number" inputmode="numeric" pattern="[0-9]*" min="0" name="data_cantidad__mainForm" id="data_cantidad__mainForm" class="cantidad <?php echo $form_validation_input_class_data_cantidad__mainForm; ?>" value="<?php echo $_POST['data_cantidad__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" <?php echo $form_input_autofocus_data_cantidad__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_cantidad__mainForm; ?>"><?php echo $form_validation_span_msg_data_cantidad__mainForm; ?></span>
    </label>
        
        

    <label for="data_fecha__mainForm" class="<?php echo $form_validation_input_class_data_fecha__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Date
        <?php else: ?>
            Fecha
        <?php endif; ?></span>
        <input type="date" name="data_fecha__mainForm" id="data_fecha__mainForm" class="data_fecha__mainForm <?php echo $form_validation_input_class_data_fecha__mainForm; ?>" value="<?php echo $_POST['data_fecha__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo 'Please select a date'; } else { echo 'Seleccione una fecha en el calendario'; } ?>" <?php echo $form_input_autofocus_data_fecha__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_fecha__mainForm; ?>"><?php echo $form_validation_span_msg_data_fecha__mainForm; ?></span>
    </label>
        
        

    <fieldset class="<?php echo $form_validation_input_class_data_newsletter__mainForm; ?>">
        <legend class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo 'Subscribe Newsletter'; } else { echo '&iquest;Desea recibir el bolet&iacute;n de noticias?'; } ?></legend>

        <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_newsletterSi__mainForm" class="label_radio">
            <input type="radio" name="data_newsletter__mainForm" id="data_newsletterSi__mainForm" form="<?php echo $form_id; ?>" value="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo 'Yes'; } else { echo 'Si'; } ?>" class="input_radio data_newsletter__mainForm" <?php echo $form_input_autofocus_data_newsletter__mainForm; ?>>
            <span><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Yes
        <?php else: ?>
            Sí
        <?php endif; ?></span>
        </label>

        <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_newsletterNo__mainForm" class="label_radio">
            <input type="radio" name="data_newsletter__mainForm" id="data_newsletterNo__mainForm" form="<?php echo $form_id; ?>" value="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo 'No'; } else { echo 'No'; } ?>" class="input_radio data_newsletter__mainForm">
            <span><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            No
        <?php else: ?>
            No
        <?php endif; ?></span>
        </label>

        <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_newsletterNoSe__mainForm" class="label_radio">
            <input type="radio" name="data_newsletter__mainForm" id="data_newsletterNoSe__mainForm" form="<?php echo $form_id; ?>" value="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo "I don't know"; } else { echo "No S&eacute;"; } ?>" class="input_radio data_newsletter__mainForm">
            <span><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            I don't know
        <?php else: ?>
            No S&eacute;
        <?php endif; ?></span>
        </label>
    </fieldset>
        
        

    <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_aceptoTOU__mainForm" class="label_checkbox">
        <input type="checkbox" name="data_aceptoTOU__mainForm" id="data_aceptoTOU__mainForm" class="input_checkbox data_aceptoTOU__mainForm <?php echo $form_validation_input_class_data_aceptoTOU__mainForm; ?>" form="<?php echo $form_id; ?>" value="Acepto los términos y condiciones del sitio web <?php echo $site_name_brand; ?>" <?php echo $form_input_autofocus_data_aceptoTOU__mainForm; ?>>
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Acepto los términos y condiciones
        <?php else: ?>
            Acepto los términos y condiciones
        <?php endif; ?></span>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_aceptoTOU__mainForm; ?>"><?php echo $form_validation_span_msg_data_aceptoTOU__mainForm; ?></span> 
    </label>
        
        

    <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_browser__mainForm">
        <?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Choose a browser from this list
        <?php else: ?>
            Elija un explorador de la lista
        <?php endif; ?>:
        <input lang="<?php echo $site_lang_HTML_attr; ?>" type="text" name="data_browser__mainForm" id="data_browser__mainForm" class="data_browser__mainForm" form="<?php echo $form_id; ?>" enterkeyhint="next" list="browser_dataList">
        <datalist id="browser_dataList">
            <option value="Chrome">
            <option value="Firefox">
            <option value="Internet Explorer">
            <option value="Opera">
            <option value="Safari">
            <option value="Microsoft Edge">
        </datalist>
    </label>
        
        

    <label for="data_asunto__mainForm" class="<?php echo $form_validation_input_class_data_asunto__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Subject
        <?php else: ?>
            Asunto
        <?php endif; ?></span>
        <input type="text" name="data_asunto__mainForm" id="data_asunto__mainForm" class="data_asunto__mainForm <?php echo $form_validation_input_class_data_asunto__mainForm; ?>" value="<?php echo $_POST['data_asunto__mainForm']; ?>" form="<?php echo $form_id; ?>" enterkeyhint="next" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo ''; } else { echo ''; } ?>" <?php echo $form_input_autofocus_data_asunto__mainForm; ?>>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_asunto__mainForm; ?>"><?php echo $form_validation_span_msg_data_asunto__mainForm; ?></span>
    </label> 
        
        

    <?php /* Mensaje con validaci&oacute;n */ ?>
    <label for="data_mensaje__mainForm" class="form_required <?php echo $form_validation_input_class_data_mensaje__mainForm; ?>">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Details
        <?php else: ?>
            Detalle del servicio que desea contratar
        <?php endif; ?></span>
        <textarea name="data_mensaje__mainForm" id="data_mensaje__mainForm" class="data_mensaje__mainForm <?php echo $form_validation_input_class_data_mensaje__mainForm; ?>" form="<?php echo $form_id; ?>" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo 'Write your message here'; } else { echo 'Escriba aqu&iacute; su mensaje'; } ?>" <?php echo $form_input_autofocus_data_mensaje__mainForm; ?> required><?php echo $_POST['data_mensaje__mainForm']; ?></textarea>
        <span class="form_validation_span <?php echo $form_validation_span_class_data_mensaje__mainForm; ?>"><?php echo $form_validation_span_msg_data_mensaje__mainForm; ?></span>
    </label>

    <label lang="<?php echo $site_lang_HTML_attr; ?>" for="data_mensaje__mainForm">
        <span class="form_label_name"><?php if(isset($gettext_lang) && $gettext_lang == 'en_GB'): ?>
            Message
        <?php else: ?>
            Mensaje
        <?php endif; ?></span>
        <textarea name="data_mensaje__mainForm" id="data_mensaje__mainForm" class="data_mensaje__mainForm" form="<?php echo $form_id; ?>" placeholder="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo 'Write your message here'; } else { echo 'Escriba aqu&iacute; su mensaje'; } ?>"><?php echo $_POST['data_mensaje__mainForm']; ?></textarea>
    </label>

<?php /* // REF [50] Google reCaptcha
 * Hidden field for captcha token storage    
*/ ?>
    <input lang="<?php echo $site_lang_HTML_attr; ?>" type="hidden" id="data_captchaResponseToken__mainForm" name="data_captchaResponseToken__mainForm">

    <input lang="<?php echo $site_lang_HTML_attr; ?>" type="submit" value="Enviar" form="<?php echo $form_id; ?>" enterkeyhint="done" name="button_form_submit__mainForm" class="button_form_submit button_form_submit__mainForm">  

    <input type="submit" value="<?php if(isset($gettext_lang) && $gettext_lang == 'en_GB') { echo 'Send'; } else { echo 'Enviar'; } ?>" form="<?php echo $form_id; ?>" enterkeyhint="done" name="button_form_submit__mainForm" class="button_form_submit button_form_submit__mainForm"> 
</form>

<script>
<?php /* // REF [50] Google reCaptcha
 * Submit button hijack and call for 
*/ ?>
    mainForm.addEventListener('submit', event => {
        event.preventDefault();
        captchaGetToken(mainForm);
    });

    const countrySelectRepresentaciones = document.getElementById('data_pais__mainForm');
    const provinciaSelectWrapRepresentaciones = document.getElementById('data_provinciaSelectWrap__mainForm');
    const provinciaTextWrapRepresentaciones = document.getElementById('data_provinciaTextWrap__mainForm');
    const provinciaSelectRepresentaciones = document.getElementById('data_provincia__mainForm');
    const provinciaTextRepresentaciones = document.getElementById('data_provincia_text__mainForm');
    const argentinaCountryCode = 'AR';

    const toggleProvinciaInputRepresentaciones = () => {
        const mustUseSelect = !countrySelectRepresentaciones.value || countrySelectRepresentaciones.value === argentinaCountryCode;

        provinciaSelectWrapRepresentaciones.style.display = mustUseSelect ? '' : 'none';
        provinciaTextWrapRepresentaciones.style.display = mustUseSelect ? 'none' : '';
        provinciaSelectRepresentaciones.disabled = !mustUseSelect;
        provinciaTextRepresentaciones.disabled = mustUseSelect;
    };

    countrySelectRepresentaciones.addEventListener('change', toggleProvinciaInputRepresentaciones);
    toggleProvinciaInputRepresentaciones();
</script>