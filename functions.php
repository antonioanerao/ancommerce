<?php
//Require customizer
require_once get_template_directory() . "/inc/customizer-classes.php";
require_once get_template_directory() . "/inc/customizer.php";

if(class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/wc-modifications.php';
}


// Carregando nossos scripts e folhas de estilos
function load_scripts() {
    /*
     * Custom theme colors
     */
    
    wp_enqueue_style( 'template-blog', get_template_directory_uri(). '/assets/template-blog.css',
        array(), '1.0.1', 'all' );

    if(get_theme_mod( 'set_theme_color') == 'darkorange') {
        wp_enqueue_style( 'theme-darkorange', get_template_directory_uri(). '/assets/theme-darkorange.css',
            array(), '1.0.1', 'all' );
    }

    if(get_theme_mod( 'set_theme_color') == 'dark') {
        wp_enqueue_style( 'theme-dark', get_template_directory_uri(). '/assets/theme-dark.css',
            array(), '1.0.1', 'all' );
    }

    if(get_theme_mod( 'set_theme_color') == 'light') {
        wp_enqueue_style( 'theme-light', get_template_directory_uri(). '/assets/theme-light.css',
            array(), '1.0.1', 'all' );
    }
    
    wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css',
        array(), '1.0.1', 'all' );
    
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
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );

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
            'ancommerce_main_menu'	=> __('Main Menu'),
            'ancommerce_footer_menu'	=> __('Footer Menu')
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

    add_theme_support('title-tag');

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    add_theme_support( 'post-thumbnails' );
    add_image_size( 'ancommerce-blog', 250, 250, array( 'center', 'center' ) );
    add_image_size( 'ancommerce-blog-single', 960, 600, array( 'center', 'center' ) );
    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }
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
        ));

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Sidebar Shop', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-shop',
            'description'	=> esc_html__( 'Drag and drop your WooCommerce widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        ));

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Category Product Sidebar', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-product-category',
            'description'	=> esc_html__( 'Drag and drop your WooCommerce widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        ));

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Footer Sidebar 1', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-footer-1',
            'description'	=> esc_html__( 'Drag and drop your widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        ));

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Footer Sidebar 2', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-footer-2',
            'description'	=> esc_html__( 'Drag and drop your widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        ));

    register_sidebar(
        array(
            'name'			=> esc_html__( 'Footer Sidebar 3', 'ancommerce' ),
            'id'			=> 'ancommerce-sidebar-footer-3',
            'description'	=> esc_html__( 'Drag and drop your widgets here', 'ancommerce' ),
            'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'	=> '</div>',
            'before_title'	=> '<h4 class="widget-title">',
            'after_title'	=> '</h4>',
        ));
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

function register_shipment_arrival_order_status() {
    register_post_status( 'wc-arrival-shipment', array(
        'label'                     => 'Shipment Arrival',
        'public'                    => true,
        'show_in_admin_status_list' => true,
        'show_in_admin_all_list'    => true,
        'exclude_from_search'       => false,
        'label_count'               => _n_noop( 'Shipment Arrival <span class="count">(%s)</span>', 'Shipment Arrival <span class="count">(%s)</span>' )
    ) );
}
add_action( 'init', 'register_shipment_arrival_order_status' );
function add_awaiting_shipment_to_order_statuses( $order_statuses ) {
    $new_order_statuses = array();
    foreach ( $order_statuses as $key => $status ) {
        $new_order_statuses[ $key ] = $status;
        if ( 'wc-processing' === $key ) {
            $new_order_statuses['wc-arrival-shipment'] = 'Shipment Arrival';
        }
    }
    return $new_order_statuses;
}
add_filter( 'wc_order_statuses', 'add_awaiting_shipment_to_order_statuses' );

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'ancommerce_woocommerce_header_add_to_cart_fragment' );

function ancommerce_woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();

    ?>
    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <?php
    $fragments['span.items'] = ob_get_clean();
    return $fragments;
}

/*
* Add password field in checkout page
*/
add_filter( 'woocommerce_checkout_fields' , 'ancommerce_custom_wc_checkout_fields' );
function ancommerce_custom_wc_checkout_fields( $fields ) {
    $fields['account']['account_password']['placeholder'] = __('Password', 'ancommerce');
    $fields['account']['account_password']['label'] = __('Password', 'ancommerce');
    $fields['account']['account_password']['required'] = 'required';

    $fields['account']['account_confirm_password']['placeholder'] = __('Confirm Password', 'ancommerce');
    $fields['account']['account_confirm_password']['label'] = __('Confirm Password', 'ancommerce');
    $fields['account']['account_confirm_password']['required'] = 'required';

    return $fields;
}

/**
 * Validate that the two password fields match.
 * @param $posted
 */
function o_woocommerce_confirm_password_validation( $posted ) {
    $checkout = WC()->checkout;
    if ( ! is_user_logged_in() && ( $checkout->must_create_account || ! empty( $posted['createaccount'] ) ) ) {
        if ( strcmp( $posted['account_password'], $posted['account_confirm_password'] ) !== 0 ) {
            wc_add_notice( __( 'Passwords do not match.', 'ancommerce' ), 'error' );
        }
    }
}
add_action( 'woocommerce_after_checkout_validation', 'o_woocommerce_confirm_password_validation', 10, 2 );

/*
 * Template Blog
 */

require_once('inc/template-tag.php');
require_once('inc/sanitize.php');

function templateBlogGetPosts($category, $count): array {
    return [
	    'post_type' 		=> 'post',
	    'post_status'	 	=> 'publish',
	    'category__in' 		=> absint( $category ),
	    'posts_per_page' 	=> absint( $count )
    ];
}