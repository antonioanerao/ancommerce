<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<?php
    if(get_theme_mod( 'set_theme_color') == 'light') { $themeNavbar = "navbar-light bg-light "; $themeColor = "theme-light"; }
    if(get_theme_mod( 'set_theme_color') == 'dark') { $themeNavbar ="navbar-dark bg-dark"; $themeColor = "theme-dark"; }
    if(get_theme_mod( 'set_theme_color') == 'darkorange') { $themeNavbar = "navbar-dark bg-darkorange"; $themeColor = "theme-darkorange"; }
?>
<body <?php body_class($themeColor); ?>>

<nav class="navbar navbar-expand-lg sb-navbar <?php echo $themeNavbar; ?> ">
    <div class="container">

        <a class="navbar-brand" href="/">
            <?php if( has_custom_logo() ): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <?php bloginfo( 'title' ); ?>
                <span class="small"><?php bloginfo( 'description' ); ?></span>
            <?php endif; ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <?php
            wp_nav_menu( array(
                'theme_location'    => 'ancommerce_main_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarSupportedContent',
                'menu_class'        => 'navbar-nav mr-auto pt-3 pt-lg-0',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>

        <?php if( class_exists( 'WooCommerce' ) ): ?>
            <div class="cart-header d-block mx-auto mx-md-0 mx-sm-0">
                <a href="<?php echo wc_get_cart_url(); ?>">
                    <span class="fa fa-shopping-cart"></span> <?php _e('My Cart', 'ancommerce') ?>
                </a>
                <span class="items">
                    <?php echo WC()->cart->get_cart_contents_count(); ?>
                </span>
            </div>
        <?php endif; ?>
    </div>
</nav>