<?php get_header(); ?>

<?php

	/* Start the Loop */
	while( have_posts() ): the_post();
	
	    get_template_part( 'template-parts/content', 'single' );
	
	    // If comments are open or we have at least one comment, load up the comment template.
	    if( comments_open() || get_comments_number()):
	        comments_template();
	    endif;
	
	    // End of the loop.
	endwhile;
?>

<?php get_footer(); ?>