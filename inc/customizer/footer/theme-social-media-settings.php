<?php
$wp_customize->add_section(
    'sec_social', array(
    'title'			=> __( 'Social Media Settings', 'ancommerce' ),
    'description'	=> __( 'Social Media Section', 'ancommerce' ),
    'panel'  => 'panel_footer_settings',
));

// Instagram
$wp_customize->add_setting(
    'set_social_instagram', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'set_social_instagram', array(
    'label'				=> __( 'Instagram URL', 'ancommerce' ),
    'description'		=> __( 'Please, add your full Instagram url here', 'ancommerce' ),
    'section'			=> 'sec_social',
    'type'				=> 'text'
));

// Pinterest
$wp_customize->add_setting(
    'set_social_pinterest', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'set_social_pinterest', array(
    'label'				=> __( 'Pinterest URL', 'ancommerce' ),
    'description'		=> __( 'Please, add your full Pinterest url here', 'ancommerce' ),
    'section'			=> 'sec_social',
    'type'				=> 'text'
));

// Facebook
$wp_customize->add_setting(
    'set_social_facebook', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'set_social_facebook', array(
    'label'				=> __( 'Facebook URL', 'ancommerce' ),
    'description'		=> __( 'Please, add your full Facebook url here', 'ancommerce' ),
    'section'			=> 'sec_social',
    'type'				=> 'text'
));