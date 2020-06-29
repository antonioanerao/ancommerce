<?php
//Require customizer
require_once get_template_directory() . "/inc/customizer.php";

if(class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/wc-modifications.php';
}


// Carregando nossos scripts e folhas de estilos
function load_scripts() {

    wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css',
        array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.css',
        array(), '4.5.0', 'all' );
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap-grid.css',
        array(), '4.5.0', 'all' );
    wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap-reboot.css',
        array(), '4.5.0', 'all' );
    wp_enqueue_style( 'all', get_template_directory_uri(). '/assets/vendor/fontawesome-free/css/all.min.css',
        array(), '5.13.1', 'all' );
    wp_enqueue_style( 'simple-line-icons', get_template_directory_uri(). '/assets/vendor/simple-line-icons/css/simple-line-icons.css',
        array(), '2.4.1', 'all' );
    wp_enqueue_style( 'landing-page', get_template_directory_uri(). '/assets/css/landing-page.min.css',
        array(), '5.0.8', 'all' );

    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' );

    // Javascript
    wp_enqueue_script( 'bootstrap.bundle.min.js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        array( 'jquery' ), '4.5.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function ancommerce_config(){

    // Bootstrap Menu
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    //Navbar menu
    register_nav_menus(
        array(
            'ancommerce_main_menu'	=> 'Main Menu',
            'ancommerce_footer_menu'	=> 'Footer Menu'
        )
    );

    //Custom logo support
    add_theme_support('custom-logo', [
        'height' => '46',
        'width' => '220'
    ]);

    //Woocommerce support
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width'		=> 255,
        'single_image_width'		=> 255,
        'product_grid'				=> array(
            'default_rows'    => 10,
            'min_rows'        => 5,
            'max_rows'        => 10,
            'default_columns' => 1,
            'min_columns'     => 1,
            'max_columns'     => 1,
        )
    ) );

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'ancommerce_config', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
add_action( 'widgets_init', 'ancommerce_sidebars' );
function ancommerce_sidebars(){
    register_sidebar(
        array(
            'name'			=> esc_html__( 'Ancommerce Main Sidebar', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-1',
            'description'	=> esc_html__( 'Drag and drop your widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Sidebar Shop', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-shop',
            'description'	=> esc_html__( 'Drag and drop your WooCommerce widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Footer Sidebar 1', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-footer-1',
            'description'	=> esc_html__( 'Drag and drop your widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Footer Sidebar 2', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-footer-2',
            'description'	=> esc_html__( 'Drag and drop your widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Footer Sidebar 3', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-footer-3',
            'description'	=> esc_html__( 'Drag and drop your widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        )
    );
}

/**
 * Adds custom classes to the array of body classes.
 */
function ancommerce_body_classes( $classes ) {

    // Adds a class of no-sidebar to sites without active sidebar.
    if ( ! is_active_sidebar( 'ancommerce-sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    if ( ! is_active_sidebar( 'ancommerce-sidebar-shop' ) ) {
        $classes[] = 'no-sidebar-shop';
    }

    if ( ! is_active_sidebar( 'ancommerce-sidebar-footer-1' ) && ! is_active_sidebar( 'ancommerce-sidebar-footer-2' ) && ! is_active_sidebar( 'ancommerce-sidebar-footer-3' ) ) {
        $classes[] = 'no-sidebar-footer';
    }

    return $classes;
}
add_filter( 'body_class', 'ancommerce_body_classes' );