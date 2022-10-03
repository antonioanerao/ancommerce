<?php
$wp_customize->add_panel( 'panel_home_options_settings', array(
    'priority'       => 500,
    'capability'     => 'edit_theme_options',
    'title'      => __('Template Home Options', 'ancommerce'),
) );
// Masterhead
$wp_customize->add_section(
    'sec_masterhead', array(
        'title'			=> __( 'Masterhead', 'ancommerce' ),
        'description'	=> __( 'Masterhead Section', 'ancommerce' ),
        'panel'  => 'panel_home_options_settings',
    )
);
// Description
$wp_customize->add_setting(
    'set_masterhead_description', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_masterhead_description', array(
        'label'				=> __( 'Description', 'ancommerce' ),
        'description'		=> __( 'Add your description here', 'ancommerce' ),
        'section'			=> 'sec_masterhead',
        'type'				=> 'textarea'
    )
);

// Image URL
$wp_customize->add_setting(
    'set_masterhead_image_url', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_masterhead_image_url', array(
        'label'				=> __( 'Image URL', 'ancommerce' ),
        'description'		=> __( 'Please, add your Image URL', 'ancommerce' ),
        'section'			=> 'sec_masterhead',
        'type'				=> 'text'
    )
);

// Button
$wp_customize->add_setting(
    'set_masterhead_button_text', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_masterhead_button_text', array(
        'label'				=> __( 'Button Text', 'ancommerce' ),
        'description'		=> __( 'Add your Button Text', 'ancommerce' ),
        'section'			=> 'sec_masterhead',
        'type'				=> 'text'
    )
);

$wp_customize->add_setting(
    'set_masterhead_button_link', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_masterhead_button_link', array(
        'label'				=> __( 'Button Link', 'ancommerce' ),
        'description'		=> __( 'Add your Button Link', 'ancommerce' ),
        'section'			=> 'sec_masterhead',
        'type'				=> 'text',
        'input_attrs' => array(
            'placeholder' => __('EX: https://domain.com'),
        )
    )
);

// Block 01
$wp_customize->add_section(
    'sec_block_01', array(
        'title'			=> __( 'Block 01', 'ancommerce' ),
        'description'	=> __( 'Block 01 Section. You need to insert an image url to display this section', 'ancommerce' ),
        'panel'  => 'panel_home_options_settings',
    )
);
// Title
$wp_customize->add_setting(
    'set_block_01_title', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_01_title', array(
        'label'				=> __( 'Title', 'ancommerce' ),
        'description'		=> __( 'Add your title here', 'ancommerce' ),
        'section'			=> 'sec_block_01',
        'type'				=> 'text',
    )
);

// Description
$wp_customize->add_setting(
    'set_block_01_description', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_01_description', array(
        'label'				=> __( 'Description', 'ancommerce' ),
        'description'		=> __( 'Add your description here', 'ancommerce' ),
        'section'			=> 'sec_block_01',
        'type'				=> 'textarea'
    )
);

// Image URK
$wp_customize->add_setting(
    'set_block_01_image_url', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_01_image_url', array(
        'label'				=> __( 'Image URL', 'ancommerce' ),
        'description'		=> __( 'Add your image url here', 'ancommerce' ),
        'section'			=> 'sec_block_01',
        'type'				=> 'text',
        'input_attrs' => array(
            'placeholder' => __('EX: https://domain.com/img/image.jpg'),
        )
    )
);

// Link To Post/Product
$wp_customize->add_setting(
    'set_block_01_link', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_01_link', array(
        'label'				=> __( 'Post/Product Link', 'ancommerce' ),
        'description'		=> __( 'Add your blog/product url here', 'ancommerce' ),
        'section'			=> 'sec_block_01',
        'type'				=> 'text',
        'input_attrs' => array(
            'placeholder' => __('EX: https://domain.com/post'),
        )
    )
);

// Block 02
$wp_customize->add_section(
    'sec_block_02', array(
        'title'			=> __( 'Block 02', 'ancommerce' ),
        'description'	=> __( 'Block 02 Section. You need to insert an image url to display this section', 'ancommerce' ),
        'panel'  => 'panel_home_options_settings',
    )
);
// Title
$wp_customize->add_setting(
    'set_block_02_title', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_02_title', array(
        'label'				=> __( 'Title', 'ancommerce' ),
        'description'		=> __( 'Add your title here', 'ancommerce' ),
        'section'			=> 'sec_block_02',
        'type'				=> 'text',
    )
);

// Description
$wp_customize->add_setting(
    'set_block_02_description', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_02_description', array(
        'label'				=> __( 'Description', 'ancommerce' ),
        'description'		=> __( 'Add your description here', 'ancommerce' ),
        'section'			=> 'sec_block_02',
        'type'				=> 'textarea'
    )
);

// Image URK
$wp_customize->add_setting(
    'set_block_02_image_url', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_02_image_url', array(
        'label'				=> __( 'Image URL', 'ancommerce' ),
        'description'		=> __( 'Add your image url here', 'ancommerce' ),
        'section'			=> 'sec_block_02',
        'type'				=> 'text',
        'input_attrs' => array(
            'placeholder' => __('EX: https://domain.com/img/image.jpg'),
        )
    )
);

// Link To Post/Product
$wp_customize->add_setting(
    'set_block_02_link', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_02_link', array(
        'label'				=> __( 'Post/Product Link', 'ancommerce' ),
        'description'		=> __( 'Add your blog/product url here', 'ancommerce' ),
        'section'			=> 'sec_block_02',
        'type'				=> 'text',
        'input_attrs' => array(
            'placeholder' => __('EX: https://domain.com/post'),
        )
    )
);

// Block 03
$wp_customize->add_section(
    'sec_block_03', array(
        'title'			=> __( 'Block 03', 'ancommerce' ),
        'description'	=> __( 'Block 03 Section. You need to insert an image url to display this section', 'ancommerce' ),
        'panel'  => 'panel_home_options_settings',
    )
);
// Title
$wp_customize->add_setting(
    'set_block_03_title', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_03_title', array(
        'label'				=> __( 'Title', 'ancommerce' ),
        'description'		=> __( 'Add your title here', 'ancommerce' ),
        'section'			=> 'sec_block_03',
        'type'				=> 'text',
    )
);

// Description
$wp_customize->add_setting(
    'set_block_03_description', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_03_description', array(
        'label'				=> __( 'Description', 'ancommerce' ),
        'description'		=> __( 'Add your description here', 'ancommerce' ),
        'section'			=> 'sec_block_03',
        'type'				=> 'textarea'
    )
);

// Image URK
$wp_customize->add_setting(
    'set_block_03_image_url', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_03_image_url', array(
        'label'				=> __( 'Image URL', 'ancommerce' ),
        'description'		=> __( 'Add your image url here', 'ancommerce' ),
        'section'			=> 'sec_block_03',
        'type'				=> 'text',
        'input_attrs' => array(
            'placeholder' => __('EX: https://domain.com/img/image.jpg'),
        )
    )
);

// Link To Post/Product
$wp_customize->add_setting(
    'set_block_03_link', array(
        'type'					=> 'theme_mod',
        'default'				=> '',
        'sanitize_callback'		=> 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'set_block_03_link', array(
        'label'				=> __( 'Post/Product Link', 'ancommerce' ),
        'description'		=> __( 'Add your blog/product url here', 'ancommerce' ),
        'section'			=> 'sec_block_03',
        'type'				=> 'text',
        'input_attrs' => array(
            'placeholder' => __('EX: https://domain.com/post'),
        )
    )
);