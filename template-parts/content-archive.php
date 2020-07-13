<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ancommerce
 */

?>
<article>
    <div class="the-post">
        <h1 class="title">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h1>
        <div class="post-thumbnail">
            <?php
            if( has_post_thumbnail() ):
                the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid') );
            endif;
            ?>
        </div>
        <p>
            <?php esc_html_e( 'Published by', 'fancy-lab' ); ?> <?php the_author_posts_link(); ?>
            <?php esc_html_e( 'on', 'fancy-lab' ) ?> <a href="<?php the_permalink() ?>"><?php echo esc_html( get_the_date() ); ?></a>
            <br />
            <?php esc_html_e( 'Categories', 'fancy-lab' ) ?>: <span><?php the_category( ' ' ); ?>
        </p>
        <?php if( has_excerpt() ): ?>
            <div class="content"><?php the_excerpt(); ?></div>
        <?php elseif( strpos( $post->post_content, '<!--more-->' ) ): ?>
            <div class="content"><?php the_content( 'More' ); ?></div>
        <?php else: ?>
            <div class="content"><?php the_excerpt(); ?></div>
        <?php endif; ?>
    </div>
</article>