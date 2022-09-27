<?php

function sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

if ( ! function_exists( 'sanitize_select' ) ) {
    /**
     * Sanitize selection
     *
     * @since ancommerce 1.0.0
     */
    function sanitize_select( $input, $setting ) {
        // Ensure input is a slug.
        $input = sanitize_text_field( $input );
        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;
        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
}

if ( ! function_exists( 'sanitize_number_range' ) ) {
    /**
     * Sanitize selection
     *
     * @since ancommerce 1.0.0
     */
    function sanitize_number_range( $input, $setting ) {
        
        // Ensure input is an absolute integer.
        $input = absint( $input );
        
        // Get the input attributes associated with the setting.
        $atts = $setting->manager->get_control( $setting->id )->input_attrs;
        
        // Get min.
        $min = ( isset( $atts['min'] ) ? $atts['min'] : $input );
        
        // Get max.
        $max = ( isset( $atts['max'] ) ? $atts['max'] : $input );
        
        // Get Step.
        $step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
        
        // If the input is within the valid range, return it; otherwise, return the default.
        return ( $min <= $input && $input <= $max && is_int( $input / $step ) ? $input : $setting->default );
        
    }
}

/**
 * Sanitize Image
 *
 * @param $input
 *
 * @return string
 */

function sanitize_image( $input ) {
    
    $output = '';
    
    /* check file type */
    $filetype = wp_check_filetype( $input );
    $mime_type = $filetype['type'];
    
    /* only mime type "image" allowed */
    if ( strpos( $mime_type, 'image' ) !== false ) {
        $output = $input;
    }
    
    return $output;
}

function themeslug_sanitize_select($input, $setting) {
    // Ensure input is a slug.
    $input = sanitize_key($input);
    
    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control($setting->id)->choices;
    
    // If the input is a valid key, return it; otherwise, return the default.
    return (array_key_exists($input, $choices) ? $input : $setting->default);
}

//Sanitize html
function appointment_sanitize_html( $input )
{
    return force_balance_tags( $input );
}