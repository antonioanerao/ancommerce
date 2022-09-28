<?php
/**
 * Custom classes for customizer
 *
 * @package ancommerce
 */

if ( class_exists( 'WP_Customize_Control' ) ) {
    
    class Customize_Category_Control extends WP_Customize_Control {
        
        /**
         * Render the control's content.
         *
         * @since 1.0.0
         */
        public function render_content() {
            $dropdown = wp_dropdown_categories(
                array(
                    'name'              => '_customize-dropdown-categories-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => __( '&mdash; Select Category &mdash;', 'ancommerce' ),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );
            
            // Shakily add in the data link parameter.
            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
            
            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span><span class="description customize-control-description">%s</span> %s </label>',
                esc_html( $this->label ),
                wp_kses_post( $this->description ),
                $dropdown
            );
        }
    }
    
}