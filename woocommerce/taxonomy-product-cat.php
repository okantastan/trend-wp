<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header( 'pc' ); ?>



<!-- KATEGORI MENÜ BAŞI -->
<!--<div class="minibou-categories">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="categories-nav swiper-container">
					<div class="swiper-wrapper">
						<?php 
						$terms = get_terms('product_cat');

       					foreach ($terms as $term) {
         				  $term_link =  get_term_link( $term, 'product_cat' );
                          echo '<div class="swiper-slide draggable"><a href="' . $term_link . '">' . $term->name . '</a></div>';
       					}
						
						?>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>-->
<!-- KATEGORI MENÜ SONU -->


<!-- BREADCRUMB BAŞI -->
<div class="minibou-breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-12 d-flex">
				<ul class="breadcrumb breadcrumb-skin">
					<li><a href="<?php echo get_home_url(); ?>"><i class="fa fa-home fa-lg"></i></a></li>
					<!--<li><a href="#">Ev Yaşam</a></li>
					<li><a href="#">Mobilya</a></li>-->
					<li class="active"><?php woocommerce_page_title(); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- BREADCRUMB SONU -->



<!-- KATEGORI LİSTE BAŞI -->
<div class="minibou-category-list">
	<div class="container home-categories">
		
		<div class="row">
			<div class="col-12">
				<h1 class="product-list-title"><?php woocommerce_page_title(); ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="ast-woocommerce-container" style="width: 100%;margin-top: -100px;">
				<?php
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				if($term->parent !== 0): ?>
					<!-- //dynamic_sidebar('astra-woo-product-off-canvas-sidebar');
					//do_shortcode('[woocommerce_product_filter]'); -->
					<button class="button astra-shop-filter-button" data-selector="astra-off-canvas-sidebar-wrapper"><span class="astra-woo-filter-icon"></span><span class="astra-woo-filter-text">Filter</span></button>
				<?php endif; ?>

				<form class="woocommerce-ordering" method="get">
				<select name="orderby" class="orderby" aria-label="Sipariş">
								<option value="menu_order">Varsayılan Sıralama</option>
								<option value="popularity">En çok incelenene göre sırala</option>
								<option value="date" selected="selected">En yeniye göre sırala</option>
								<option value="price">Fiyata göre sırala: Düşükten yükseğe</option>
								<option value="price-desc">Fiyata göre sırala: Yüksekten düşüğe</option>
						</select>
				<input type="hidden" name="paged" value="1">
				</form>
			</div>
		</div>

		<div class="row no-gutters">
					
			
			
			<?php if($term->parent == 0){
				/*if ( is_product_category() ) {
					$term_id  = get_queried_object_id();
					$taxonomy = 'product_cat';
					$terms    = get_terms([
						'taxonomy'    => $taxonomy,
						'hide_empty'  => false,
						'parent'      => get_queried_object_id()
					]);
					$output = '<ul class="subcategories-list">';
					// Loop through product subcategories WP_Term Objects
					foreach ( $terms as $term ) {
						$term_link = get_term_link( $term, $taxonomy );
						$output .= '<li class="'. $term->slug .'"><a href="'. $term_link .'">'. $term->name .'</a></li>';
					}
					echo $output . '</ul>';
				}*/
				//set_query_var( 'slug', $term->slug );
				//get_template_part( 'template-parts/'.$term->slug );
				//get_template_part( 'template-parts/banners' );

				$term = get_queried_object();

				?>
				<!-- Desktop Line 1 -->
				<div class="col-12 col-sm-12 col-lg-8 mb-2">
					<a href="<?php echo get_field('banner_1_link', $term); ?>">
						<img src="<?php echo get_field('banner_1', $term); ?>" class="img-fluid">
					</a>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 mb-2">
					<a href="<?php echo get_field('banner_2_link', $term); ?>">
						<img src="<?php echo get_field('banner_2', $term); ?>" class="img-fluid">
					</a>
				</div>

				<!-- Desktop Line 2 -->
				<div class="col-6 col-sm-6 col-lg-4 mb-2">
					<a href="<?php echo get_field('banner_3_link', $term); ?>">
						<img src="<?php echo get_field('banner_3', $term); ?>" class="img-fluid">
					</a>
				</div>
				
				<div class="col-12 col-sm-12 col-lg-8 mb-2">
					<a href="<?php echo get_field('banner_4_link', $term); ?>">
						<img src="<?php echo get_field('banner_4', $term); ?>" class="img-fluid">
					</a>
				</div>
				
				<!-- Desktop Line3 -->
				<div class="col-12 col-sm-12 col-lg-8 mb-2">
					<a href="<?php echo get_field('banner_5_link', $term); ?>">
						<img src="<?php echo get_field('banner_5', $term); ?>" class="img-fluid">
					</a>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 mb-2">
					<a href="<?php echo get_field('banner_6_link', $term); ?>">
						<img src="<?php echo get_field('banner_6', $term); ?>" class="img-fluid">
					</a>
				</div>

				<!-- Desktop Line 5 -->
				<div class="col-6 col-sm-6 col-lg-12">

					<div class="row no-gutters">
						<div class="col-12 col-sm-12 col-lg-6 col-xl-6 mb-2">
							<a href="<?php echo get_field('banner_7_link', $term); ?>">
								<img src="<?php echo get_field('banner_7', $term); ?>" class="img-fluid">
							</a>
						</div>
						<div class="col-12 col-sm-12 col-lg-6 col-xl-6 mb-2">
							<a href="<?php echo get_field('banner_8_link', $term); ?>">
								<img src="<?php echo get_field('banner_8', $term); ?>" class="img-fluid">
							</a>
						</div>
					</div>

				</div>

				<!-- Desktop Line 6 -->
				<div class="col-12 col-sm-12 col-lg-12 mb-2">
					<a href="<?php echo get_field('banner_9_link', $term); ?>">
						<img src="<?php echo get_field('banner_9', $term); ?>" class="img-fluid">
					</a>
				</div>
				
				<!-- Desktop Line 7 -->
				<div class="col-12 col-sm-12 col-lg-12 mb-2">
					<a href="<?php echo get_field('banner_10_link', $term); ?>">
						<img src="<?php echo get_field('banner_10', $term); ?>" class="img-fluid">
					</a>
				</div>
				
				<!-- Desktop Line 8 -->
				<div class="col-12 col-sm-12 col-lg-12 mb-0">
					<a href="<?php echo get_field('banner_11_link', $term); ?>">
						<img src="<?php echo get_field('banner_11', $term); ?>" class="img-fluid">
					</a>
				</div>
				
			<?php
			}else{
				//ürünleri listele
				$args = array(
					'product_cat' => $term->name,
					'posts_per_page' => 100,
					'orderby' => 'rand'
				);
				$loop = new WP_Query($args);
				
				while ($loop->have_posts()) : $loop->the_post();
				$photo = wp_get_attachment_url( get_post_thumbnail_id());
				// print_r( get_the_category( get_the_ID() ) ); exit;
				global $product;
				?>
				<div class="col-6 col-sm-6 col-md-4 col-lg-3">
				<div class="product-items">
					<div class="product-image">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo $photo; ?>" class="img-fluid" style="height: 256px;object-fit: cover;">
							</a>
						</div>
						<div class="product-caption">
							<a href="<?php echo get_permalink($loop->post->ID) ?>">
								<h3 class="product-title"><?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>
							</h3></a>
							<a href=""><span class="product-brand">
							<?php //woocommerce_page_title(); ?>
							<?php
							$brands = wp_get_object_terms( get_the_ID(), 'pwb-brand', array( 'fields' => 'names' ) );
							foreach( $brands as $brand ){
								$brand_link = strtolower(str_replace(' ', '-', $brand));
								echo '<a href="'.site_url().'marka/'.$brand_link.'">'.$brand.'</a>';
							}
							?>
							</span></a>
						</div>
						<div class="product-price">
							<?php
							$regular_price = get_post_meta( get_the_ID(), '_regular_price', true );
							$sale_price = get_post_meta( get_the_ID(), '_sale_price', true );
							$stock = get_post_meta( get_the_ID(), '_stock', true );

							$product = wc_get_product( get_the_ID() );


							if( $product->is_type('variable') ):
								// Min variation price
								$regularPriceMin = $product->get_variation_regular_price(); // Min regular price
								$salePriceMin    = $product->get_variation_sale_price(); // Min sale price
								$priceMin        = $product->get_variation_price(); // Min price
							
								// Max variation price
								$regularPriceMax = $product->get_variation_regular_price('max'); // Max regular price
								$salePriceMax    = $product->get_variation_sale_price('max'); // Max sale price
								$priceMax        = $product->get_variation_price('max'); // Max price
							
								// Multi dimensional array of all variations prices 
								$variationsPrices = $product->get_variation_prices(); 
								
								$regularPrice = $salePrice = $price = '';
								$variationPrice = [
									'min' => $product->get_variation_price(),
									'max' => $product->get_variation_price('max')
								];
								if($regularPriceMin == $regularPriceMax):
									echo '<span class="new-price">'.wc_price($regularPriceMin).'</span>';
								else:
									echo '<span class="new-price">'.wc_price($regularPriceMin).'-'.wc_price($regularPriceMax).'</span>';
								endif;
							else:
								if(empty($sale_price)): ?>
									<span class="new-price"><?php echo wc_price( $regular_price ); ?></span>
								<?php else: ?>
									<span class="old-price"><?php echo wc_price( $regular_price ); ?></span>
									<span class="new-price"><?php echo wc_price( $sale_price ); ?></span>
									<?php
									$yuzde = 1 - ( $sale_price / $regular_price );
									$c = explode(".", $yuzde);
									$cc = $c[1];
									$discount = substr($cc,0,2);
									?>
									<span class="discount">%<?php echo $discount; ?> İNDİRİM</span>
								<?php endif; ?>
							<?php endif; ?>
							<?php if(empty($stock)) echo '<span style="color:red">Stokta yok</span>'; ?>

							
							

						</div>
						<!-- <div class="product-promotion">
							<div class="prmt-ctnr">
								<span class="prmt-discount">SEPETTE %20 İNDİRİM</span>
								<span class="prmt-price">₺67,14</span>
							</div>
						</div> -->
				</div>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			<?php } ?>
					
					
					
				
			
			

		</div>
	</div>
