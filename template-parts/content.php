<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

?>
<article <?php post_class(); ?>>
    <h1 class="title">
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h1>
    <div class="post-thumbnail">
        <?php
        if( has_post_thumbnail() ):
            the_post_thumbnail( 'ancommerce-blog', array( 'class' => 'img-fluid') );
        endif;
        ?>
    </div>
    <div class="meta">
        <p>
            <?php esc_html_e( 'Published by', 'ancommerce' ); ?> <?php the_author_posts_link(); ?>
            <?php esc_html_e( 'on', 'ancommerce' ) ?> <a href="<?php the_permalink() ?>"><?php echo esc_html( get_the_date() ); ?></a>
            <br />
            <?php if( has_category() ): ?>
            <?php esc_html_e( 'Categories', 'ancommerce' ) ?>: <span><?php the_category( ' ' ); ?><br/>
            <?php endif; ?>
                <?php if( has_tag() ): ?>
                    <?php esc_html_e( 'Tags', 'ancommerce' ) ?>: <span><?php the_tags( '', ', '); ?></span>
                <?php endif; ?>
        </p>
    </div>
    <?php if( has_excerpt() ): ?>
        <div class="content"><?php the_excerpt(); ?></div>
    <?php elseif( strpos( $post->post_content, '<!--more-->' ) ): ?>
        <div class="content"><?php the_content( 'More' ); ?></div>
    <?php else: ?>
        <div class="content"><?php the_excerpt(); ?></div>
    <?php endif; ?>
</article>