<?php

function sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

if ( ! function_exists( 'sanitize_select' ) ) {
    function sanitize_select( $input, $setting ) {
        $input = sanitize_text_field( $input );
        $choices = $setting->manager->get_control( $setting->id )->choices;
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
}

if ( ! function_exists( 'sanitize_number_range' ) ) {
    function sanitize_number_range( $input, $setting ) {
        $input = absint( $input );
        $atts = $setting->manager->get_control( $setting->id )->input_attrs;
        
        $min = ( isset( $atts['min'] ) ? $atts['min'] : $input );
        
        $max = ( isset( $atts['max'] ) ? $atts['max'] : $input );
        
        $step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
        
        return ($min <= $input && $input <= $max && is_int( $input / $step ) ? $input : $setting->default );
    }
}

function sanitize_image( $input ) {
    
    $output = '';
    $filetype = wp_check_filetype( $input );
    $mime_type = $filetype['type'];
    
    if ( strpos( $mime_type, 'image' ) !== false ) {
        $output = $input;
    }
    
    return $output;
}

function themeslug_sanitize_select($input, $setting) {
    $input = sanitize_key($input);
    
    $choices = $setting->manager->get_control($setting->id)->choices;
    
    return (array_key_exists($input, $choices) ? $input : $setting->default);
}

function sanitize_html( $input )
{
    return force_balance_tags( $input );
}