<?php

/**
 * Template Overrides for WooCommerce pages
 *
 * @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/#section-3
 *
 * @package Fancy Lab
 */

function ancommerce_wc_modify() {
	//**************** CONTAINER AND ROW ******************/

	/**
	* Modify WooCommerce opening and closing HTML tags
	* We need Bootstrap-like opening/closing HTML tags
	*/
	add_action( 'woocommerce_before_main_content', 'ancommerce_open_container_row', 5 );
	function ancommerce_open_container_row() {
		?>
		<div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1 class="h1">
                            <?php if(is_shop()) { echo __('Store', 'ancommerce'); } else { echo the_title(); } ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container shop-content"><div class="row">
		<?php
	}

	add_action( 'woocommerce_after_main_content', 'ancommerce_close_container_row', 5 );
	function ancommerce_close_container_row(){
		?>
			</div></div>
		<?php
	}

    add_filter( 'woocommerce_show_page_title', 'ancommerce_remove_shop_title');
	function ancommerce_remove_shop_title() {
 	    return false;
    }

	if( is_shop() or is_archive() ) {

		//**************** SIDEBAR ******************/

		add_action( 'woocommerce_before_main_content', 'ancommerce_add_sidebar_tags', 6 );
		function ancommerce_add_sidebar_tags(){
			?>
				<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">
			<?php
		}

		// Put the main WC sidebar back, but using other action hook and on a different position
		add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

		add_action( 'woocommerce_before_main_content', 'ancommerce_close_sidebar_tags', 8  );
		function ancommerce_close_sidebar_tags(){
			?>
				</div>
			<?php
		}
		// Also, if we are on a shop page, include the product description
		add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
	}

	/**
	* Remove the main WC sidebar from its original position
	* We'll be including it somewhere else later on
	*/
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

	//**************** PRIMARY ******************/

	// Modify HTML tags on a shop and product category page. We also want Bootstrap-like markup here (.primary div)
	add_action( 'woocommerce_before_main_content', 'ancommerce_add_shop_tags', 9 );
	function ancommerce_add_shop_tags(){
		if( is_shop()){
		    if( is_active_sidebar( 'ancommerce-sidebar-shop' ) ) :
			?>
				<div class="col-lg-9 col-md-8 order-1 order-md-2">
			<?php endif;
		}

		elseif(is_product_category()) {
		     if(is_active_sidebar( 'ancommerce-sidebar-product-category' )) {
		         echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
		     }
		}

		else{
			?>
				<div class="col">
			<?php
		}
	}

	add_action('woocommerce_before_shop_loop_item', 'ancommerce_add_cardbox_open');
    function ancommerce_add_cardbox_open() {
        echo '<div class="card"><div class="card-body">';
    }

    add_action('woocommerce_after_shop_loop_item', 'ancommerce_add_cardbox_close');
    function ancommerce_add_cardbox_close() {
        echo '</div></div>';
    }

	add_action( 'woocommerce_after_main_content', 'ancommerce_close_shop_tags', 4 );
	function ancommerce_close_shop_tags(){
		?>
			</div>
		<?php
	}

	/*
	 *
	 */

	 add_action('woocommerce_before_edit_account_address_form', 'ancommerce_woocommerce_before_edit_account_address_form');
	 function ancommerce_woocommerce_before_edit_account_address_form() {
	     echo '<div class="card"><div class="card-body">';
	 }

	 add_action('woocommerce_after_edit_account_address_form', 'ancommerce_woocommerce_after_edit_account_address_form');
	 function ancommerce_woocommerce_after_edit_account_address_form() {
	     echo '</div></div>';
	 }

	 add_action('woocommerce_before_edit_account_form', 'ancommerce_woocommerce_before_edit_account_form');
	 function ancommerce_woocommerce_before_edit_account_form() {
	     echo '<div class="card"><div class="card-body">';
	 }

	 add_action('woocommerce_after_edit_account_form', 'ancommerce_woocommerce_after_edit_account_form');
	 function ancommerce_woocommerce_after_edit_account_form() {
	     echo '</div></div>';
	 }
}
add_action( 'wp', 'ancommerce_wc_modify' );
