<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package StoreBase
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function storebase_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 3,
				'min_columns'     => 3,
				'max_columns'     => 5,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'storebase_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function storebase_woocommerce_scripts() {
	wp_enqueue_style( 'storebase-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), _S_VERSION );
	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'storebase-woocommerce-style', $inline_font );
    if (is_product()) {
        wp_enqueue_script('wc-add-to-cart-variation');
    }
}
add_action( 'wp_enqueue_scripts', 'storebase_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function storebase_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active header_sticky header-style-1 topbar-style-1 has-menu-extra';

	return $classes;
}
add_filter( 'body_class', 'storebase_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function storebase_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'storebase_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'storebase_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function storebase_woocommerce_wrapper_before() {
		?>
        <!-- PRODUCT -->
        <section class="flat-row main-shop style1">
        <div class="container">
        <div class="row">
         <div class="col-md-12">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'storebase_woocommerce_wrapper_before' );

if ( ! function_exists( 'storebase_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function storebase_woocommerce_wrapper_after() {
		?>
        </div>
        </div>
        </div>
        </section>
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'storebase_woocommerce_wrapper_after' );

/**
 * Remove the breadcrumbs for woocommerce shop page
 */

if(!function_exists('storebase_remove_woocommerce_action')){
function storebase_remove_woocommerce_action() {
    if ( is_shop()) {
        remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
        remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
        remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
        remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
    }
}
}
add_action( 'woocommerce_before_main_content', 'storebase_remove_woocommerce_action' );

/**
 * @snippet       Remove shop page title - WooCommerce Shop
 * @compatible    WooCommerce
 */
add_filter( 'woocommerce_show_page_title', '__return_null' );

/**
 * add custom filter in shop page for woocommerce
 * @param $quer
 */
if(!function_exists('storebase_custom_filter')) {
    function storebase_custom_filter() {
        if (is_shop()) {
            echo '<div class="shop-filters-container d-flex flex-wrap justify-content-between align-items-center my-2 py-2">';
            do_action('storebase_before_shop_filters');
            echo '<div class="result-count-container col-12 col-md-6 mb-2 mb-md-0">';
            woocommerce_result_count();
            echo '</div>';
            echo '<div class="catalog-ordering-container col-12 col-md-6 text-md-end">';
            woocommerce_catalog_ordering();
            echo '</div>';
            do_action('storebase_after_shop_filters');
            echo '</div>';
        }
    }
}
add_action('woocommerce_before_shop_loop', 'storebase_custom_filter', 10);

/**
 * Add container before shop loop
 */
function storebase_add_container_before_shop_loop() {
    $columns = wc_get_loop_prop( 'columns' );
    // Use NumberFormatter to convert the number to a word
    $formatter = new NumberFormatter('en', NumberFormatter::SPELLOUT);
    $column_word = $formatter->format($columns);
    echo '<div class="product-content product-' . esc_attr($column_word) . 'column clearfix">';
}
add_action('woocommerce_before_shop_loop', 'storebase_add_container_before_shop_loop', 15);
/**
 * Add container after shop loop
 */
function storebase_add_container_after_shop_loop() {
    echo '</div>';
}
add_action('woocommerce_after_shop_loop', 'storebase_add_container_after_shop_loop', 5);

/**
 * add custom pagination in shop page for woocommerce
 */

if(!function_exists('storebase_custom_pagination')) {
    function storebase_custom_pagination() {

        if (is_shop()){

                $total_pages = wc_get_loop_prop('total_pages');
                $current_page = wc_get_loop_prop('current_page');
                $base = esc_url_raw(str_replace(999999999, '%#%', remove_query_arg('add-to-cart', get_pagenum_link(999999999, false))));
                $format = '';
            if ($total_pages > 1) {
                echo '<div class="woocommerce-pagination product-pagination text-center margin-top-11 clearfix" aria-label="' . esc_attr__('Product Pagination', 'storebase') . '">';

                // Generate pagination links
                $pagination_links = paginate_links(
                    apply_filters(
                        'woocommerce_pagination_args',
                        array(
                            'base' => $base,
                            'format' => $format,
                            'add_args' => false,
                            'current' => max(1, $current_page),
                            'total' => $total_pages,
                            'prev_text' => is_rtl() ? '<i class="fa fa-angle-left"></i>' : '<i class="fa fa-angle-left"></i>',
                            'next_text' => is_rtl() ? '<i class="fa fa-angle-right"></i>' : '<i class="fa fa-angle-right"></i>',
                            'type' => 'array',

                        )
                    )
                );

                if (!empty($pagination_links)) {
                    echo '<ul class="flat-pagination">';
                    foreach ($pagination_links as $link) {
                        if (strpos($link, 'current') !== false) {
                            echo '<li class="active">' . $link . '</li>';
                        } else {
                            echo '<li>' . $link . '</li>';
                        }
                    }
                    echo '</ul>';
                }

                echo '</div>';
            }

        }
    }

}

 add_action('woocommerce_after_shop_loop', 'storebase_custom_pagination', 10);

if ( ! function_exists( 'storebase_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function storebase_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		storebase_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'storebase_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'storebase_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function storebase_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storebase' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storebase' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'storebase_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function storebase_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php storebase_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
    add_action( 'get_header', function() {
        if ( is_shop() ) {
            remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
        }
    });

   /*#### Start Single Product Page Hooks #####*/

    /*
     * Customize Product Tabs
     * @param array $tabs
     * @return array $tabs
     */
    function storebase_customize_product_tabs( $tabs ) {
        if ( isset( $tabs['description'] ) ) {
            $tabs['description']['callback'] = 'custom_description_tab_content';
        }

        if ( isset( $tabs['additional_information'] ) ) {
            $tabs['additional_information']['callback'] = 'custom_additional_information_tab_content';
        }

        if ( isset( $tabs['reviews'] ) ) {
            $tabs['reviews']['callback'] = 'custom_reviews_tab_content';
        }

        return $tabs;
    }
    add_filter( 'woocommerce_product_tabs', 'storebase_customize_product_tabs', 98 );
    /*
     * Customize Product Tabs Content
     * @return void
     * @since 1.0.0
     */
    function custom_description_tab_content ()
    {
        ob_start();
        ?>
        <div class="p-4">
            <?php the_content();?>
        </div>
        <?php
        echo ob_get_clean();
    }
    /*
     * Customize Product Tabs Content
     * @return void
     * @since 1.0.0
     */
    function custom_additional_information_tab_content() {
        global $product;

        if ( ! $product ) {
            return;
        }
        $weight = $product->get_weight() ? $product->get_weight() . ' kg' : 'N/A';
        $dimensions = $product->get_dimensions() ? $product->get_dimensions() . ' cm' : 'N/A';
        $material = $product->get_meta( 'material' ) ?: 'Not specified';
        $sizes = $product->get_meta( 'sizes' ) ?: 'One Size';
        ob_start();
        ?>
        <div class="inner max-width-40 p-4">
            <table>
                <tr>
                    <td><?php esc_html_e('Weight','storebase'); ?></td>
                    <td><?php echo esc_html( $weight ); ?></td>
                </tr>
                <tr>
                    <td><?php esc_html_e('Dimensions','storebase'); ?></td>
                    <td><?php echo esc_html( $dimensions ); ?></td>
                </tr>
                <tr>
                    <td><?php esc_html_e('Materials','storebase'); ?></td>

                    <td><?php echo esc_html( $material ); ?></td>
                </tr>
                <tr>
                    <td><?php esc_html_e('Size','storebase'); ?></td>
                    <td><?php echo esc_html( $sizes ); ?></td>
                </tr>
            </table>
        </div>
        <?php
        echo ob_get_clean();
    }

    /*
     * Customize Product Tabs Content
     * @return void
     * @since 1.0.0
     */
    function custom_reviews_tab_content (){
        ob_start();
        ?>
      <div class="p-4">
          <?php comments_template(); ?>
      </div>
        <?php
        echo ob_get_clean();

    }

    /*#### End Single Product Page Hooks #####*/




}
