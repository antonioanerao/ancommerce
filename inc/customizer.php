<?php

function ancommerce_customizer($wp_customize) {
    //Theme color Section
    require_once('customizer/theme-color-section.php');
    
    //Theme header Section
    require_once('customizer/header/theme-header-section.php');
    
    // Template Home Options

    require_once('customizer/theme-home-options.php');
    
    /* Template Home Settings */
    include_once('homepage-sections.php');
    
    /*
     * Footer
     */
	
    //Panel Footer Settings
    require_once('customizer/footer/theme-panel-footer-settings.php');
    
    /* Social Media section start */
    require_once('customizer/footer/theme-social-media-settings.php');
}
add_action( 'customize_register', 'ancommerce_customizer' );

