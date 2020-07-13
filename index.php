<?php get_header(); ?>
<section class="bg-light content-area">
    <main>
        <div class="container">
            <div class="row">
                <div class="blog-area col-lg-9 col-md-8 col-12">
                    <?php

                    if( have_posts() ):

                        // Load posts loop.
                        while( have_posts() ): the_post();
                            get_template_part( 'template-parts/content' );
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
</section>
<?php get_footer(); ?>
