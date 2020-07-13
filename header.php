<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<?php
    if(get_theme_mod( 'set_theme_color') == 'light') { $themeNavbar = "navbar-light bg-light "; }
    if(get_theme_mod( 'set_theme_color') == 'dark') { $themeNavbar ="navbar-dark bg-dark"; }
    if(get_theme_mod( 'set_theme_color') == 'darkorange') { $themeNavbar = "navbar-dark bg-darkorange"; }
?>
<body <?php body_class('theme-color'); ?>>
<div class="topBar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-none d-md-block">
                <ul class="list-inline mb-0">
                    <?php if(get_theme_mod( 'set_social_instagram')) : ?>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/<?php echo get_theme_mod( 'set_social_instagram'); ?>" target="_blank">
                                <i class="text-white fab fa-instagram social-icons"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_theme_mod( 'set_social_pinterest')) : ?>
                        <li class="list-inline-item">
                            <a href="https://www.pinterest.com/<?php echo get_theme_mod( 'set_social_pinterest'); ?>" target="_blank">
                                <i class="text-white fab fa-pinterest social-icons"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_theme_mod( 'set_social_facebook')) : ?>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/<?php echo get_theme_mod( 'set_social_facebook'); ?>" target="_blank">
                                <i class="text-white fab fa-facebook social-icons"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-6 col-12">

                    <ul class="list-inline float-right top-right">
                        <?php if ( get_option( 'users_can_register' ) ) : ?>
                            <?php if ( is_user_logged_in() ) : ?>
                                <li class="account-login">
                                    <span>
                                        <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e( 'My Account', 'ancommerce' ) ?></a>
                                        <small>/</small>
                                        <a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ) );?>"><?php esc_html_e( 'Logout', 'ancommerce'); ?></a>
                                    </span>
                                </li>
                            <?php else: ?>
                                <li class="account-login">
                                <span>
                                    <a class="account-link" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e( 'Login / Register', 'ancommerce' ) ?></a>
                                </span>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if (class_exists('woocommerce')) : ?>
                            <li class="cart-topbar">
                                <a href="<?php echo wc_get_cart_url(); ?>"><i class="fa fa-shopping-cart"></i>
                                    <span class="items">
                                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
            </div>
        </div>
    </div>
</div>

<?php
    if(get_theme_mod( 'set_theme_header') == 1) {
        require(get_template_directory().'/inc/header-1.php');
    }

    if(get_theme_mod( 'set_theme_header') == 2) {
        require(get_template_directory().'/inc/header-2.php');
    }
?>