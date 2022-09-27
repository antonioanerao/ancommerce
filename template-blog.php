<?php /* Template Name: Blog Page */ get_header();

	$featured_posts_section_show   		= get_theme_mod( 'featured_posts_section_show', false );
	$business_posts_section_show   		= get_theme_mod( 'business_posts_section_show', false );
	$lifestyle_posts_section_show  		= get_theme_mod( 'lifestyle_posts_section_show', false );
	$first_advertisement_section_show  	= get_theme_mod( 'first_advertisement_section_show', false );
	$first_advertisement_image          = get_theme_mod( 'first_advertisement_image' );
	$first_advertisement_url            = get_theme_mod( 'first_advertisement_url', "#" );
	$entertainment_posts_section_show   = get_theme_mod( 'entertainment_posts_section_show', false );
	$health_posts_section_show   		= get_theme_mod( 'health_posts_section_show', false );
	$travel_posts_section_show   		= get_theme_mod( 'travel_posts_section_show', false );

	if ( $featured_posts_section_show == true ): ?>
  
		<section id="featured-posts-section">
			<div class="container">
				<div class="blog-archive grid columns-4">
					<?php
					$featured_posts_category = get_theme_mod( 'featured_posts_category', '0' );
					$featured_posts_count    = apply_filters( 'featured_posts_count', 5 );
					$featured_posts_args = array(
						'post_type' 		=> 'post',
		            	'post_status'	 	=> 'publish',
						'category__in' 		=> absint( $featured_posts_category ),
						'posts_per_page' 	=> absint( $featured_posts_count )
					);
				
					$query = new WP_Query( $featured_posts_args );
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

	if ( $business_posts_section_show == true ): ?>
		<section id="business-posts-section">
			<div class="container">
				<?php
				$business_section_title = get_theme_mod('business_section_title', 'Business');
				if ( ! empty( $business_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $business_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive columns-4 clear">
					<?php
					$business_posts_category = get_theme_mod( 'business_posts_category', '0' );
					$business_posts_count    = apply_filters( 'business_posts_count', 4 );
					$business_posts_args = array(
						'post_type' 		=> 'post',
		            	'post_status'	 	=> 'publish',
						'category__in' 		=> absint( $business_posts_category ),
						'posts_per_page' 	=> absint( $business_posts_count )
					);
				
					$query = new WP_Query( $business_posts_args );
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

	if ( $lifestyle_posts_section_show == true ): ?>
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
					$lifestyle_posts_args = array(
						'post_type' 		=> 'post',
		            	'post_status'	 	=> 'publish',
						'category__in' 		=> absint( $lifestyle_posts_category ),
						'posts_per_page' 	=> absint( $lifestyle_posts_count )
					);
				
					$query = new WP_Query( $lifestyle_posts_args );
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

	if ( $first_advertisement_section_show == true ): ?>
		<?php if( !empty( $first_advertisement_image ) && !empty( $first_advertisement_url ) ) : ?>
			<section id="first-advertisement">
				<div class="container">
		            <a href="<?php echo esc_url($first_advertisement_url); ?>" target="_blank"><img src="<?php echo esc_url($first_advertisement_image); ?>" alt="<?php esc_attr_e('first-advertisement', 'mero-magazine'); ?>"></a>
		        </div><!-- .container -->
	        </section><!-- #first-advertisement -->
        <?php endif; ?>
	<?php endif;

	if ( $entertainment_posts_section_show == true ): ?>
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
					$entertainment_posts_args = array(
						'post_type' 		=> 'post',
		            	'post_status'	 	=> 'publish',
						'category__in' 		=> absint( $entertainment_posts_category ),
						'posts_per_page' 	=> absint( $entertainment_posts_count )
					);
				
					$query = new WP_Query( $entertainment_posts_args );
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

	if ( $health_posts_section_show == true ): ?>
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
					$health_posts_args = array(
						'post_type' 		=> 'post',
		            	'post_status'	 	=> 'publish',
						'category__in' 		=> absint( $health_posts_category ),
						'posts_per_page' 	=> absint( $health_posts_count )
					);
				
					$query = new WP_Query( $health_posts_args );
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

	if ( $travel_posts_section_show == true ): ?>
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
					$travel_posts_args = array(
						'post_type' 		=> 'post',
		            	'post_status'	 	=> 'publish',
						'category__in' 		=> absint( $travel_posts_category ),
						'posts_per_page' 	=> absint( $travel_posts_count )
					);
				
					$query = new WP_Query( $travel_posts_args );
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
