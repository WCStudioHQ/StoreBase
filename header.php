<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StoreBase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body class="header_sticky header-style-1 topbar-style-1 has-menu-extra">
<!-- Preloader -->
<div id="loading-overlay">
    <div class="loader"></div>
</div>
<!-- Boxed -->
<div class="boxed">
    <div id="site-header-wrap">
        <!-- Header -->
        <header id="header" class="header header-container clearfix">
            <div class="container clearfix" id="site-header-inner">
                <div id="logo" class="logo float-left">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" width="107" height="24" data-retina="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" data-width="107" data-height="24">
                    </a>
                </div><!-- /.logo -->
                <div class="mobile-button"><span></span></div>
                <ul class="menu-extra">
                    <li class="box-search">
                        <a class="icon_search header-search-icon" href="#"></a>
                        <form role="search" method="get" class="header-search-form" action="#">
                            <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                            <button type="submit" class="header-search-submit" title="Search">Search</button>
                        </form>
                    </li>
                    <li class="box-login">
                        <?php if ( is_user_logged_in() ) : ?>
                            <a href="<?php echo esc_url( wc_get_account_endpoint_url('dashboard') ); ?>" class="icon_login">
                            </a>
                        <?php else : ?>
                            <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="icon_login">
                            </a>
                        <?php endif; ?>
                    </li>
                    <li class="box-cart nav-top-cart-wrapper">
                        <a class="icon_cart nav-cart-trigger active" href="<?php echo wc_get_cart_url(); ?>">
                            <span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                        </a>
                        <div class="nav-shop-cart">
                            <div class="widget_shopping_cart_content">
                                <div class="woocommerce-min-cart-wrap">
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget list-group">
                                        <?php if ( WC()->cart->is_empty() ) : ?>
                                            <li class="woocommerce-mini-cart-item mini_cart_item list-group-item text-center">
                                                <span>No items in your cart</span>
                                            </li>
                                        <?php else : ?>
                                            <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                                                $product = $cart_item['data'];
                                                ?>
                                                <li class="woocommerce-mini-cart-item mini_cart_item list-group-item">
                                                    <p class="m-0"><?php echo $product->get_name(); ?></p>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Product Image -->
                                                        <div class="cart-item-img me-2">
                                                            <?php echo $product->get_image( 'custom-size', array( 'class' => 'img-fluid', 'width' => 30, 'height' => 30 ) ); ?>
                                                        </div>
                                                        <!-- Product Info -->
                                                        <div class="cart-item-info d-flex p-3">
                                                            <small class="text-muted"><?php echo $cart_item['quantity']; ?></small>
                                                            <small class="text-muted">×</small>
                                                            <small class="text-muted"><?php echo wc_price( $product->get_price() ); ?></small>
                                                        </div>
                                                    </div>
                                                    <!-- Product Total -->
                                                    <div class="d-flex justify-content-between align-items-center p-3">
                                                        <span><?php esc_html_e('Item Total','storebase')?></span>
                                                        <span class="fw-bold text-end "><?php echo wc_price( $cart_item['line_total'] ); ?></span>

                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <li class="d-flex justify-content-between mt-2 p-3">
                                            <strong>Total:</strong>
                                            <span class="fw-bold "><?php echo WC()->cart->get_cart_total(); ?></span>
                                        </li>
                                    </ul>
                                </div><!-- /.widget_shopping_cart_content -->
                            </div>
                        </div><!-- /.nav-shop-cart -->
                    </li>
                </ul><!-- /.menu-extra -->
                <div class="nav-wrap">
                    <?php
                        wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'container_id' => 'mainnav',
                        'container_class' => 'mainnav',
                        'menu_class' => 'menu',
                        'walker' => new Custom_Walker_Nav_Menu(),
                        ));
                    ?>
                </div><!-- /.nav-wrap -->
            </div><!-- /.container-fluid -->
        </header><!-- /header -->
    </div><!-- /#site-header-wrap -->