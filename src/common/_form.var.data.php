<?php
/* // Create variables for form data ---------------------------------------- */
$data_apellido__mainForm = $_POST['data_apellido__mainForm'];
$data_nombreAp__mainForm = $_POST['data_nombreAp__mainForm'];
$data_nombreCo__mainForm = $_POST['data_nombreCo__mainForm'];
$data_username__mainForm = $_POST['data_username__mainForm'];
$data_cantidad__mainForm = $_POST['data_cantidad__mainForm'];

$data_genero__mainForm = $_POST['data_genero__mainForm'];
$data_dni__mainForm = $_POST['data_dni__mainForm'];
$data_fecha__mainForm = $_POST['data_fecha__mainForm'];

$data_direccion__mainForm = $_POST['data_direccion__mainForm'];
$data_ciudad__mainForm = $_POST['data_ciudad__mainForm'];
$data_domicilio__mainForm = $_POST['data_domicilio__mainForm'];
$data_localidad__mainForm = $_POST['data_localidad__mainForm'];
$data_codigoPostal__mainForm = $_POST['data_codigoPostal__mainForm'];
$data_provincia__mainForm = $_POST['data_provincia__mainForm'];


$data_pais__mainForm = $_POST['data_pais__mainForm'];
$data_pais_display__mainForm = $data_pais__mainForm;
$data_country_calling_code_map__mainForm = [
    'AW' => '297',
    'AF' => '93',
    'AO' => '244',
    'AI' => '1264',
    'AX' => '358',
    'AL' => '355',
    'AD' => '376',
    'AE' => '971',
    'AR' => '549',
    'AM' => '374',
    'AS' => '1684',
    'AG' => '1268',
    'AU' => '61',
    'AT' => '43',
    'AZ' => '994',
    'BI' => '257',
    'BE' => '32',
    'BJ' => '229',
    'BF' => '226',
    'BD' => '880',
    'BG' => '359',
    'BH' => '973',
    'BS' => '1242',
    'BA' => '387',
    'BL' => '590',
    'BY' => '375',
    'BZ' => '501',
    'BM' => '1441',
    'BO' => '591',
    'BR' => '55',
    'BB' => '1246',
    'BN' => '673',
    'BT' => '975',
    'BW' => '267',
    'CF' => '236',
    'CA' => '1',
    'CC' => '61',
    'CH' => '41',
    'CL' => '56',
    'CN' => '86',
    'CI' => '225',
    'CM' => '237',
    'CD' => '243',
    'CG' => '242',
    'CK' => '682',
    'CO' => '57',
    'KM' => '269',
    'CV' => '238',
    'CR' => '506',
    'CU' => '53',
    'CW' => '5999',
    'CX' => '61',
    'KY' => '1345',
    'CY' => '357',
    'CZ' => '420',
    'DE' => '49',
    'DJ' => '253',
    'DM' => '1767',
    'DK' => '45',
    'DO' => '1809',
    'DZ' => '213',
    'EC' => '593',
    'EG' => '20',
    'ER' => '291',
    'EH' => '212',
    'ES' => '34',
    'EE' => '372',
    'ET' => '251',
    'FI' => '358',
    'FJ' => '679',
    'FK' => '500',
    'FR' => '33',
    'FO' => '298',
    'FM' => '691',
    'GA' => '241',
    'GB' => '44',
    'GE' => '995',
    'GG' => '44',
    'GH' => '233',
    'GI' => '350',
    'GN' => '224',
    'GP' => '590',
    'GM' => '220',
    'GW' => '245',
    'GQ' => '240',
    'GR' => '30',
    'GD' => '1473',
    'GL' => '299',
    'GT' => '502',
    'GF' => '594',
    'GU' => '1671',
    'GY' => '592',
    'HK' => '852',
    'HN' => '504',
    'HR' => '385',
    'HT' => '509',
    'HU' => '36',
    'ID' => '62',
    'IM' => '44',
    'IN' => '91',
    'IO' => '246',
    'IE' => '353',
    'IR' => '98',
    'IQ' => '964',
    'IS' => '354',
    'IL' => '972',
    'IT' => '39',
    'JM' => '1876',
    'JE' => '44',
    'JO' => '962',
    'JP' => '81',
    'KZ' => '76',
    'KE' => '254',
    'KG' => '996',
    'KH' => '855',
    'KI' => '686',
    'KN' => '1869',
    'KR' => '82',
    'XK' => '383',
    'KW' => '965',
    'LA' => '856',
    'LB' => '961',
    'LR' => '231',
    'LY' => '218',
    'LC' => '1758',
    'LI' => '423',
    'LK' => '94',
    'LS' => '266',
    'LT' => '370',
    'LU' => '352',
    'LV' => '371',
    'MO' => '853',
    'MF' => '590',
    'MA' => '212',
    'MC' => '377',
    'MD' => '373',
    'MG' => '261',
    'MV' => '960',
    'MX' => '52',
    'MH' => '692',
    'MK' => '389',
    'ML' => '223',
    'MT' => '356',
    'MM' => '95',
    'ME' => '382',
    'MN' => '976',
    'MP' => '1670',
    'MZ' => '258',
    'MR' => '222',
    'MS' => '1664',
    'MQ' => '596',
    'MU' => '230',
    'MW' => '265',
    'MY' => '60',
    'YT' => '262',
    'NA' => '264',
    'NC' => '687',
    'NE' => '227',
    'NF' => '672',
    'NG' => '234',
    'NI' => '505',
    'NU' => '683',
    'NL' => '31',
    'NO' => '47',
    'NP' => '977',
    'NR' => '674',
    'NZ' => '64',
    'OM' => '968',
    'PK' => '92',
    'PA' => '507',
    'PN' => '64',
    'PE' => '51',
    'PH' => '63',
    'PW' => '680',
    'PG' => '675',
    'PL' => '48',
    'PR' => '1787',
    'KP' => '850',
    'PT' => '351',
    'PY' => '595',
    'PS' => '970',
    'PF' => '689',
    'QA' => '974',
    'RE' => '262',
    'RO' => '40',
    'RU' => '7',
    'RW' => '250',
    'SA' => '966',
    'SD' => '249',
    'SN' => '221',
    'SG' => '65',
    'GS' => '500',
    'SJ' => '4779',
    'SB' => '677',
    'SL' => '232',
    'SV' => '503',
    'SM' => '378',
    'SO' => '252',
    'PM' => '508',
    'RS' => '381',
    'SS' => '211',
    'ST' => '239',
    'SR' => '597',
    'SK' => '421',
    'SI' => '386',
    'SE' => '46',
    'SZ' => '268',
    'SX' => '1721',
    'SC' => '248',
    'SY' => '963',
    'TC' => '1649',
    'TD' => '235',
    'TG' => '228',
    'TH' => '66',
    'TJ' => '992',
    'TK' => '690',
    'TM' => '993',
    'TL' => '670',
    'TO' => '676',
    'TT' => '1868',
    'TN' => '216',
    'TR' => '90',
    'TV' => '688',
    'TW' => '886',
    'TZ' => '255',
    'UG' => '256',
    'UA' => '380',
    'UY' => '598',
    'US' => '1',
    'UZ' => '998',
    'VA' => '3906698',
    'VC' => '1784',
    'VE' => '58',
    'VG' => '1284',
    'VI' => '1340',
    'VN' => '84',
    'VU' => '678',
    'WF' => '681',
    'WS' => '685',
    'YE' => '967',
    'ZA' => '27',
    'ZM' => '260',
    'ZW' => '263'
];

