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
    <!-- Hero -->
    <div class="d-sm-flex align-items-center justify-content-between w-100 " style="height: 70vh;">
        <div class="col-md-4 mx-auto mb-4 mb-sm-0 headline">
            <span class="text-secondary text-uppercase">
                <?php echo esc_html( get_theme_mod( 'storebase_hero_subheadline', 'Subheadline' ) ); ?>
            </span>
            <h2 class="display-4 my-4 font-weight-bold" style="color: #9B5DE5;"><?php echo esc_html( get_theme_mod( 'storebase_hero_headline', 'Enter Your Headline Here' ) ); ?>
            </h2>
            <a href="<?php echo esc_url( get_theme_mod( 'storebase_hero_button_link', '#' ) ); ?>" class="btn px-5 py-3 text-white mt-3 mt-sm-0"
               style="border-radius: 30px; background-color: #9B5DE5;">
                <?php echo esc_html( get_theme_mod( 'storebase_hero_button_text', 'Get Started' ) ); ?>
            </a>
        </div>
        <!-- in mobile remove the clippath -->
        <div class="col-md-8 h-100 clipped"
             style="min-height: 350px;
                     background-image: url(<?php echo esc_url( get_theme_mod( 'storebase_hero_bg_image' ) ?: 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80' ); ?>);
                     background-position: center;
                     background-size: cover;">

        </div>
    </div>
    <!-- Hero -->
    <!-- PRODUCT -->
    <section class="flat-row row-product-project shop-collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section margin-bottom-41">
                        <h2 class="title">Shop Collection</h2>
                    </div>

                    <!-- Category Filters -->
                    <?php
                    $categories = get_terms([
                        'taxonomy' => 'product_cat',
                        'hide_empty' => true,
                    ]);
                    ?>
                    <ul class="flat-filter style-1 text-center max-width-682 clearfix">
                        <li class="active"><a href="#" data-filter="*">All Products</a></li>
                        <?php foreach ($categories as $category) : ?>
                            <li>
                                <a href="#"
                                   data-filter=".<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="divider h40"></div>

                    <!-- Product List -->
                    <div class="product-content product-fourcolumn clearfix">
                        <ul class="product style2 isotope-product clearfix">
                            <?php
                            $args = [
                                'post_type' => 'product',
                                'posts_per_page' => -1,
                            ];
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
                                    global $product;
                                    $product_categories = get_the_terms($product->get_id(), 'product_cat');
                                    $category_classes = '';
                                    if ($product_categories) {
                                        foreach ($product_categories as $cat) {
                                            $category_classes .= $cat->slug . ' ';
                                        }
                                    }
                                    ?>
                                    <li class="product-item <?php echo esc_attr(trim($category_classes)); ?>">
                                        <div class="product-thumb clearfix">
                                            <?php
                                            $product_id = $product->get_id();
                                            $image_id = get_post_thumbnail_id($product_id);
                                            $image_url = wp_get_attachment_image_url($image_id, 'full');
                                            ?>
                                            <a href="#">
                                                <?php
                                                if ($image_url) {
                                                    echo '<img class=" p-3" src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title($product_id)) . '">';
                                                } else {
                                                    $fallback_image_url = get_theme_file_uri('/assets/images/shop/sh-3/1.jpg');
                                                    echo '<img src="' . esc_url($fallback_image_url) . '" alt="No image available">';
                                                }
                                                ?>
                                            </a>
                                            <span class="new">New</span>
                                        </div>
                                        <div class="product-info clearfix mt-2">
                                <span class="product-title">
                                    <?php esc_html(the_title()); ?>
                                </span>
                                            <div class="price">
                                                <ins>
                                        <span class="amount">
                                            <?php echo $product->get_price_html(); ?></span>
                                                </ins>
                                            </div>
                                        </div>
                                        <div class="add-to-cart text-center">
                                            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>">Add To
                                                Cart</a>
                                        </div>
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                    </li>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                ?>
                                <p>No products found</p>
                            <?php endif; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END PRODUCT -->
    <!-- PRODUCT NEW -->
    <section class="flat-row row-best-sale">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section margin-bottom-43">
                        <h2 class="title">
                            Best Sale
                        </h2>
                    </div>
                    <div class="product-content product-fivecolumn clearfix">
                        <ul class="product style3">
                            <?php
                            // Define the category slug (change 'your-category-slug' to the desired category slug)
                            $category_slug = 'best-sell';

                            $args = array(
                                'posts_per_page' => 5,
                                'orderby' => 'meta_value_num',
                                'order' => 'DESC',
                                'meta_key' => 'total_sales',
                                'post_type' => 'product',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field' => 'slug',
                                        'terms' => $category_slug,
                                        'operator' => 'IN',
                                    ),
                                ),
                            );

                            $best_selling_query = new WP_Query($args);
                            if ($best_selling_query->have_posts()) :
                                while ($best_selling_query->have_posts()) : $best_selling_query->the_post();
                                    global $product;
                                    ?>
                                    <li class="product-item">
                                        <div class="product-thumb clearfix">
                                            <a href="<?php echo esc_url(get_permalink($product->get_id())); ?>">
                                                <?php
                                                echo $product->get_image();
                                                ?>
                                            </a>
                                            <span class="new sale">Sale</span>
                                        </div>
                                        <div class="product-info clearfix">
                                            <span class="product-title"><?php the_title(); ?></span>
                                            <div class="price">
                                                <del>
                                                    <span class="regular"><?php echo wc_price($product->get_regular_price()); ?></span>
                                                </del>
                                                <ins>
                                                    <span class="amount"><?php echo wc_price($product->get_sale_price()); ?></span>
                                                </ins>
                                            </div>
                                        </div>
                                        <div class="add-to-cart text-center">
                                            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                                               class="button add_to_cart_button">ADD TO CART</a>
                                        </div>
                                        <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                    </li>
                                <?php
                                endwhile;
                            else :
                                echo '<p>No best-selling products found in the "best-sell" category.</p>';
                            endif;
                            wp_reset_postdata();
                            ?>

                        </ul><!-- /.product -->
                    </div><!-- /.product-content -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- END PRODUCT NEW -->
    <!-- ICON BOX -->
    <section class="flat-row row-icon-box style-1 bg-section bg-color-f5f">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="flat-icon-box icon-left w55 circle bg-white style-1 clearfix">
                        <div class="inner no-margin  flat-content-box " data-margin="0 0 0 0"
                             data-mobilemargin="0 0 0 0">
                            <div class="icon-wrap">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading letter-spacing--1"><a href="#">Free Shipping</a></h5>
                                <p class="desc">Apply order over $99</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="flat-icon-box icon-left w55 circle bg-white style-1 clearfix">
                        <div class="inner flat-content-box" data-margin="0 0 0 7px" data-mobilemargin="0 0 0 0">
                            <div class="icon-wrap">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading letter-spacing--1"><a href="#">Cash On Delivery</a></h5>
                                <p class="desc">Internet Trend To Repeat</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="flat-icon-box icon-left w55 circle bg-white style-1 clearfix">
                        <div class="inner flat-content-box" data-margin="0 0 0 46px" data-mobilemargin="0 0 0 0">
                            <div class="icon-wrap">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading letter-spacing--1"><a href="#">Gift For All</a></h5>
                                <p class="desc">Gift When Subscribe</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3">
                    <div class="flat-icon-box icon-left w55 circle bg-white style-1 clearfix">
                        <div class="inner flat-content-box" data-margin="0 0 0 62px" data-mobilemargin="0 0 0 0">
                            <div class="icon-wrap">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="text-wrap">
                                <h5 class="heading letter-spacing--1"><a href="#">Opening All Week</a></h5>
                                <p class="desc">6.00 am - 17.00pm</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
            </div>
        </div>
    </section>
    <!-- END ICON BOX -->
    <!-- NEW LATEST -->
    <section class="flat-row row-new-latest style-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section margin-bottom-51">
                        <h2 class="title">New Latest</h2>
                    </div>
                    <div class="new-latest-wrap">
                        <div class="flat-new-latest post-wrap flat-carousel-box style4 data-effect clearfix"
                             data-auto="false" data-column="3" data-column2="2" data-column3="1" data-gap="30">
                            <div class="owl-carousel owl-theme">
                                <?php
                                $args = array(
                                        'post_type'      => 'post',
                                        'posts_per_page' => 6,
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) :
                                        while ($query->have_posts()) : $query->the_post(); ?>
                                            <article class="post clearfix">
                                                <div class="featured-post data-effect-item">
                                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                                    <div class="overlay-effect bg-overlay-black opacity02"></div>
                                                </div>
                                                <div class="content-post">
                                                    <ul class="meta-post">
                                                        <li class="date">
                                                            <?php echo get_the_date(); ?>
                                                        </li>
                                                        <li class="author">
                                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                                By <?php the_author(); ?>
                                                            </a>
                                                        </li>
                                                    </ul><!-- /.meta-post -->
                                                    <div class="title-post">
                                                        <h2>
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h2>
                                                    </div><!-- /.title-post -->
                                                    <div class="entry-post">
                                                        <div class="more-link">
                                                            <a href="<?php the_permalink(); ?>">Continue Reading</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.content-post -->
                                            </article><!-- /.post -->                                        <?php endwhile;
                                    else : ?>
                                        <p>No posts found!</p>
                                    <?php endif;
                                    wp_reset_postdata();
                                ?>
                            </div><!-- /.owl-carousel -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END NEW LATEST -->

<?php
get_footer();
