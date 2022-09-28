<?php
$wp_customize->add_section(
    'sec_theme_header', array(
        'title'			=> 'Theme Header Settings',
        'description'	=> 'Theme Header Section'
    )
);

// Field 1 - Select navbar
$wp_customize->add_control(
    'set_theme_header', array(
        'label'				=> 'Theme Header',
        'description'		=> 'Please, select your theme header',
        'section'			=> 'sec_theme_header',
        'type'				=> 'text'
    )
);
$wp_customize->add_setting( 'set_theme_header', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'themeslug_sanitize_select',
    'default' => 1,
) );
$wp_customize->add_control( 'set_theme_header', array(
    'type' => 'select',
    'section' => 'sec_theme_header',
    'label' => __( 'Select the navbar color' ),
    'description' => __( 'Select a color' ),
    'choices' => array(
        1 => __( 'Style One' ),
        2 => __( 'Style Two' ),
    ),
) );