$data_country_calling_code__mainForm = $data_country_calling_code_map__mainForm[$data_pais__mainForm] ?? '549';

if (preg_match('/^[A-Z]{2}$/', $data_pais__mainForm)) {
    $data_pais_bundle__mainForm = \ResourceBundle::create('es', 'ICUDATA-region');

    if ($data_pais_bundle__mainForm) {
        $data_pais_countries__mainForm = $data_pais_bundle__mainForm->get('Countries');

        if ($data_pais_countries__mainForm) {
            $data_pais_name__mainForm = $data_pais_countries__mainForm->get($data_pais__mainForm);

            if (!empty($data_pais_name__mainForm)) {
                $data_pais_display__mainForm = $data_pais_name__mainForm;
            }
        }
    }
}
    
    
    
$data_email__mainForm = $_POST['data_email__mainForm'];
$data_telefono__mainForm = $_POST['data_telefono__mainForm'];
$data_celular__mainForm = $_POST['data_celular__mainForm'];
$data_whatsAppAreaCode__mainForm = $_POST['data_whatsAppAreaCode__mainForm'];
$data_whatsAppNumber__mainForm = $_POST['data_whatsAppNumber__mainForm'];

$data_webSite__mainForm = $_POST['data_webSite__mainForm'];
$data_facebook__mainForm = $_POST['data_facebook__mainForm'];
$data_instagram__mainForm = $_POST['data_instagram__mainForm'];  
$data_comoQueres__mainForm = $_POST['data_comoQueres__mainForm'];        

