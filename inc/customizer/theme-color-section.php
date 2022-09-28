<?php
$wp_customize->add_section(
    'sec_theme_color', array(
        'title'			=> 'Theme Color Settings',
        'description'	=> 'Theme Color Section'
    )
);

// Field 1 - Select navbar
$wp_customize->add_control(
    'set_theme_color', array(
        'label'				=> 'Theme Color',
        'description'		=> 'Please, select your theme color',
        'section'			=> 'sec_theme_color',
        'type'				=> 'text'
    )
);
$wp_customize->add_setting( 'set_theme_color', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'themeslug_sanitize_select',
    'default' => 'light',
) );
$wp_customize->add_control( 'set_theme_color', array(
    'type' => 'select',
    'section' => 'sec_theme_color',
    'label' => __( 'Select the navbar color' ),
    'description' => __( 'Select a color' ),
    'choices' => array(
        'light' => __( 'White' ),
        'dark' => __( 'Dark' ),
        'darkorange' => __( 'Dark Orange' ),
    ),
) );