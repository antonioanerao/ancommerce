<form class="input-group md-form form-sm form-2 pl-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'fancy-lab' ); ?>" value="<?php echo get_search_query(); ?>" name="s" class="form-control my-0 py-1 amber-border" type="search" aria-label="<?php _e('Search', 'ancommerce') ?>">
    <div class="input-group-append">
                        <span  type="submit" class="input-group-text amber lighten-3" id="basic-text1">
                            <?php _e('Search', 'ancommerce') ?>
                        </span>
    </div>
    <?php
    // If WooCommerce is activated, we'll be searching among products, not posts
    if( class_exists( 'WooCommerce' ) ):
        ?>
        <input type="hidden" value="product" name="post_type" id="post_type" />
    <?php endif; ?>
</form>