$data_empresa__mainForm = $_POST['data_empresa__mainForm'];
$data_razonSocial__mainForm = $_POST['data_razonSocial__mainForm'];
$data_cargo__mainForm = $_POST['data_cargo__mainForm'];
$data_rubro__mainForm = $_POST['data_rubro__mainForm'];

$data_asunto__mainForm = $_POST['data_asunto__mainForm'];
$data_area__mainForm = $_POST['data_area__mainForm'];

$data_aceptoTOU__mainForm = $_POST['data_aceptoTOU__mainForm'];
    
$data_mensaje__mainForm = $_POST['data_mensaje__mainForm'];
        
        
    
/* // INICIA VALIDACIÓN en .form_validation_span ---------------------------- */
} elseif(!isset($data_apellido__mainForm) || trim($data_apellido__mainForm) == ''){
    $form_validation_span_msg_data_apellido__mainForm = $form_validation_msg_data_apellido__mainForm;
    $form_validation_span_class_data_apellido__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_apellido__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_apellido__mainForm = "autofocus";

} elseif(!isset($data_nombreAp__mainForm) || trim($data_nombreAp__mainForm) == ''){
    $form_validation_span_msg_data_nombreAp__mainForm = $form_validation_msg_data_nombreAp__mainForm;
    $form_validation_span_class_data_nombreAp__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_nombreAp__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_nombreAp__mainForm = "autofocus";

} elseif(!isset($data_nombreCo__mainForm) || trim($data_nombreCo__mainForm) == ''){
    $form_validation_span_msg_data_nombreCo__mainForm = $form_validation_msg_data_nombreCo__mainForm;
    $form_validation_span_class_data_nombreCo__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_nombreCo__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_nombreCo__mainForm = "autofocus";

} elseif(!isset($data_username__mainForm) || trim($data_username__mainForm) == ''){
    $form_validation_span_msg_data_username__mainForm = $form_validation_msg_data_username__mainForm;
    $form_validation_span_class_data_username__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_username__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_username__mainForm = "autofocus";

} elseif(!isset($data_dni__mainForm) || trim($data_dni__mainForm) == ''){
    $form_validation_span_msg_data_dni__mainForm = $form_validation_msg_data_dni__mainForm;
    $form_validation_span_class_data_dni__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_dni__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_dni__mainForm = "autofocus";

} elseif(!isset($data_direccion__mainForm) || trim($data_direccion__mainForm) == ''){
    $form_validation_span_msg_data_direccion__mainForm = $form_validation_msg_data_direccion__mainForm;
    $form_validation_span_class_data_direccion__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_direccion__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_direccion__mainForm = "autofocus";

} elseif(!isset($data_ciudad__mainForm) || trim($data_ciudad__mainForm) == ''){
    $form_validation_span_msg_data_ciudad__mainForm = $form_validation_msg_data_ciudad__mainForm;
    $form_validation_span_class_data_ciudad__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_ciudad__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_ciudad__mainForm = "autofocus";

} elseif(!isset($data_domicilio__mainForm) || trim($data_domicilio__mainForm) == ''){
    $form_validation_span_msg_data_domicilio__mainForm = $form_validation_msg_data_domicilio__mainForm;
    $form_validation_span_class_data_domicilio__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_domicilio__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_domicilio__mainForm = "autofocus";

} elseif(!isset($data_localidad__mainForm) || trim($data_localidad__mainForm) == ''){
    $form_validation_span_msg_data_localidad__mainForm = $form_validation_msg_data_localidad__mainForm;
    $form_validation_span_class_data_localidad__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_localidad__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_localidad__mainForm = "autofocus";

} elseif(!isset($data_codigoPostal__mainForm) || trim($data_codigoPostal__mainForm) == ''){
    $form_validation_span_msg_data_codigoPostal__mainForm = $form_validation_msg_data_codigoPostal__mainForm;
    $form_validation_span_class_data_codigoPostal__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_codigoPostal__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_codigoPostal__mainForm = "autofocus";

} elseif(!isset($data_provincia__mainForm) || trim($data_provincia__mainForm) == ''){
    $form_validation_span_msg_data_provincia__mainForm = $form_validation_msg_data_provincia__mainForm;
    $form_validation_span_class_data_provincia__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_provincia__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_provincia__mainForm = "autofocus";

} elseif(!isset($data_pais__mainForm) || trim($data_pais__mainForm) == ''){
    $form_validation_span_msg_data_pais__mainForm = $form_validation_msg_data_pais__mainForm;
    $form_validation_span_class_data_pais__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_pais__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_pais__mainForm = "autofocus";

} elseif(!isset($data_celular__mainForm) || trim($data_celular__mainForm) == ''){
    $form_validation_span_msg_data_celular__mainForm = $form_validation_msg_data_celular__mainForm;
    $form_validation_span_class_data_celular__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_celular__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_celular__mainForm = "autofocus";

} elseif(!isset($data_whatsAppAreaCode__mainForm) || trim($data_whatsAppAreaCode__mainForm) == ''){
    $form_validation_span_msg_data_whatsAppAreaCode__mainForm = $form_validation_msg_data_whatsAppAreaCode__mainForm;
    $form_validation_span_class_data_whatsAppAreaCode__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_whatsApp__mainForm = " form_validation_input_invalid";
    $form_validation_input_class_data_whatsAppAreaCode__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_whatsAppAreaCode__mainForm = "autofocus";

} elseif(!isset($data_whatsAppNumber__mainForm) || trim($data_whatsAppNumber__mainForm) == ''){
    $form_validation_span_msg_data_whatsAppNumber__mainForm = $form_validation_msg_data_whatsAppNumber__mainForm;
    $form_validation_span_class_data_whatsAppNumber__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_whatsApp__mainForm = " form_validation_input_invalid";
    $form_validation_input_class_data_whatsAppNumber__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_whatsAppNumber__mainForm = "autofocus";

} elseif(!isset($data_telefono__mainForm) || trim($data_telefono__mainForm) == ''){
    $form_validation_span_msg_data_telefono__mainForm = $form_validation_msg_data_telefono__mainForm;
    $form_validation_span_class_data_telefono__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_telefono__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_telefono__mainForm = "autofocus";

} elseif(!isset($data_email__mainForm) || trim($data_email__mainForm) == ''){
    $form_validation_span_msg_data_email__mainForm = $form_validation_msg_data_email__mainForm;
    $form_validation_span_class_data_email__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_email__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_email__mainForm = "autofocus";

} elseif(!isset($data_webSite__mainForm) || trim($data_webSite__mainForm) == ''){
    $form_validation_span_msg_data_webSite__mainForm = $form_validation_msg_data_webSite__mainForm;
    $form_validation_span_class_data_webSite__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_webSite__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_webSite__mainForm = "autofocus";

} elseif(!isset($data_facebook__mainForm) || trim($data_facebook__mainForm) == ''){
    $form_validation_span_msg_data_facebook__mainForm = $form_validation_msg_data_facebook__mainForm;
    $form_validation_span_class_data_facebook__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_facebook__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_facebook__mainForm = "autofocus";

} elseif(!isset($data_empresa__mainForm) || trim($data_empresa__mainForm) == ''){
    $form_validation_span_msg_data_empresa__mainForm = $form_validation_msg_data_empresa__mainForm;
    $form_validation_span_class_data_empresa__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_empresa__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_empresa__mainForm = "autofocus";

} elseif(!isset($data_razonSocial__mainForm) || trim($data_razonSocial__mainForm) == ''){
    $form_validation_span_msg_data_razonSocial__mainForm = $form_validation_msg_data_razonSocial__mainForm;
    $form_validation_span_class_data_razonSocial__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_razonSocial__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_razonSocial__mainForm = "autofocus";

} elseif(!isset($data_cargo__mainForm) || trim($data_cargo__mainForm) == ''){
    $form_validation_span_msg_data_cargo__mainForm = $form_validation_msg_data_cargo__mainForm;
    $form_validation_span_class_data_cargo__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_cargo__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_cargo__mainForm = "autofocus";

} elseif(!isset($data_fecha__mainForm) || trim($data_fecha__mainForm) == ''){
    $form_validation_span_msg_data_fecha__mainForm = $form_validation_msg_data_fecha__mainForm;
    $form_validation_span_class_data_fecha__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_fecha__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_fecha__mainForm = "autofocus";

} elseif(!isset($data_cantidad__mainForm) || trim($data_cantidad__mainForm) == ''){
    $form_validation_span_msg_data_cantidad__mainForm = $form_validation_msg_data_cantidad__mainForm;
    $form_validation_span_class_data_cantidad__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_cantidad__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_cantidad__mainForm = "autofocus";

} elseif(!isset($data_rubro__mainForm) || trim($data_rubro__mainForm) == ''){
    $form_validation_span_msg_data_rubro__mainForm = $form_validation_msg_data_rubro__mainForm;
    $form_validation_span_class_data_rubro__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_rubro__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_rubro__mainForm = "autofocus";

} elseif(!isset($data_comoQueres__mainForm) || trim($data_comoQueres__mainForm) == ''){
    $form_validation_span_msg_data_comoQueres__mainForm = $form_validation_msg_data_comoQueres__mainForm;
    $form_validation_span_class_data_comoQueres__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_comoQueres__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_comoQueres__mainForm = "autofocus";

} elseif(!isset($data_asunto__mainForm) || trim($data_asunto__mainForm) == ''){
    $form_validation_span_msg_data_asunto__mainForm = $form_validation_msg_data_asunto__mainForm;
    $form_validation_span_class_data_asunto__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_asunto__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_asunto__mainForm = "autofocus";

} elseif(!isset($data_area__mainForm) || trim($data_area__mainForm) == ''){
    $form_validation_span_msg_data_area__mainForm = $form_validation_msg_data_area__mainForm;
    $form_validation_span_class_data_area__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_area__mainForm = " form_validation_input_invalid";
    // $form_input_autofocus_data_area__mainForm = "autofocus";

} elseif(!isset($data_mensaje__mainForm) || trim($data_mensaje__mainForm) == ''){
    $form_validation_span_msg_data_mensaje__mainForm = $form_validation_msg_data_mensaje__mainForm;
    $form_validation_span_class_data_mensaje__mainForm = " form_validation_span_active";
    $form_validation_input_class_data_mensaje__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_mensaje__mainForm = "autofocus";

} elseif(!isset($data_aceptoTOU__mainForm)){
    $form_validation_span_msg_data_aceptoTOU__mainForm          = $form_validation_msg_data_aceptoTOU__mainForm;
    $form_validation_span_class_data_aceptoTOU__mainForm          = " form_validation_span_active";
    $form_validation_input_class_data_aceptoTOU__mainForm      = " form_validation_input_invalid";
    $form_input_autofocus_data_aceptoTOU__mainForm          = "autofocus";
    
    
    
/* // INICIA VALIDACIÓN en .form_validation_div ----------------------------- */  
} elseif(!isset($data_apellido__mainForm) || trim($data_apellido__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_apellido__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_apellido__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_apellido__mainForm = "autofocus";

} elseif(!isset($data_nombreAp__mainForm) || trim($data_nombreAp__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_nombreAp__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_nombreAp__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_nombreAp__mainForm = "autofocus";

} elseif(!isset($data_nombreCo__mainForm) || trim($data_nombreCo__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_nombreCo__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_nombreCo__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_nombreCo__mainForm = "autofocus";

} elseif(!isset($data_username__mainForm) || trim($data_username__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_username__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_username__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_username__mainForm = "autofocus";

} elseif(!isset($data_dni__mainForm) || trim($data_dni__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_dni__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_dni__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_dni__mainForm = "autofocus";

} elseif(!isset($data_direccion__mainForm) || trim($data_direccion__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_direccion__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_direccion__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_direccion__mainForm = "autofocus";

} elseif(!isset($data_ciudad__mainForm) || trim($data_ciudad__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_ciudad__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_ciudad__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_ciudad__mainForm = "autofocus";

} elseif(!isset($data_domicilio__mainForm) || trim($data_domicilio__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_domicilio__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_domicilio__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_domicilio__mainForm = "autofocus";

} elseif(!isset($data_localidad__mainForm) || trim($data_localidad__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_localidad__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_localidad__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_localidad__mainForm = "autofocus";

} elseif(!isset($data_codigoPostal__mainForm) || trim($data_codigoPostal__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_codigoPostal__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_codigoPostal__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_codigoPostal__mainForm = "autofocus";

} elseif(!isset($data_provincia__mainForm) || trim($data_provincia__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_provincia__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_provincia__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_provincia__mainForm = "autofocus";

} elseif(!isset($data_pais__mainForm) || trim($data_pais__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_pais__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_pais__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_pais__mainForm = "autofocus";

} elseif(!isset($data_telefono__mainForm) || trim($data_telefono__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_telefono__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_telefono__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_telefono__mainForm = "autofocus";

} elseif(!isset($data_celular__mainForm) || trim($data_celular__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_celular__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_celular__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_celular__mainForm = "autofocus";

} elseif(!isset($data_whatsAppAreaCode__mainForm) || trim($data_whatsAppAreaCode__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_whatsAppAreaCode__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_whatsApp__mainForm = " form_validation_input_invalid";
    $form_validation_input_class_data_whatsAppAreaCode__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_whatsAppAreaCode__mainForm = "autofocus";

} elseif(!isset($data_whatsAppNumber__mainForm) || trim($data_whatsAppNumber__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_whatsAppNumber__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_whatsApp__mainForm = " form_validation_input_invalid";
    $form_validation_input_class_data_whatsAppNumber__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_whatsAppNumber__mainForm = "autofocus";

} elseif(!isset($data_email__mainForm) || trim($data_email__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_email__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_email__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_email__mainForm = "autofocus";

} elseif(!isset($data_webSite__mainForm) || trim($data_webSite__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_webSite__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_webSite__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_webSite__mainForm = "autofocus";

} elseif(!isset($data_facebook__mainForm) || trim($data_facebook__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_facebook__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_facebook__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_facebook__mainForm = "autofocus";

} elseif(!isset($data_comoQueres__mainForm) || trim($data_comoQueres__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_comoQueres__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_comoQueres__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_comoQueres__mainForm = "autofocus";

} elseif(!isset($data_empresa__mainForm) || trim($data_empresa__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_empresa__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_empresa__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_empresa__mainForm = "autofocus";

} elseif(!isset($data_razonSocial__mainForm) || trim($data_razonSocial__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_razonSocial__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_razonSocial__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_razonSocial__mainForm = "autofocus";

} elseif(!isset($data_cargo__mainForm) || trim($data_cargo__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_cargo__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_cargo__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_cargo__mainForm = "autofocus";

} elseif(!isset($data_asunto__mainForm) || trim($data_asunto__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_asunto__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_cargo__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_cargo__mainForm = "autofocus";

} elseif(!isset($data_fecha__mainForm) || trim($data_fecha__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_fecha__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_fecha__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_fecha__mainForm = "autofocus";

} elseif(!isset($data_rubro__mainForm) || trim($data_rubro__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_rubro__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_rubro__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_rubro__mainForm = "autofocus";

} elseif(!isset($data_newsletter__mainForm) || trim($data_newsletter__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_newsletter__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_newsletter__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_newsletter__mainForm = "autofocus";

} elseif(!isset($data_mensaje__mainForm) || trim($data_mensaje__mainForm) == ''){
    $form_validation_div_msg__mainForm = $errordata_mensaje__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_mensaje__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_mensaje__mainForm = "autofocus";

} elseif(!isset($data_area__mainForm) || trim($data_area__mainForm) == ''){
    $form_validation_div_msg__mainForm = $form_validation_msg_data_area__mainForm;
    $form_validation_div_class__mainForm = " form_validation_div_invalid";
    $form_validation_input_class_data_area__mainForm = " form_validation_input_invalid";
    $form_input_autofocus_data_area__mainForm = "autofocus";
    
    
    
/* // Campos $formMail_texto ------------------------------------------------ */
$formMail_texto .= '<strong>Nombre:</strong> ' . $data_nombre__mainForm . '<br />';
$formMail_texto .= '<strong>Apellido:</strong> ' . $data_apellido__mainForm . '<br />';
$formMail_texto .= '<strong>Nombre y apellido:</strong> ' . $data_nombreAp__mainForm . '<br />';
$formMail_texto .= '<strong>Nombre completo:</strong> ' . $data_nombreCo__mainForm . '<br />';
$formMail_texto .= '<strong>Nombre de usuario:</strong> ' . $data_username__mainForm . '<br />';
$formMail_texto .= '<strong>Direcci&oacute;n:</strong> ' . $data_direccion__mainForm . '<br />';
$formMail_texto .= '<strong>Ciudad:</strong> ' . $data_ciudad__mainForm . '<br />';
$formMail_texto .= '<strong>Domicilio:</strong> ' . $data_domicilio__mainForm . '<br />';
$formMail_texto .= '<strong>Sexo:</strong> ' . $data_genero__mainForm . '<br />';
$formMail_texto .= '<strong>Cantidad:</strong> ' . $data_cantidad__mainForm . '<br />';
$formMail_texto .= '<strong>DNI:</strong> ' . $data_dni__mainForm . '<br />';
$formMail_texto .= '<strong>C&oacute;digo postal:</strong> ' . $data_codigoPostal__mainForm . '<br />';
$formMail_texto .= '<strong>Localidad:</strong> ' . $data_localidad__mainForm . '<br />';
$formMail_texto .= '<strong>Provincia:</strong> ' . $data_provincia__mainForm . '<br />';
$formMail_texto .= '<strong>Pa&iacute;s:</strong> ' . $data_pais__mainForm . '<br />';
$formMail_texto .= '<strong>Fecha:</strong> ' . $data_fecha__mainForm . '<br />';
$formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> ' . $data_email__mainForm . '<br />';
$formMail_texto .= '<strong>Correo electr&oacute;nico:</strong> <a href="mailto:' . $data_email__mainForm . '">' . $data_email__mainForm . '</a><br />';
$formMail_texto .= '<strong>Sitio web:</strong> ' . $data_webSite__mainForm . '<br />';
$formMail_texto .= '<strong>Perfil de Facebook:</strong> ' . $data_facebook__mainForm . '<br />';
$formMail_texto .= '<strong>Perfil de Instagram:</strong> <a href="https://www.instagram.com/' . $data_instagram__mainForm . '">' . $data_instagram__mainForm . '</a><br />';
$formMail_texto .= '<strong>Tel&eacute;fono:</strong> ' . $data_telefono__mainForm . '<br />';
$formMail_texto .= '<strong>Celular:</strong> ' . $data_celular__mainForm . '<br />';
$formMail_texto .= '<strong>WhatsApp:</strong> <a href="https://wa.me/+549' . $data_whatsAppAreaCode__mainForm . $data_whatsAppNumber__mainForm . '">+54 9 '. $data_whatsAppAreaCode__mainForm . ' ' . $data_whatsAppNumber__mainForm ."</a><br />";
$formMail_texto .= '<strong>Empresa:</strong> ' . $data_empresa__mainForm . '<br />';
$formMail_texto .= '<strong>Raz&oacute;n Social:</strong> ' . $data_razonSocial__mainForm . '<br />';
$formMail_texto .= '<strong>Cargo:</strong> ' . $data_cargo__mainForm . '<br />';
$formMail_texto .= '<strong>Asunto:</strong> ' . $data_asunto__mainForm . '<br />';
$formMail_texto .= '<strong>&iquest;C&oacute;mo quer&eacute;s que te contactemos?:</strong> ' . $data_comoQueres__mainForm . '<br />';
$formMail_texto .= '<strong>Rubro:</strong> ' . $data_rubro__mainForm . '<br />';
$formMail_texto .= '<br /><strong>Mensaje:</strong><br />' . $data_mensaje__mainForm;
    
    
    
/* // Campos $mail->Body ---------------------------------------------------- */
$mail->Body .= '<strong>Nombre:</strong> ' . $data_nombre__mainForm . '<br>';
$mail->Body .= '<strong>Apellido:</strong> ' . $data_apellido__mainForm . '<br />';
$mail->Body .= '<strong>Nombre y apellido:</strong> ' . $data_nombreAp__mainForm . '<br />';
$mail->Body .= '<strong>Nombre completo:</strong> ' . $data_nombreCo__mainForm . '<br />';
$mail->Body .= '<strong>Nombre de usuario:</strong> ' . $data_username__mainForm . '<br />';

$mail->Body .= '<strong>Pa&iacute;s:</strong> ' . $data_pais__mainForm . '<br />';
$mail->Body .= '<strong>Pa&iacute;s:</strong> ' . $data_pais_display__mainForm . '<br />';

$mail->Body .= '<strong>Provincia:</strong> ' . $data_provincia__mainForm . '<br />';
$mail->Body .= '<strong>Ciudad:</strong> ' . $data_ciudad__mainForm . '<br />';
$mail->Body .= '<strong>C&oacute;digo postal:</strong> ' . $data_codigoPostal__mainForm . '<br />';
$mail->Body .= '<strong>Localidad:</strong> ' . $data_localidad__mainForm . '<br />';
$mail->Body .= '<strong>Direcci&oacute;n:</strong> ' . $data_direccion__mainForm . '<br />';
$mail->Body .= '<strong>Domicilio:</strong> ' . $data_domicilio__mainForm . '<br />';


$mail->Body .= '<strong>Tel&eacute;fono:</strong> ' . $data_telefono__mainForm . '<br />';
$mail->Body .= '<strong>Celular:</strong> ' . $data_celular . '<br />';
$mail->Body .= '<strong>WhatsApp:</strong> <a href="https://wa.me/+549' . $data_whatsAppAreaCode__mainForm . $data_whatsAppNumber__mainForm . '">+54 9 '. $data_whatsAppAreaCode__mainForm . ' ' . $data_whatsAppNumber__mainForm ."</a><br />";
$mail->Body .= '<strong>WhatsApp:</strong> <a href="https://wa.me/+' . $data_country_calling_code__mainForm . $data_whatsAppAreaCode__mainForm . $data_whatsAppNumber__mainForm . '">+' . $data_country_calling_code__mainForm . ' ' . $data_whatsAppAreaCode__mainForm . ' ' . $data_whatsAppNumber__mainForm ."</a><br />";



$mail->Body .= '<strong>Sexo:</strong> ' . $data_genero__mainForm . '<br />';
$mail->Body .= '<strong>Cantidad:</strong> ' . $data_cantidad__mainForm . '<br />';
$mail->Body .= '<strong>DNI:</strong> ' . $data_dni__mainForm . '<br />';

$mail->Body .= '<strong>Fecha:</strong> ' . $data_fecha__mainForm . '<br />';
$mail->Body .= '<strong>Correo electr&oacute;nico:</strong> ' . $data_email__mainForm . '<br />';
$mail->Body .= '<strong>Correo electr&oacute;nico:</strong> <a href="mailto:' . $data_email__mainForm . '">' . $data_email__mainForm . '</a><br />';
$mail->Body .= '<strong>Sitio web:</strong> <a href="' . $data_webSite__mainForm . '">' . $data_webSite__mainForm . '</a><br />';
$mail->Body .= '<strong>Perfil de Facebook:</strong> ' . $data_facebook__mainForm . '<br />';
$mail->Body .= '<strong>Perfil de Instagram:</strong> <a href="https://www.instagram.com/' . $data_instagram__mainForm . '">' . $data_instagram__mainForm . '</a><br />';
$mail->Body .= '<strong>Empresa:</strong> ' . $data_empresa__mainForm . '<br />';
$mail->Body .= '<strong>Raz&oacute;n Social:</strong> ' . $data_razonSocial__mainForm . '<br />';
$mail->Body .= '<strong>Cargo:</strong> ' . $data_cargo__mainForm . '<br />';
$mail->Body .= '<strong>Asunto:</strong> ' . $data_asunto__mainForm . '<br />';
$mail->Body .= '<strong>&iquest;C&oacute;mo quer&eacute;s que te contactemos?:</strong> ' . $data_comoQueres__mainForm . '<br />';
$mail->Body .= '<strong>Rubro:</strong> ' . $data_rubro__mainForm . '<br />';
$mail->Body .= '<br /><strong>Mensaje:</strong><br />' . $data_mensaje__mainForm;
    
    
/* // Si el envio fue exitoso reseteamos lo que el usuario escribio --------- */    
$_POST['data_apellido__mainForm'] = '';
$_POST['data_nombreAp__mainForm'] = '';     
$_POST['data_nombreCo__mainForm'] = '';               
$_POST['data_genero__mainForm'] = '';
$_POST['data_direccion__mainForm'] = '';
$_POST['data_ciudad__mainForm'] = '';
$_POST['data_domicilio__mainForm'] = '';
$_POST['data_localidad__mainForm'] = '';
$_POST['data_codigoPostal__mainForm'] = '';
$_POST['data_provincia__mainForm'] = '';
$_POST['data_pais__mainForm'] = '';
$_POST['data_fecha__mainForm'] = '';
$_POST['data_email__mainForm'] = '';
$_POST['data_webSite__mainForm'] = '';
$_POST['data_facebook__mainForm'] = '';
$_POST['data_telefono__mainForm'] = '';
$_POST['data_celular__mainForm'] = '';
$_POST['data_whatsAppAreaCode__mainForm'] = '';
$_POST['data_whatsAppNumber__mainForm'] = '';
$_POST['data_empresa__mainForm'] = '';
$_POST['data_razonSocial__mainForm'] = '';
$_POST['data_cargo__mainForm'] = '';
$_POST['data_rubro__mainForm'] = '';
$_POST['data_comoQueres__mainForm'] = '';
$_POST['data_asunto__mainForm'] = '';
$_POST['data_mensaje__mainForm'] = '';
$_POST['data_aceptoTOU__mainForm'] = '';
?>