<?php

	

$automobile_hub_tp_theme_css = '';

$automobile_hub_tp_color_option = get_theme_mod('automobile_hub_tp_color_option');

// 1st color
$automobile_hub_tp_color_option = get_theme_mod('automobile_hub_tp_color_option', '#f54114');
if ($automobile_hub_tp_color_option) {
    $automobile_hub_tp_theme_css .= ':root {';
    $automobile_hub_tp_theme_css .= '--color-primary1: ' . esc_attr($automobile_hub_tp_color_option) . ';';
    $automobile_hub_tp_theme_css .= '}';
}
// preloader
$automobile_hub_tp_preloader_color1_option = get_theme_mod('automobile_hub_tp_preloader_color1_option');

if($automobile_hub_tp_preloader_color1_option != false){
$automobile_hub_tp_theme_css .='.center1{';
$automobile_hub_tp_theme_css .='border-color: '.esc_attr($automobile_hub_tp_preloader_color1_option).' !important;';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_preloader_color1_option != false){
$automobile_hub_tp_theme_css .='.center1 .ring::before{';
$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_preloader_color1_option).' !important;';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_tp_preloader_color2_option = get_theme_mod('automobile_hub_tp_preloader_color2_option');

if($automobile_hub_tp_preloader_color2_option != false){
$automobile_hub_tp_theme_css .='.center2{';
$automobile_hub_tp_theme_css .='border-color: '.esc_attr($automobile_hub_tp_preloader_color2_option).' !important;';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_preloader_color2_option != false){
$automobile_hub_tp_theme_css .='.center2 .ring::before{';
$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_preloader_color2_option).' !important;';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_tp_preloader_bg_color_option = get_theme_mod('automobile_hub_tp_preloader_bg_color_option');

if($automobile_hub_tp_preloader_bg_color_option != false){
$automobile_hub_tp_theme_css .='.loader{';
$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_preloader_bg_color_option).';';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_tp_footer_bg_color_option = get_theme_mod('automobile_hub_tp_footer_bg_color_option');


if($automobile_hub_tp_footer_bg_color_option != false){
$automobile_hub_tp_theme_css .='#footer{';
$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_footer_bg_color_option).';';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_footer_widget_image = get_theme_mod('automobile_hub_footer_widget_image');
if($automobile_hub_footer_widget_image != false){
$automobile_hub_tp_theme_css .='#footer{';
$automobile_hub_tp_theme_css .='background: url('.esc_attr($automobile_hub_footer_widget_image).');';
$automobile_hub_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$auto_motors_slider_content_layout = get_theme_mod('auto_motors_slider_content_layout', 'RIGHT-ALIGN'); 
$automobile_hub_tp_theme_css .= '#slider .carousel-caption{';
switch ($auto_motors_slider_content_layout) {
    case 'LEFT-ALIGN':
        $automobile_hub_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $automobile_hub_tp_theme_css .= 'text-align:center; left: 20%; right: 20%';
        break;
    case 'RIGHT-ALIGN':
        $automobile_hub_tp_theme_css .= 'text-align:right; left: 50%; right: 15%';
        break;
    default:
        $automobile_hub_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
}
$automobile_hub_tp_theme_css .= '}';

//Font Weight
$automobile_hub_menu_font_weight = get_theme_mod( 'automobile_hub_menu_font_weight','400');
if($automobile_hub_menu_font_weight == '100'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 100;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '200'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 200;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '300'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 300;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '400'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 400;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '500'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 500;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '600'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 600;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '700'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 700;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '800'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 800;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '900'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 900;';
$automobile_hub_tp_theme_css .='}';
}

// header
$automobile_hub_slider_arrows = get_theme_mod('automobile_hub_slider_arrows');


if($automobile_hub_slider_arrows != true){
$automobile_hub_tp_theme_css .='.page-template-front-page .menubar{';
$automobile_hub_tp_theme_css .='position:static;background: #151515;';
$automobile_hub_tp_theme_css .='}';
}

// logo tagline color
$automobile_hub_site_tagline_color = get_theme_mod('automobile_hub_site_tagline_color');

if($automobile_hub_site_tagline_color != false){
$automobile_hub_tp_theme_css .='.logo h1 a, .logo p a, .logo p.site-title a{';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_site_tagline_color).';';
$automobile_hub_tp_theme_css .='}';
}