</div>	
<!-- KATEGORI LİSTE SONU -->


<!-- SEO BLOG BAŞI -->
<div class="minibou-blog">
	<div class="container">
		<div class="cat-blog-content">

			<article class="post" id="post-top">
				<div class="row">
					<div class="col-7 col-sm-7 col-md-8 col-lg-9 d-flex align-items-center flex-wrap">
						<div class="post-content">
							<div class="post-meta">
								<div class="meta-cats"><span><?php woocommerce_page_title(); ?></span></div>
							</div>
							<div class="post-content">
								<h2 class="post-title d-flex align-items-center flex-wrap">
									<a href="#"><?php woocommerce_page_title(); ?></a><span class="badge badge-pill badge-primary align-middle">KEŞFET</span>
								</h2>
								<!-- <p class="post-desc" align="">A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing or malware attack. The deceptive invitation to edit a Google Doc – the popular app used for writing and sharing files – appeared to be spreading rapidly, with a subject line stating a contact has shared a document on Google Docs with you”.</p> -->
								<?php
								$category_description = category_description( get_category_by_slug( $term->slug )->term_id );
								$short_category_description = mb_substr( $category_description, 0, '350', 'UTF-8' );
								//echo category_description( get_category_by_slug( $term->slug )->term_id );
								echo '<div id="kisaAciklama">'.$short_category_description.'...</div>';
								echo '<div id="tamamiAciklama" style="display:none;">'.$category_description.'</div>';
								?>
							</div>
						</div>
					</div>
					<!-- <div class="col-5 col-sm-5 col-md-4 col-lg-3">
						<div class="post-image">
							<a href=""><img src="<?php echo get_theme_file_uri( 'assets/images/a1.jpg' ); ?>" class="img-fluid"></a>
						</div>
					</div> -->
				</div>
			</article>

			<div class="more-blog-content">

				<article class="post">
					<div class="row">
						<div class="col-5 col-sm-5 col-md-4 col-lg-3">
							<div class="post-image">
								<a href=""><img src="<?php echo get_theme_file_uri( 'assets/images/a2.jpg' ); ?>" class="img-fluid"></a>
							</div>
						</div>
						<div class="col-7 col-sm-7 col-md-8 col-lg-9 d-flex align-items-center flex-wrap">
							<div class="post-content">
								<div class="post-meta">
									<div class="meta-cats"><span>EV & YAŞAM</span></div>
								</div>
								<div class="post-content">
									<h2 class="post-title d-flex align-items-center flex-wrap">
										<a href="">Şamdan & Mumluk: Romantik Eşlikçiler Edinin</a><span class="badge badge-pill badge-primary align-middle">KEŞFET</span>
									</h2>
									<p class="post-desc">A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing or malware attack. The deceptive invitation to edit a Google Doc – the popular app used for writing and sharing files – appeared to be spreading rapidly, with a subject line stating a contact has shared a document on Google Docs with you”.</p>
								</div>
							</div>
						</div>
						
					</div>
				</article>
				
				<article class="post">
					<div class="row">
						<div class="col-7 col-sm-7 col-md-8 col-lg-9 d-flex align-items-center flex-wrap">
							<div class="post-content">
								<div class="post-meta">
									<div class="meta-cats"><span>EV & YAŞAM</span></div>
								</div>
								<div class="post-content">
									<h2 class="post-title d-flex align-items-center flex-wrap">
										<a href="">Ayna: Daha Geniş Alanlar Yaratın</a><span class="badge badge-pill badge-primary align-middle">KEŞFET</span>
									</h2>
									<p class="post-desc">A Google Docs scam that appears to be widespread began landing in users’ inboxes on Wednesday in what seemed to be a sophisticated phishing or malware attack. The deceptive invitation to edit a Google Doc – the popular app used for writing and sharing files – appeared to be spreading rapidly, with a subject line stating a contact has shared a document on Google Docs with you”.</p>
								</div>
							</div>
						</div>
						<!-- <div class="col-5 col-sm-5 col-md-4 col-lg-3">
							<div class="post-image">
								<a href=""><img src="<?php echo get_theme_file_uri( 'assets/images/a3.jpg' ); ?>" class="img-fluid"></a>
							</div>
						</div> -->
					</div>
				</article>
			</div>
			
			<a class="moreless-button btn btn-sm w-100" href="javascript:;" id="devamAciklama"><i class="fa fa-chevron-down"></i> Daha Fazla Göster</a>
			<a class="moreless-button btn btn-sm w-100" href="javascript:;" id="gizleAciklama" style="display:none;"><i class="fa fa-chevron-up"></i> Daha Az Göster</a>
			
		</div>
	</div>
</div>

<!-- SEO BLOG SONU  -->

<?php get_footer( 'pc' ); ?>
<script>
jQuery(document).ready(function () {
 
 jQuery('#devamAciklama').on('click',function(){
	jQuery('#tamamiAciklama').show();
	jQuery('#kisaAciklama').hide();

	jQuery('#devamAciklama').hide();
	jQuery('#gizleAciklama').show();
 });

 jQuery('#gizleAciklama').on('click',function(){
	jQuery('#tamamiAciklama').hide();
	jQuery('#kisaAciklama').show();

	jQuery('#devamAciklama').show();
	jQuery('#gizleAciklama').hide();

	jQuery(window.document.body).scrollTop(10);
 });

});
</script>
