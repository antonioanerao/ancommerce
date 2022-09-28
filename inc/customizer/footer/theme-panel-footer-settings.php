<?php
$wp_customize->add_panel( 'panel_footer_settings', array(
    'priority'       => 500,
    'capability'     => 'edit_theme_options',
    'title'      => __('Footer Settings', 'ancommerce'),
) );

/* Copyright section start */
$wp_customize->add_section(
    'sec_copyright', array(
        'title'			=> __( 'Copyright Settings', 'ancommerce' ),
        'description'	=> __( 'Copyright Section', 'ancommerce' ),
        'panel'  => 'panel_footer_settings',
    )
);
// Field 1 - Copyright Text Box
$wp_customize->add_setting(
    'set_copyright', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'set_copyright', array(
        'label'				=> __( 'Copyright', 'ancommerce' ),
        'description'		=> __( 'Please, add your copyright information here', 'ancommerce' ),
        'section'			=> 'sec_copyright',
        'type'				=> 'text'
    )
);
/* Copyright section ends */