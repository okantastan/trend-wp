<?php
/**
 * Template Name: Ana Sayfa
 */

get_header(); ?>

    <section id="banners-section" class="content-area col-sm-12 col-md-12 col-lg-12">
        <div class="row ml-1 mb-4">

            <?php
            $query = new WP_Query('post_type=brands&posts_per_page=12');
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
            $image = wp_get_attachment_url( get_post_thumbnail_id());
            ?>
            <div class="col-md-1 col-3">
                <div class="brand">
                    <a href="<?php the_field('brand_link'); ?>">
                        <img src="<?php echo $image; ?>" class="rounded-circle img-fluid brand-logo-img">
                        
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </section>


	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-9">
		<div id="main" class="site-main" role="main">

            <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-trendwp', get_post_format() );

			endwhile;
            ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
