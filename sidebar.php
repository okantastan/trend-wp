<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-3" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>

	<?php
	$query = new WP_Query('post_type=sidebar-banners');
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
	$image = wp_get_attachment_url( get_post_thumbnail_id());
	?>
	<div class="sidebar-banner mb-4">
		<a href="<?php the_field('banner_link'); ?>">
			<img src="<?php echo $image; ?>" class="img-fluid">
		</a>
	</div>
	<?php endwhile; ?>
    <?php endif; ?>
	
</aside><!-- #secondary -->
