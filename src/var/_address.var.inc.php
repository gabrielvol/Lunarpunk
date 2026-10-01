<?php
/* * NombreDeProyecto * ========================================================
   Addresses Variables [/src/var/address.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *
   // REF [13] Address / date_default_timezone_set
*/

/* // Address Principal // REF [13] ----------------------------------------- */
if(isset($gettext_lang)){
    if($gettext_lang == 'en_GB'){
        $site_address_ADDRESSA_a   = 'bbbbbbbbbbbbbbbbbbbbbbbbbb Autonomous City of Buenos Aires';
        $site_address_ADDRESSA_b   = 'bbbbbbbbbbbbbbbbbbbbbbbbbb Autonomous City of Buenos Aires';
        $site_address_ADDRESSA     = $site_address_ADDRESSA_a . ' ' . $site_address_ADDRESSA_b;  


    } elseif($gettext_lang == 'xx_XX'){
    //   $site_address_ADDRESSA_a               = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';     
    //   $site_address_ADDRESSA_b               = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
    //   $site_address_ADDRESSA                 = $site_address_ADDRESSA_a . ' ' . $site_address_ADDRESSA_b;
        
} } else {      
    $site_address_ADDRESSA_a               = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';     
    $site_address_ADDRESSA_b               = 'aaaaaaaaaaaaaaaaaaaaaaaaaa';
    $site_address_ADDRESSA                 = $site_address_ADDRESSA_a . ' ' . $site_address_ADDRESSA_b; 
} 

$site_address_ADDRESSA_map_url         = 'https_goo_gl_maps_aaaaaaaaaaaa';
$site_address_ADDRESSA_map_href        = 'href="' . $site_address_ADDRESSA_map_url . '"';
$site_address_ADDRESSA_map_iframe_src  = 'https_google_com_maps_embed_aaaaaaaaaaaaaaaaa';
$site_address_ADDRESSA_map_iframe      = '<iframe src="' . $site_address_ADDRESSA_map_iframe_src . '" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    
    
/* // Address NOMBRE -------------------------------------------------------- *
$site_address_NOMBRE_a       = 'bbbbbbbbbbbbbbbbbbbbbbbbbb';
$site_address_NOMBRE_b       = 'bbbbbbbbbbbbbbbbbbbbbbbbbb';
$site_address_NOMBRE         = $site_address_NOMBRE_a . ' ' . $site_address_NOMBRE_b;       
       
$site_address_NOMBRE_map_url   = 'https_goo_gl_maps_aaaaaaaaaaaa';
$site_address_NOMBRE_map_href  = 'href="' . $site_address_NOMBRE_map_url . '"';
$site_address_NOMBRE_map_iframe_src  = 'https_google_com_maps_embed_aaaaaaaaaaaaaaaaa';
$site_address_NOMBRE_map_iframe      = '<iframe src="' . $site_address_NOMBRE_map_iframe_src . '" allowfullscreen="" loading="lazy"></iframe>';
*/
?>