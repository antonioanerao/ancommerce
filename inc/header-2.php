<div class="container mb-4 mt-4">
        <div class="row">
            <div class="col-md-6">
                <?php if( has_custom_logo() ): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <h2 class="site-title"><?php bloginfo( 'title' ); ?></h2>
                    <span class="small"><?php bloginfo( 'description' ); ?></span>
                <?php endif; ?>
            </div>

            <div class="col-md-4 mx-auto">

                <?php get_search_form(); ?>

            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg sb-navbar <?php echo $themeNavbar; ?> ">
    <div class="container">

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
    </div>
</nav>