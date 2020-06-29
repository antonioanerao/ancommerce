<?php
/**
 * The template for the sidebar containing the WooCommerce shop widget area
 *
 * @package Fancy Lab
 */
?>
<?php if( is_active_sidebar( 'ancommerce-sidebar-shop' ) ): ?>
    <?php dynamic_sidebar( 'ancommerce-sidebar-shop' ) ?>
<?php endif;