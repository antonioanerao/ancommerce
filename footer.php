<!-- Footer -->
<section class="footer-widgets">
    <div class="container">
        <div class="row">
            <?php if( is_active_sidebar( 'ancommerce-sidebar-footer-1' ) ): ?>
                <div class="col-md-4 col-lg-4 col-12">
                    <?php dynamic_sidebar( 'ancommerce-sidebar-footer-1' ); ?>
                </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'ancommerce-sidebar-footer-2' ) ): ?>
                <div class="col-md-4 col-lg-4 col-12">
                    <?php dynamic_sidebar( 'ancommerce-sidebar-footer-2' ); ?>
                </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'ancommerce-sidebar-footer-3' ) ): ?>
                <div class="col-md-4 col-lg-4 col-12">
                    <?php dynamic_sidebar( 'ancommerce-sidebar-footer-3' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="footer-menu col-lg-6 h-100 text-center text-lg-left my-auto">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'	=> 'ancommerce_footer_menu',
                        'depth'				=> 1,
                    )
                );
                ?>
                <p class="text-muted small mb-4 mb-lg-0"><br> <?php echo esc_html( get_theme_mod( 'set_copyright', __( 'Copyright X - All Rights Reserved', 'ancommerce' ) ) ); ?></p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <?php if(get_theme_mod( 'set_social_instagram')) : ?>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/<?php echo get_theme_mod( 'set_social_instagram'); ?>" target="_blank">
                                <i class="text-white fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_theme_mod( 'set_social_pinterest')) : ?>
                        <li class="list-inline-item">
                            <a href="https://www.pinterest.com/<?php echo get_theme_mod( 'set_social_pinterest'); ?>" target="_blank">
                                <i class="text-white fab fa-pinterest fa-2x fa-fw"></i>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_theme_mod( 'set_social_facebook')) : ?>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/<?php echo get_theme_mod( 'set_social_facebook'); ?>" target="_blank">
                                <i class="text-white fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>