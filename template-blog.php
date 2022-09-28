<?php /* Template Name: Blog Page */ get_header();

	$first_advertisement_section_show  	= get_theme_mod( 'first_advertisement_section_show', false );
	$first_advertisement_image          = get_theme_mod( 'first_advertisement_image' );
	$first_advertisement_url            = get_theme_mod( 'first_advertisement_url', "#" );

	if ( get_theme_mod( 'featured_posts_section_show', false ) ): ?>
  
		<section id="featured-posts-section">
			<div class="container">
				<div class="blog-archive grid columns-4">
					<?php
					$featured_posts_category = get_theme_mod( 'featured_posts_category', '0' );
					$featured_posts_count    = apply_filters( 'featured_posts_count', 5 );
				
					$query = new WP_Query( templateBlogGetPosts($featured_posts_category, $featured_posts_count) );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>

							<article class="grid-item">
								<div class="blog-post-item clear">
									<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
										<a href="<?php the_permalink();?>"></a>
									</div><!-- .featured-image -->

									<div class="entry-container">
										<?php ancommerce_entry_footer(); ?>

										<header class="entry-header">
											<h2 class="entry-title">
												<a href="<?php the_permalink();?>"><?php the_title();?></a>
											</h2>
								        </header>

								        <div class="entry-meta">
											<?php ancommerce_posted_on(); ?>
										</div><!-- .entry-meta -->
									</div><!-- .entry-container -->
								</div><!-- .blog-post-item -->
							</article>
			    		<?php endwhile;
		    		endif;
					wp_reset_postdata(); ?>
				</div><!-- .blog-archive -->
			</div><!-- .container -->
		</section>
	<?php endif;

	if ( get_theme_mod( 'second_posts_section_show', false ) ): ?>
		<section id="second-section">
			<div class="container">
				<?php
				$second_section_title = get_theme_mod('second_section_title', 'Second');
				if ( ! empty( $second_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $second_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive columns-4 clear">
					<?php
					$second_posts_category = get_theme_mod( 'second_posts_category', '0' );
					$second_posts_count    = apply_filters( 'second_posts_count', 4 );
				
					$query = new WP_Query( templateBlogGetPosts($second_posts_category, $second_posts_count) );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>

							<article>
								<div class="blog-post-item clear">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="featured-image">
											<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
										</div><!-- .featured-image -->
									<?php endif; ?>

									<div class="entry-container">
										<header class="entry-header">
											<h2 class="entry-title">
												<a href="<?php the_permalink();?>"><?php the_title();?></a>
											</h2>
								        </header>

								        <div class="entry-meta">
											<?php ancommerce_posted_on(); ?>
										</div><!-- .entry-meta -->
									</div><!-- .entry-container -->
								</div><!-- .blog-post-item -->
							</article>
			    		<?php endwhile;
		    		endif;
					wp_reset_postdata(); ?>
				</div><!-- .blog-archive -->
			</div><!-- .container -->
		</section>
	<?php endif;

	if ( get_theme_mod( 'lifestyle_posts_section_show', false ) ): ?>
		<section id="lifestyle-posts-section">
			<div class="container">
				<?php
				$lifestyle_section_title = get_theme_mod('lifestyle_section_title', 'Lifestyle');
				if ( ! empty( $lifestyle_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $lifestyle_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive grid columns-4 clear">
					<?php
					$lifestyle_posts_category = get_theme_mod( 'lifestyle_posts_category', '0' );
					$lifestyle_posts_count    = apply_filters( 'lifestyle_posts_count', 12 );
				
					$query = new WP_Query( templateBlogGetPosts($lifestyle_posts_category, $lifestyle_posts_count) );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>

							<article class="grid-item">
								<div class="blog-post-item clear">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="featured-image">
											<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
										</div><!-- .featured-image -->
									<?php endif; ?>

									<div class="entry-container">
										<header class="entry-header">
											<h2 class="entry-title">
												<a href="<?php the_permalink();?>"><?php the_title();?></a>
											</h2>
								        </header>

								        <div class="entry-meta">
											<?php ancommerce_posted_on(); ?>
										</div><!-- .entry-meta -->
									</div><!-- .entry-container -->
								</div><!-- .blog-post-item -->
							</article>
			    		<?php endwhile;
		    		endif;
					wp_reset_postdata(); ?>
				</div><!-- .blog-archive -->
			</div><!-- .container -->
		</section>
	<?php endif;

	if ( $first_advertisement_section_show ): ?>
		<?php if( !empty( $first_advertisement_image ) && !empty( $first_advertisement_url ) ) : ?>
			<section id="first-advertisement">
				<div class="container">
		            <a href="<?php echo esc_url($first_advertisement_url); ?>" target="_blank"><img src="<?php echo esc_url($first_advertisement_image); ?>" alt="<?php esc_attr_e('first-advertisement', 'mero-magazine'); ?>"></a>
		        </div><!-- .container -->
	        </section><!-- #first-advertisement -->
        <?php endif; ?>
	<?php endif;

	if ( get_theme_mod( 'entertainment_posts_section_show', false ) ): ?>
		<section id="entertainment-posts-section">
			<div class="container">
				<?php
				$entertainment_section_title = get_theme_mod('entertainment_section_title', 'entertainment');
				if ( ! empty( $entertainment_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $entertainment_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive columns-4 clear">
					<?php
					$entertainment_posts_category = get_theme_mod( 'entertainment_posts_category', '0' );
					$entertainment_posts_count    = apply_filters( 'entertainment_posts_count', 4 );
				
					$query = new WP_Query( templateBlogGetPosts($entertainment_posts_category, $entertainment_posts_count) );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>

							<article>
								<div class="blog-post-item clear">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="featured-image">
											<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
										</div><!-- .featured-image -->
									<?php endif; ?>

									<div class="entry-container">
										<header class="entry-header">
											<h2 class="entry-title">
												<a href="<?php the_permalink();?>"><?php the_title();?></a>
											</h2>
								        </header>

								        <div class="entry-meta">
											<?php ancommerce_posted_on(); ?>
										</div><!-- .entry-meta -->
									</div><!-- .entry-container -->
								</div><!-- .blog-post-item -->
							</article>
			    		<?php endwhile;
		    		endif;
					wp_reset_postdata(); ?>
				</div><!-- .blog-archive -->
			</div><!-- .container -->
		</section>
	<?php endif;

	if ( get_theme_mod( 'health_posts_section_show', false ) ): ?>
		<section id="health-posts-section">
			<div class="container">
				<?php
				$health_section_title = get_theme_mod('health_section_title', 'health');
				if ( ! empty( $health_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $health_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive grid columns-4 clear">
					<?php
					$health_posts_category = get_theme_mod( 'health_posts_category', '0' );
					$health_posts_count    = apply_filters( 'health_posts_count', 10 );
				
					$query = new WP_Query( templateBlogGetPosts($health_posts_category, $health_posts_count) );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>

							<article class="grid-item">
								<div class="blog-post-item clear">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="featured-image">
											<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
										</div><!-- .featured-image -->
									<?php endif; ?>

									<div class="entry-container">
										<header class="entry-header">
											<h2 class="entry-title">
												<a href="<?php the_permalink();?>"><?php the_title();?></a>
											</h2>
								        </header>

								        <div class="entry-meta">
											<?php ancommerce_posted_on(); ?>
										</div><!-- .entry-meta -->
									</div><!-- .entry-container -->
								</div><!-- .blog-post-item -->
							</article>
			    		<?php endwhile;
		    		endif;
					wp_reset_postdata(); ?>
				</div><!-- .blog-archive -->
			</div><!-- .container -->
		</section>
	<?php endif;

	if ( get_theme_mod( 'travel_posts_section_show', false ) ): ?>
		<section id="travel-posts-section">
			<div class="container">
				<?php
				$travel_section_title = get_theme_mod('travel_section_title', 'travel');
				if ( ! empty( $travel_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $travel_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive grid columns-4 clear">
					<?php
					$travel_posts_category = get_theme_mod( 'travel_posts_category', '0' );
					$travel_posts_count    = apply_filters( 'travel_posts_count', 8 );
				
					$query = new WP_Query( templateBlogGetPosts($travel_posts_category, $travel_posts_count) );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post(); ?>

							<article class="grid-item">
								<div class="blog-post-item clear">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="featured-image">
											<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
										</div><!-- .featured-image -->
									<?php endif; ?>

									<div class="entry-container">
										<header class="entry-header">
											<h2 class="entry-title">
												<a href="<?php the_permalink();?>"><?php the_title();?></a>
											</h2>
								        </header>

								        <div class="entry-meta">
											<?php ancommerce_posted_on(); ?>
										</div><!-- .entry-meta -->
									</div><!-- .entry-container -->
								</div><!-- .blog-post-item -->
							</article>
			    		<?php endwhile;
		    		endif;
					wp_reset_postdata(); ?>
				</div><!-- .blog-archive -->
			</div><!-- .container -->
		</section>
	<?php endif;

	?>

<?php get_footer(); ?>
