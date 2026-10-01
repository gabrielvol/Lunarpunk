<?php
/* * NombreDeProyecto * ========================================================
   Open Graph Variables [/src/var/meta.openGraph.var.inc.php]
   ========================================================================== */

/* // Descripcion ----------------------------------------------------------- *
   Variables para open graph
   Este archivo se carga antes del head en cada página, no se carga en:
   PHP Variables Main Loader `[/src/var/main.var.inc.php]`

   #meta #openGraph #seo
*/

/* // Open Graph meta ------------------------------------------------------- */

/* // -- Título _ Max 35 char ________
   ·_________________________________·
   123456789-123456789-123456789-12345

   Se declaran distintas variables por página

   La variable `$openGraph_title` se usa en el head `meta property og title`
*/

if($nav_pageCurrent == 'page_index'):
    $openGraph_title            = $site_name_full;

elseif($nav_pageCurrent == 'page_subdomain_SUBDOMAIN'): /* // REF [54] */
    $openGraph_title            = $site_name_SUBDOMAIN_full; 

else:
    $openGraph_title            = $page_title;

endif;
    
    
/* // -- Site Name */
if($nav_pageCurrent == 'page_subdomain_SUBDOMAIN'): /* // REF [54] */
    $openGraph_siteName            = $site_name_SUBDOMAIN_full; 

else:
    $openGraph_siteName             = $site_name_full;

endif;


/* // -- Descripción _ Max 65 char _________________________________
   ·_______________________________________________________________·
   123456789-123456789-123456789-123456789-123456789-123456789-12345 

   Esta variable se usa en el head `meta property og description` */
if($nav_pageCurrent == 'page_PAGEINT'): 
    $openGraph_desc = "DescripcionUnicaParaPAGEINT";
    
/* // -- Image */ 
    $openGraph_img_url              = $url_wip_full . '/og_img_sq_PAGEINT_01.jpg';
    $openGraph_img_url_secure       = $openGraph_img_url;
    $openGraph_img_width            = '1200'; // '1000';
    $openGraph_img_height           = '630'; // '1000';
    
elseif($nav_pageCurrent_int == 'page_PAGEINT_home'): 
    $openGraph_desc = "DescripcionUnicaParaPAGEINTHOME";
    
/* // -- Image */ 
    $openGraph_img_url              = $url_wip_full . '/og_img_sq_PAGEINTHOME_01.jpg';
    $openGraph_img_url_secure       = $openGraph_img_url;
    $openGraph_img_width            = '1200'; // '1000';
    $openGraph_img_height           = '630'; // '1000';
    
elseif($nav_pageCurrent == 'page_subdomain_SUBDOMAIN'): /* // REF [54] */
    $openGraph_desc = "DescripcionUnicaParaSUBDOMAIN";
    
/* // -- Image */ 
    $openGraph_img_url              = $url_wip_full . '/og_img_sq_SUBDOMAIN_01.jpg';
    $openGraph_img_url_secure       = $openGraph_img_url;
    $openGraph_img_width            = '1200'; // '1000';
    $openGraph_img_height           = '630'; // '1000';
    
else:
/* // -- Descripción global */
    $openGraph_desc                 = $page_desc_global;    
    
/* // -- Image gobal */ 
    $openGraph_img_url          = $url_wip_full . '/og_img_01.jpg';
    $openGraph_img_url_secure   = $openGraph_img_url;
    $openGraph_img_width            = '1200'; // '1000';
    $openGraph_img_height           = '630'; // '1000';
    
endif;    
    
    $openGraph_img_type             = 'image/jpeg';


/* // -- misc */
    if (!empty($page_url_full)) {
        $openGraph_url = $page_url_full;
    } elseif (!empty($page_redirect_url)) {
        $openGraph_url = $page_redirect_url;
    } else {
        $openGraph_url = $url_main_full;
    }
    $url_canonical                  = $openGraph_url;
    $openGraph_type                 = 'website';
    $openGraph_locale               = $site_lang_locale;


/* // Favicon --------------------------------------------------------------- */
    $favicon_url                        = $url_wip_full;
    $favicon_color_theme                = '#ffffff';
    $favicon_color_msApplicationTile    = $favicon_color_theme;
    $favicon_color_safariPinnedTab      = $favicon_color_theme;
?>