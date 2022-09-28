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
                    $count = 1;
				
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
											<h2 class="entry-title <?php echo 'featured-post-count-' . $count; ?> ">
												<a href="<?php the_permalink();?>"><?php the_title();?></a>
											</h2>
								        </header>

								        <div class="entry-meta">
											<?php ancommerce_posted_on(); ?>
										</div><!-- .entry-meta -->
									</div><!-- .entry-container -->
								</div><!-- .blog-post-item -->
							</article>
			    		<?php $count++; endwhile; endif; wp_reset_postdata(); ?>
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

	if ( get_theme_mod( 'third_posts_section_show', false ) ): ?>
		<section id="third-posts-section">
			<div class="container">
				<?php
				$third_section_title = get_theme_mod('third_section_title', 'Third Section');
				if ( ! empty( $third_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $third_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive grid columns-4 clear">
					<?php
					$third_posts_category = get_theme_mod( 'third_posts_category', '0' );
					$third_posts_count    = apply_filters( 'third_posts_count', 12 );
				
					$query = new WP_Query( templateBlogGetPosts($third_posts_category, $third_posts_count) );
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
		            <a href="<?php echo esc_url($first_advertisement_url); ?>" target="_blank">
                        <img class="img-fluid" src="<?php echo esc_url($first_advertisement_image); ?>" alt="<?php esc_attr_e('first-advertisement', 'ancommerce'); ?>">
                    </a>
		        </div><!-- .container -->
	        </section><!-- #first-advertisement -->
        <?php endif; ?>
	<?php endif;

	if ( get_theme_mod( 'fourth_posts_section_show', false ) ): ?>
		<section id="fourth-posts-section">
			<div class="container">
				<?php
				$fourth_section_title = get_theme_mod('fourth_section_title', 'fourth');
				if ( ! empty( $fourth_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $fourth_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive columns-4 clear">
					<?php
					$fourth_posts_category = get_theme_mod( 'fourth_posts_category', '0' );
					$fourth_posts_count    = apply_filters( 'fourth_posts_count', 4 );
				
					$query = new WP_Query( templateBlogGetPosts($fourth_posts_category, $fourth_posts_count) );
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

	if ( get_theme_mod( 'fifth_posts_section_show', false ) ): ?>
		<section id="fifth-posts-section">
			<div class="container">
				<?php
				$fifth_section_title = get_theme_mod('fifth_section_title', 'fifth');
				if ( ! empty( $fifth_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $fifth_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive grid columns-4 clear">
					<?php
					$fifth_posts_category = get_theme_mod( 'fifth_posts_category', '0' );
					$fifth_posts_count    = apply_filters( 'fifth_posts_count', 10 );
				
					$query = new WP_Query( templateBlogGetPosts($fifth_posts_category, $fifth_posts_count) );
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

	if ( get_theme_mod( 'sixth_posts_section_show', false ) ): ?>
		<section id="sixth-posts-section">
			<div class="container">
				<?php
				$sixth_section_title = get_theme_mod('sixth_section_title', 'sixth');
				if ( ! empty( $sixth_section_title ) ) { ?>
					<div class="section-title">
						<h2><?php echo $sixth_section_title; ?></h2>
					</div><!-- .section-title -->
				<?php } ?>

				<div class="blog-archive grid columns-4 clear">
					<?php
					$sixth_posts_category = get_theme_mod( 'sixth_posts_category', '0' );
					$sixth_posts_count    = apply_filters( 'sixth_posts_count', 8 );
				
					$query = new WP_Query( templateBlogGetPosts($sixth_posts_category, $sixth_posts_count) );
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
