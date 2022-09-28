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

// Lifestyle Posts Section
$wp_customize->add_section('section_lifestyle_posts', array(
    'title'       => __('Lifestyle', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('lifestyle_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('lifestyle_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_lifestyle_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'lifestyle_section_title', array(
    'default'           => esc_html__('Lifestyle', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'lifestyle_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_lifestyle_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('lifestyle_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'lifestyle_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_lifestyle_posts',
            'settings'  	=> 'lifestyle_posts_category',
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

// Entertainment Posts Section
$wp_customize->add_section('section_entertainment_posts', array(
    'title'       => __('Entertainment', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('entertainment_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('entertainment_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_entertainment_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'entertainment_section_title', array(
    'default'           => esc_html__('Entertainment', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'entertainment_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_entertainment_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('entertainment_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'entertainment_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_entertainment_posts',
            'settings'  	=> 'entertainment_posts_category',
        )
    )
);

// Health Posts Section
$wp_customize->add_section('section_health_posts', array(
    'title'       => __('Health', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('health_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('health_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_health_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'health_section_title', array(
    'default'           => esc_html__('Health', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'health_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_health_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('health_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'health_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_health_posts',
            'settings'  	=> 'health_posts_category',
        )
    )
);

// Travel Posts Section
$wp_customize->add_section('section_travel_posts', array(
    'title'       => __('Travel', 'ancommerce'),
    'panel'       => 'homepage_sections'
));

// Show Section
$wp_customize->add_setting('travel_posts_section_show', array(
        'default' 			=> false,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_checkbox'
    )
);

$wp_customize->add_control('travel_posts_section_show', array(
        'label' 	=> __('Show Section', 'ancommerce'),
        'section' 	=> 'section_travel_posts',
        'type' 		=> 'checkbox',
    )
);

// Title
$wp_customize->add_setting( 'travel_section_title', array(
    'default'           => esc_html__('Travel', 'ancommerce'),
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport'         => 'refresh',
) );

$wp_customize->add_control( 'travel_section_title', array(
    'label'       => __( 'Title', 'ancommerce' ),
    'section'     => 'section_travel_posts',
    'type'        => 'text',
) );

// Category
$wp_customize->add_setting('travel_posts_category',
    array(
        'default' 			=> '0',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    )
);

$wp_customize->add_control(
    new Customize_Category_Control( $wp_customize, 'travel_posts_category',
        array(
            'label'         => __( 'Select Category', 'ancommerce' ),
            'section'       => 'section_travel_posts',
            'settings'  	=> 'travel_posts_category',
        )
    )
);