<?php

function auto_motors_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_setting( 'automobile_hub_mail_text' );
    $wp_customize->remove_control( 'automobile_hub_mail_text' );
    $wp_customize->remove_setting( 'automobile_hub_call_text' );
    $wp_customize->remove_control( 'automobile_hub_call_text' );
    $wp_customize->remove_setting( 'automobile_hub_menu_font_size' );
    $wp_customize->remove_control( 'automobile_hub_menu_font_size' );
    $wp_customize->remove_setting( 'automobile_hub_cart_option' );
    $wp_customize->remove_control( 'automobile_hub_cart_option' );
    $wp_customize->remove_setting( 'automobile_hub_tp_color_option_link' );
    $wp_customize->remove_control( 'automobile_hub_tp_color_option_link' );
    $wp_customize->remove_setting( 'automobile_hub_cart_icon' );
    $wp_customize->remove_control( 'automobile_hub_cart_icon' );
    $wp_customize->remove_setting( 'automobile_hub_tp_body_layout_settings' );
    $wp_customize->remove_control( 'automobile_hub_tp_body_layout_settings' );
    $wp_customize->remove_control( 'automobile_hub_slider_content_layout' );
    $wp_customize->remove_setting( 'automobile_hub_slider_content_layout' );

    $wp_customize->remove_control( 'automobile_hub_slider_text' );
    $wp_customize->remove_setting( 'automobile_hub_slider_text' );

    $wp_customize->remove_control( 'automobile_hub_slider_icon' );
    $wp_customize->remove_setting( 'automobile_hub_slider_icon' );
}
add_action( 'customize_register', 'auto_motors_remove_customize_register', 11 );

function auto_motors_customize_register( $wp_customize ) {
	// Register the custom control type.
	$wp_customize->register_control_type( 'Auto_Motors_Toggle_Control' );

	$wp_customize->add_setting('automobile_hub_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_location',array(
		'label'	=> __('Add Location','auto-motors'),
		'section'	=> 'automobile_hub_topbar',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('auto_motors_slider_content_layout',array(
        'default' => 'RIGHT-ALIGN',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('auto_motors_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'auto-motors'),
        'section' => 'automobile_hub_slider_section',
        'choices' => array(
            'LEFT-ALIGN' => __('LEFT-ALIGN','auto-motors'),        	
            'CENTER-ALIGN' => __('CENTER-ALIGN','auto-motors'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','auto-motors'),
        ),
	) );

	$wp_customize->add_section( 'auto_motors_featured_car_section' , array(
    	'title'      => __( 'Featured Car Settings', 'auto-motors' ),
		'panel' => 'automobile_hub_panel_id',
		'priority' => 4,
	) );

    $wp_customize->add_setting( 'auto_motors_featured_car_show_hide', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Auto_Motors_Toggle_Control( $wp_customize, 'auto_motors_featured_car_show_hide', array(
		'label'       => esc_html__( 'Show / Hide section', 'auto-motors' ),
		'section'     => 'auto_motors_featured_car_section',
		'type'        => 'toggle',
		'settings'    => 'auto_motors_featured_car_show_hide',
	) ) );


	$wp_customize->add_setting('auto_motors_featured_car_section_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('auto_motors_featured_car_section_tittle',array(
		'label'	=> __('Section Title','auto-motors'),
		'section'	=> 'auto_motors_featured_car_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$auto_motors_offer_cat[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$auto_motors_offer_cat[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('auto_motors_featured_car_section_category', array(
	    'default' => 'select',
	    'sanitize_callback' => 'automobile_hub_sanitize_choices',
	));
	$wp_customize->add_control('auto_motors_featured_car_section_category', array(
	    'type' => 'select',
	    'choices' => $auto_motors_offer_cat,
	    'label' => __('Select Category', 'auto-motors'),
	    'section' => 'auto_motors_featured_car_section',
	));

	$wp_customize->add_setting('auto_motors_num_posts', array(
	    'default' => 3,
	    'sanitize_callback' => 'absint',
	));
	$wp_customize->add_control('auto_motors_num_posts', array(
	    'label' => __('Number of Featured Cars', 'auto-motors'),
	    'section' => 'auto_motors_featured_car_section',
	    'type' => 'number',
	    'input_attrs' => array(
	        'min' => 1,
	        'step' => 1,
	    ),
	));

	// Get the number of posts to display from the customizer setting
$auto_motors_num_posts = get_theme_mod('auto_motors_num_posts', 3); // Default to 3 if no setting is found

// Loop through the number of posts and create settings for each
for ($i = 1; $i <= $auto_motors_num_posts; $i++) {
    $wp_customize->add_setting('auto_motors_compare_price' . $i, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('auto_motors_compare_price' . $i, array(
        'label' => sprintf(__('Compare Price %d', 'auto-motors'), $i),
        'section' => 'auto_motors_featured_car_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('auto_motors_body_type' . $i, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('auto_motors_body_type' . $i, array(
        'label' => sprintf(__('Body Type %d', 'auto-motors'), $i),
        'section' => 'auto_motors_featured_car_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('auto_motors_model_year' . $i, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('auto_motors_model_year' . $i, array(
        'label' => sprintf(__('Model Year %d', 'auto-motors'), $i),
        'section' => 'auto_motors_featured_car_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('auto_motors_engine_type' . $i, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('auto_motors_engine_type' . $i, array(
        'label' => sprintf(__('Engine Type %d', 'auto-motors'), $i),
        'section' => 'auto_motors_featured_car_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('auto_motors_car_color' . $i, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('auto_motors_car_color' . $i, array(
        'label' => sprintf(__('Car Color %d', 'auto-motors'), $i),
        'section' => 'auto_motors_featured_car_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('auto_motors_mileage' . $i, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('auto_motors_mileage' . $i, array(
        'label' => sprintf(__('Mileage %d', 'auto-motors'), $i),
        'section' => 'auto_motors_featured_car_section',
        'type' => 'text',
    ));
}


}
add_action( 'customize_register', 'auto_motors_customize_register' );

if ( ! defined( 'AUTOMOBILE_HUB_PRO_THEME_NAME' ) ) {
	define( 'AUTOMOBILE_HUB_PRO_THEME_NAME', esc_html__( 'Auto Motors Pro Theme', 'auto-motors' ));
}
