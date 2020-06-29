<?php get_header(); ?>
<section class="bg-light content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <?php
                if( have_posts() ):
                    while( have_posts() ): the_post();
                        ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <div><?php the_content(); ?></div>
                        </article>

                    <?php endwhile; else: ?>
                    <p>Nothing to display.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
