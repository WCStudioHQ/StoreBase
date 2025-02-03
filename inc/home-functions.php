<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'storebase_homepage_hero_section', 'storebase_home_hero_section' );
function storebase_home_hero_section() {
	$hero_content = '
    <div class="container">
        <div class="hero-main row d-sm-flex align-items-center justify-content-between w-100">
            <div class="col-md-4 mx-auto mb-4 mb-sm-0 pt-3 headline">
                <span class="text-secondary text-uppercase">
                    ' . esc_html( get_theme_mod( 'storebase_hero_subheadline', 'Subheadline' ) ) . '
                </span>
                <h2 class="display-4 my-4 font-weight-bold" style="color: #9B5DE5;">
                    ' . esc_html( get_theme_mod( 'storebase_hero_headline', 'Enter Your Headline Here' ) ) . '
                </h2>
                <a href="' . esc_url( get_theme_mod( 'storebase_hero_button_link', '#' ) ) . '"
                   class="btn px-5 py-3 text-white mt-3 mt-sm-0"
                   style="border-radius: 30px; background-color: #9B5DE5;">
                    ' . esc_html( get_theme_mod( 'storebase_hero_button_text', 'Get Started' ) ) . '
                </a>
            </div>
            <div class="col-md-8 h-100 clipped"></div>
        </div>
    </div>';
	echo apply_filters( 'storebase_home_hero_section_content', $hero_content );
}

add_action( 'storebase_homepage_product_category_section', 'storebase_homepage_product_cat_section' );

function storebase_homepage_product_cat_section() {
	?>
	<section class="flat-row row-product-project shop-collection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-section margin-bottom-41">
						<h2 class="title"><?php echo apply_filters( 'storebase_shop_collection_title', esc_html__( 'Shop Collection' ,'storebase') ); ?></h2>
					</div>
					<?php
					$categories = get_terms(
						array(
							'taxonomy'   => 'product_cat',
							'hide_empty' => true,
						)
					);
					do_action( 'storebase_before_product_categories', $categories );
					?>
					<ul class="flat-filter style-1 text-center max-width-682 clearfix">
						<li class="active"><a href="#" data-filter="*"><?php esc_html_e( 'All Products', 'storebase' ); ?></a></li>
						<?php foreach ( $categories as $category ) : ?>
							<li>
								<a href="#" data-filter=".<?php echo esc_attr( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
					<?php do_action( 'storebase_after_product_categories', $categories ); ?>

					<div class="divider h40"></div>

					<!-- Product List -->
					<div class="product-content product-fourcolumn clearfix">
						<ul class="product style2 isotope-product clearfix">
							<?php
							$args  = apply_filters(
								'storebase_product_query_args',
								array(
									'post_type'      => 'product',
									'posts_per_page' => -1,
								)
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) :
								while ( $query->have_posts() ) :
									$query->the_post();
									global $product;
									$product_categories = get_the_terms( $product->get_id(), 'product_cat' );
									$category_classes   = '';
									if ( $product_categories ) {
										foreach ( $product_categories as $cat ) {
											$category_classes .= $cat->slug . ' ';
										}
									}
									?>
									<li class="product-item <?php echo esc_attr( trim( $category_classes ) ); ?>">
										<div class="product-thumb clearfix">
											<?php
											$product_id = $product->get_id();
											$image_id   = get_post_thumbnail_id( $product_id );
											$image_url  = wp_get_attachment_image_url( $image_id, 'full' );
											?>
											<a href="<?php echo esc_url( get_permalink( $product_id ) ); ?>">
												<?php
												if ( $image_url ) {
													echo '<img class=" p-3" src="' . esc_url( $image_url ) . '" alt="' . esc_attr( get_the_title( $product_id ) ) . '">';
												} else {
													$fallback_image_url = get_theme_file_uri( '/assets/images/shop/sh-3/1.jpg' );
													echo '<img src="' . esc_url( $fallback_image_url ) . '" alt="No image available">';
												}
												?>
											</a>
										</div>
										<div class="product-info clearfix mt-2">
											<span class="product-title"><?php esc_html( the_title() ); ?></span>
											<div class="price">
												<ins>
													<span class="amount"><?php echo $product->get_price_html(); ?></span>
												</ins>
											</div>
										</div>
										<div class="add-to-cart text-center">
											<a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>"><?php esc_html_e( 'Add To Cart', 'storebase' ); ?></a>
										</div>
									</li>
									<?php
								endwhile;
								wp_reset_postdata();
							else :
								?>
								<p> <?php esc_html_e( '>No products found', 'storebase' ); ?> </p>
							<?php endif; ?>
						</ul>
					</div>
					<?php do_action( 'storebase_after_product_section' ); ?>
				</div>
			</div>
		</div>
	</section>
	<?php
}



