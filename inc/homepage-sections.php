<?php
/**
 * Homepage Sections.
 *
 * @package mero_magazine
 */

// Add Panel.
$wp_customize->add_panel( 'homepage_sections',
    array(
        'title'      => __( 'Homepage Sections', 'ancommerce' ),
        'priority'   => 100,
        'capability' => 'edit_theme_options',
    )
);

// Featured Posts Section
$wp_customize->add_section('section_featured_posts', array(
    'title'       => __('Featured', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('featured_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('featured_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_featured_posts',
        'type' 		=> 'checkbox',
    )
);

// Category
$wp_customize->add_setting('featured_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'featured_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_featured_posts',
            'settings'  	=> 'featured_posts_category',
        )
    )
);

// Second Posts Section
$wp_customize->add_section('section_second_posts', array(
    'title'       => __('Second', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('second_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('second_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_second_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'second_section_title', array(
    'default'           => esc_html__('Second', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'second_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_second_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('second_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'second_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_second_posts',
            'settings'  	=> 'second_posts_category',
        )
    )
);

// Third Posts Section
$wp_customize->add_section('section_third_posts', array(
    'title'       => __('Third', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('third_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('third_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_third_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'third_section_title', array(
    'default'           => esc_html__('Third', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'third_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_third_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('third_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'third_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_third_posts',
            'settings'  	=> 'third_posts_category',
        )
    )
);

// First Advertisement Section
$wp_customize->add_section('section_first_advertisement', array(
    'title'       => __('First Advertisement', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show First Advertisement
$wp_customize->add_setting('first_advertisement_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('first_advertisement_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_first_advertisement',
        'type' 		=> 'checkbox',
    )
);

// First Advertisement Image
$wp_customize->add_setting('first_advertisement_image', array(
    'type' => 'theme_mod',
    'sanitize_callback' => 'mero_magazine_sanitize_image',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mero_magazine_first_advertisement',
        array(
            'label' 	=> __('Image Size: 900 x 60', 'ancommerce'),
            'settings'  => 'first_advertisement_image',
            'section' 	=> 'section_first_advertisement',
        )
    )
);

// First Advertisement Url
$wp_customize->add_setting( 'first_advertisement_url', array(
    'default' 			=> '#',
    'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( 'first_advertisement_url', array(
    'label'             => esc_html__( 'Advertisement Url', 'ancommerce' ),
    'section'           => 'section_first_advertisement',
    'type'              => 'url',
) );

// Fourth Posts Section
$wp_customize->add_section('section_fourth_posts', array(
    'title'       => __('Fourth', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('fourth_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('fourth_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_fourth_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'fourth_section_title', array(
    'default'           => esc_html__('Fourth', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'fourth_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_fourth_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('fourth_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'fourth_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_fourth_posts',
            'settings'  	=> 'fourth_posts_category',
        )
    )
);

// Fifth Posts Section
$wp_customize->add_section('section_fifth_posts', array(
    'title'       => __('Fifth', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('fifth_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('fifth_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_fifth_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'fifth_section_title', array(
    'default'           => esc_html__('Fifth', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'fifth_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_fifth_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('fifth_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'fifth_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_fifth_posts',
            'settings'  	=> 'fifth_posts_category',
        )
    )
);

// Sixth Posts Section
$wp_customize->add_section('section_sixth_posts', array(
    'title'       => __('Sixth', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('sixth_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('sixth_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_sixth_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'sixth_section_title', array(
    'default'           => esc_html__('Sixth', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'sixth_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_sixth_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('sixth_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'sixth_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_sixth_posts',
            'settings'  	=> 'sixth_posts_category',
        )
    )
);