<?php
function ancommerce_customizer($wp_customize) {
    //Navbar Section
    $wp_customize->add_section(
        'sec_navbar', array(
            'title'			=> 'Navbar Settings',
            'description'	=> 'Navbar Section'
        )
    );

        // Field 1 - Select navbar
        $wp_customize->add_control(
            'set_navbar', array(
                'label'				=> 'Navbar',
                'description'		=> 'Please, select your navbar color',
                'section'			=> 'sec_navbar',
                'type'				=> 'text'
            )
        );
            $wp_customize->add_setting( 'set_navbar', array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'themeslug_sanitize_select',
                'default' => 'light',
            ) );
            $wp_customize->add_control( 'set_navbar', array(
                'type' => 'select',
                'section' => 'sec_navbar',
                'label' => __( 'Select the navbar color' ),
                'description' => __( 'Select a color' ),
                'choices' => array(
                    'light' => __( 'White' ),
                    'dark' => __( 'Dark' ),
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