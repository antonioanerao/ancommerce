<?php /* Template Name: Home Page */ get_header(); ?>

<style>
    <?php if(get_theme_mod('set_masterhead_image_url')): ?>
        header.masthead {
            background: url('<?php echo get_theme_mod('set_masterhead_image_url'); ?>') no-repeat center center;
        }
    <?php endif; ?>
</style>

<!-- Masthead -->
<?php if(get_theme_mod('set_masterhead_description')): ?>
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">
                        <?php
                            if(get_theme_mod('set_masterhead_description')) :
                                echo esc_html( get_theme_mod( 'set_masterhead_description') );
                            endif;
                        ?>
                    </h1>
                </div>
                <?php  if(get_theme_mod('set_masterhead_button_text')) : ?>
                <div class="col-md-6 col-lg-6 col-sm-12 mx-auto">
                    <?php if(get_theme_mod('set_masterhead_button_link')) : ?>
                    <a href="<?php echo  get_theme_mod( 'set_masterhead_button_link') ; ?>">
                    <?php endif; ?>
                        <button type="submit" class="btn btn-block btn-lg btn-primary">
                            <?php echo  get_theme_mod( 'set_masterhead_button_text') ; ?>
                        </button>
                    <?php if(get_theme_mod('set_masterhead_button_link')) : ?>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
<?php endif; ?>

<div class="_container">
    <div class="row">
        <div class="col-md-12">
<!--            <section class="templatehome-slide bg-light text-center">-->
<!--                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
<!--                    <ol class="carousel-indicators">-->
<!--                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
<!--                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
<!--                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
<!--                    </ol>-->
<!--                    <div class="carousel-inner">-->
<!---->
<!--                        <div class="carousel-item active">-->
<!--                            <img class="d-block w-100" src="https://s2.glbimg.com/K0sRV-Vom1YHshhY3MusTGNq-ws=/e.glbimg.com/og/ed/f/original/2021/09/23/plantas-medicinais.jpeg">-->
<!--                            <div class="carousel-caption d-none d-md-block d-sm-block">-->
<!--                                <h4>Title h5</h4>-->
<!--                                <h3>bla bla bla bla bla bla bla bla</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="carousel-item">-->
<!--                            <img class="d-block w-100" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/01/slide2-xbox.jpg" >-->
<!--                        </div>-->
<!---->
<!--                        <div class="carousel-item">-->
<!--                            <img class="d-block w-100" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/01/slide3-switch.jpg" alt="Third slide">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    -->
<!--                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
<!--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                        <span class="sr-only">Previous</span>-->
<!--                    </a>-->
<!--                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
<!--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                        <span class="sr-only">Next</span>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </section>-->

            <!-- Image Showcases -->
            <section class="showcase bg-light text-center">
                <div class="container-fluid p-0">
                    
                    <?php if(get_theme_mod('set_block_01_image_url')) : ?>
                        <div class="row no-gutters">
                            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo get_theme_mod('set_block_01_image_url', get_template_directory_uri() . '/assets/img/bg-showcase-1.jpg');?>')"></div>
                            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                <h2>
                                    <?php echo get_theme_mod('set_block_01_title', 'My cool block title 01'); ?>
                                </h2>
                                <p class="lead mb-0">
                                    <?php echo get_theme_mod('set_block_01_description', 'My cool block title description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quisquam unde voluptatibus? Pariatur, quis, temporibus! Ad animi aperiam aspernatur fuga odio quam repellendus. '); ?>
                                </p>
                                <?php if(get_theme_mod('set_block_01_link')) : ?>
                                    <br>
                                    <a href="<?php echo get_theme_mod('set_block_01_link'); ?>">
                                        <button type="button" class="btn btn-info">
                                            Mais Detalhes
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
	
	                <?php if(get_theme_mod('set_block_02_image_url')) : ?>
                        <div class="row no-gutters">
                            <div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo get_theme_mod('set_block_02_image_url', get_template_directory_uri() . '/assets/img/bg-showcase-2.jpg');?>')"></div>
                            <div class="col-lg-6 my-auto showcase-text">
                                <h2>
	                                <?php echo get_theme_mod('set_block_02_title', 'My cool block title 02'); ?>
                                </h2>
                                <p class="lead mb-0">
	                                <?php echo get_theme_mod('set_block_02_description', 'My cool block 02 title description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quisquam unde voluptatibus? Pariatur, quis, temporibus! Ad animi aperiam aspernatur fuga odio quam repellendus. '); ?>
                                </p>
                                <?php if(get_theme_mod('set_block_02_link')) : ?>
                                    <br>
                                    <a href="<?php echo get_theme_mod('set_block_02_link'); ?>">
                                        <button type="button" class="btn btn-info">
                                            Mais Detalhes
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
	
	                <?php if(get_theme_mod('set_block_03_image_url')) : ?>
                        <div class="row no-gutters">
                            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo get_theme_mod('set_block_03_image_url', get_template_directory_uri() . '/assets/img/bg-showcase-3.jpg');?>')"></div>
                            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                <h2>
					                <?php echo get_theme_mod('set_block_03_title', 'My cool block title 01'); ?>
                                </h2>
                                <p class="lead mb-0">
					                <?php echo get_theme_mod('set_block_03_description', 'My cool block title description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quisquam unde voluptatibus? Pariatur, quis, temporibus! Ad animi aperiam aspernatur fuga odio quam repellendus. '); ?>
                                </p>
                                <?php if(get_theme_mod('set_block_03_link')) : ?>
                                    <br>
                                    <a href="<?php echo get_theme_mod('set_block_03_link'); ?>">
                                        <button type="button" class="btn btn-info">
                                            Mais Detalhes
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
	                <?php endif; ?>
                </div>
            </section>

            <?php if(class_exists('WooCommerce' )) : ?>

                <section class="bg-light text-center">
                    <div class="container-fluid p-0">
                        <header class="bg-dark py-2">
                            <div class="container px-4 px-lg-5 my-5">
                                <div class="text-center text-white">
                                    <h1 class="display-4 fw-bolder">Last Products</h1>
                                </div>
                            </div>
                        </header>
                    </div>

                        <div class="container-fluid">
                            <div class="row mt-4 pl-3 pr-3">
                                <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                );

                                $loop = new WP_Query( $args );

                                while ( $loop->have_posts() ) : $loop->the_post(); global $product;
                                ?>
                                    <div class="col-sm-10 col-md-8 col-lg-4 offset-sm-1 offset-md-2 offset-lg-0 mt-4 mb-4">
                                        <div class="card">
                                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                                 data-mdb-ripple-color="light">
                                                <img width="100%" height="280" class="w-100"
                                                     src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                                </div>
                                            </div>

                                            <div class="card-body py-3 px-3">
                                                <h5 class="text-reset"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
                                                <p>
                                                    <?php echo get_the_excerpt(); ?>
                                                </p>
                                            </div>

                                            <div class="card-footer">
                                                <a href="<?php echo get_the_permalink(); ?>" class="btn btn-sm btn-info btn-icon btn-cart pull-right">
                                                    <i class="fa fa-eye"></i>
                                                    <span>See Product</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php  endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
