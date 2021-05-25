<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="banners">
        <?php
        $query = new WP_Query('post_type=main-banners');
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        $image = wp_get_attachment_url( get_post_thumbnail_id());
        ?>
        <div class="banner mb-4">
            <a href="<?php the_field('banner_link'); ?>">
                <img src="<?php echo $image; ?>" class="img-fluid">
                <span><?php the_title(); ?></span>
            </a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>


	</div><!-- .banners -->
</article><!-- #post-## -->
