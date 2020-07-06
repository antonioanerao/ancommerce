<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AnCommerce
 */

get_header();
?>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    <?php esc_html(the_title()); ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        if(is_wc_endpoint_url('order-received')):
                            echo '<div class="card"><div class="card-body">';
                        endif;?>
                    <?php
                    if( have_posts() ):
                        while( have_posts() ): the_post();
                            ?>
                            <article class="col">
                                <div><?php the_content(); ?></div>
                            </article>
                        <?php
                        endwhile;
                    else:
                        ?>
                        <p>Nothing to display.</p>
                    <?php
                    endif;
                    ?>
                    <?php if(is_wc_endpoint_url('order-received')): echo '</div></div>'; endif;?>
                </div>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>