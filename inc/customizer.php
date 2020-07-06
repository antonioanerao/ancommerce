<?php
function ancommerce_customizer($wp_customize) {
    //Navbar Section
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

    //Service section panel
    $wp_customize->add_panel( 'panel_hmoe_template', array(
        'priority'       => 500,
        'capability'     => 'edit_theme_options',
        'title'      => __('Template Home Options', 'appointment'),
    ) );


    //sobrenos section one
    $wp_customize->add_section( 'sec_masthead' , array(
        'title'      => __('Masthead', 'appointment'),
        'panel'  => 'panel_hmoe_template',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'appointment_options[set_masterhead_description]',
        array(
            'default' => __('Build a landing page for your business or project and generate more call to actions!'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[set_masterhead_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'sec_masthead',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[set_masterhead_image_url]',
        array(
            'default' => __('ti-bar-chart','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[set_masterhead_image_url]',
        array(
            'label' => __('Image URL','appointment'),
            'section' => 'sec_masthead',
            'type' => 'text',
        )
    );

    //sobrenos section 2
    $wp_customize->add_section( 'sobrenos_section_two' , array(
        'title'      => __('Bloco 02', 'appointment'),
        'panel'  => 'panel_hmoe_template',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'appointment_options[sobrenos_two_title]',
        array(
            'default' => __('Focus on Customized Sales','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[sobrenos_two_title]',
        array(
            'label' => __('Título','appointment'),
            'section' => 'sobrenos_section_two',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[sobrenos_two_description]',
        array(
            'default' => 'There are many variations of passa lorem Ipsum available but the ma',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[sobrenos_two_description]',
        array(
            'label' => __('Descrição','appointment'),
            'section' => 'sobrenos_section_two',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[sobrenos_two_icon]',
        array(
            'default' => __('ti-business-card','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[sobrenos_two_icon]',
        array(
            'label' => __('Ícone','appointment'),
            'section' => 'sobrenos_section_two',
            'type' => 'text',
        )
    );


    //sobrenos section 3
    $wp_customize->add_section( 'sobrenos_section_three' , array(
        'title'      => __('Bloco 03', 'appointment'),
        'panel'  => 'panel_hmoe_template',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'appointment_options[sobrenos_three_title]',
        array(
            'default' => __('Focus on Customized Sales','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[sobrenos_three_title]',
        array(
            'label' => __('Título','appointment'),
            'section' => 'sobrenos_section_three',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[sobrenos_three_description]',
        array(
            'default' => 'There are many variations of passa lorem Ipsum available but the ma',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[sobrenos_three_description]',
        array(
            'label' => __('Descrição','appointment'),
            'section' => 'sobrenos_section_three',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[sobrenos_three_icon]',
        array(
            'default' => __('ti-pie-chart2','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[sobrenos_three_icon]',
        array(
            'label' => __('Ícone','appointment'),
            'section' => 'sobrenos_section_three',
            'type' => 'text',
        )
    );


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

    //Sanitize html
    function appointment_sanitize_html( $input )
    {
        return force_balance_tags( $input );
    }
}
add_action( 'customize_register', 'ancommerce_customizer' );

function themeslug_sanitize_select($input, $setting) {
    // Ensure input is a slug.
    $input = sanitize_key($input);

    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control($setting->id)->choices;

    // If the input is a valid key, return it; otherwise, return the default.
    return (array_key_exists($input, $choices) ? $input : $setting->default);
}