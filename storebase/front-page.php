<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StoreBase
 */

get_header();
?>
	<main id="primary" class="site-main">
		<!-- Hero -->
		<?php
		if ( have_posts() ) :
			do_action( 'before_storebase_homepage_hero_section' );
			do_action( 'storebase_homepage_hero_section' );
			do_action( 'after_storebase_homepage_hero_section' );
			?>
		<!-- Hero -->
		<!-- PRODUCT -->
			<?php
			do_action( 'before_storebase_homepage_product_category_section' );
			do_action( 'storebase_homepage_product_category_section' );
			do_action( 'after_storebase_homepage_product_category_section' );
			?>
		<!-- END PRODUCT -->
		<?php endif; ?>
	</main>


<?php
get_footer();
