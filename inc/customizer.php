<?php
function ancommerce_customizer($wp_customize) {
    //Theme color Section
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

    //Theme header Section
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

    // Template Home Options
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
			
		//TODO Add block 01 and block 02

    // Footer

    //Panel Footer Settings
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



    /* Social Media section start */
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

    /* Social Media section ends */
    
    include_once('homepage-sections.php');
}
add_action( 'customize_register', 'ancommerce_customizer' );

