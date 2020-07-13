<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ancommerce
 */

get_header();
?>

    <div class="content-area">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-12">
                        <?php

                        the_archive_title('<h1 class="archive-title">','</h1>');

                        if( have_posts() ):
                            // If we have posts, then we start the Loop.
                            while( have_posts() ): the_post();

                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                get_template_part( 'template-parts/content-archive' );

                                // End the loop.
                            endwhile;

                            // We're using numeric page navigation here.
                            the_posts_pagination( array(
                                'prev_text'	=> esc_html__( 'Previous' , 'ancommerce'),
                                'next_text'	=> esc_html__( 'Next' , 'ancommerce')
                            ));

                        // If no content, display the following message
                        else:
                            ?>
                            <p><?php esc_html_e( 'Nothing to display', 'ancommerce' ) ?></p>
                        <?php
                        endif;
                        ?>
                    </div>
                    <?php
                    // Display the main sidebar
                    get_sidebar();
                    ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>