<div id="primary" class="content-area">
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="<?php if( is_active_sidebar( 'sidebar-post' ) ) { echo "col-md-12 col-lg-8"; } else { echo "offset-md-1 offset-lg-1 col-sm-12 col-md-10 col-lg-10"; } ?> mx-auto">

                    <!-- Post Content -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header>
                            <h1 class="text-center"><?php the_title(); ?></h1>
                            <div class="text-center">
                                <?php
                                    if(has_post_thumbnail()) :
                                        the_post_thumbnail('ancommerce-blog-single', ['class' => 'img-fluid img-thumbnail mt-1']);
                                    endif;
                                ?>
                            </div>
                        </header>
	                    <?php
                            the_content();
                            if(is_active_sidebar('pesquisar-post')) :
                                [dynamic_sidebar('pesquisar-post')];
                            endif;
                        ?>
                        <hr>
                        <p>
                            <b>Categorias: </b><?php the_category(', '); ?> <br>
		                    <?php the_tags('<b>Tags:</b> ', ', '); ?>
                        </p>
                        <hr>
                    </article>
                </div>
	            <?php get_sidebar('post'); ?>
            </div>
        </div>
    </div>
</div>