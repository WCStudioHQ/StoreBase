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
            <div class="d-sm-flex align-items-center justify-content-between w-100" style="height: 100vh;">
                <div class="col-md-4 mx-auto mb-4 mb-sm-0 headline">
                    <span class="text-secondary text-uppercase">Subheadline</span>
                    <h1 class="display-4 my-4 font-weight-bold">Enter Your <span style="color: #9B5DE5;">Headline Here</span></h1>
                    <a href="#" class="btn px-5 py-3 text-white mt-3 mt-sm-0" style="border-radius: 30px; background-color: #9B5DE5;">Get Started</a>
                </div>
                <!-- in mobile remove the clippath -->
                <div class="col-md-8 h-100 clipped" style="min-height: 350px; background-image: url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80); background-position: center; background-size: cover;">

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
                        <ul class="flat-filter style-1 text-center max-width-682 clearfix">
                            <li class="active"><a href="#" data-filter="*">All Product</a></li>
                            <li><a href="#" data-filter=".kid">Clothing</a></li>
                            <li><a href="#" data-filter=".man">Shoes</a></li>
                            <li><a href="#" data-filter=".woman">Bags</a></li>
                            <li><a href="#" data-filter=".accessories">Accessories</a></li>
                        </ul>
                        <div class="divider h40"></div>
                        <div class="product-content product-fourcolumn clearfix">
                            <ul class="product style2 isotope-product clearfix">
                                <li class="product-item kid woman">
                                    <div class="product-thumb clearfix">
                                        <a href="#">
                                            <img src="images/shop/sh-4/1.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$19.00</span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list width-14">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item man accessories">
                                    <div class="product-thumb clearfix">
                                        <a href="#">
                                            <img src="images/shop/sh-4/2.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$10.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item kid woman">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/3.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$20.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item man accessories">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/4.jpg" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <del>
                                                <span class="regular">$90.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">$60.00</span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list width-14">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item kid woman">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/5.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$139.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item man accessories">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/6.jpg" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <del>
                                                <span class="regular">$150.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">$120.00</span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list width-14">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item kid woman">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/7.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$110.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item man accessories">
                                    <div class="product-thumb clearfix">
                                        <a href="#" class="product-thumb">
                                            <img src="images/shop/sh-4/8.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$90.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
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
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#">
                                            <img src="images/shop/sh-5/1.jpg" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Faux shearling aviator<br > jacket</span>
                                        <div class="price">
                                            <del>
                                                <span class="regular">$130.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">$100.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#">
                                            <img src="images/shop/sh-5/2.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton White Underweaer Block Out Edition</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$100.00</span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#">
                                            <img src="images/shop/sh-5/3.jpg" alt="image">
                                        </a>
                                        <span class="new">New</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Hood wool blend duffle<br > coat</span>
                                        <div class="price">
                                            <ins>
                                                <span class="amount">$130.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#">
                                            <img src="images/shop/sh-5/4.jpg" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Slim-fit patterned suit<br > blazer</span>
                                        <div class="price">
                                            <del>
                                                <span class="regular">$170.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">$139.00</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
                                <li class="product-item">
                                    <div class="product-thumb clearfix">
                                        <a href="#">
                                            <img src="images/shop/sh-5/5.jpg" alt="image">
                                        </a>
                                        <span class="new sale">Sale</span>
                                    </div>
                                    <div class="product-info clearfix">
                                        <span class="product-title">Cotton cashmereblend<br > cardigan</span>
                                        <div class="price">
                                            <del>
                                                <span class="regular">$130.00</span>
                                            </del>
                                            <ins>
                                                <span class="amount">$100.00</span>
                                            </ins>
                                        </div>
                                        <ul class="flat-color-list">
                                            <li>
                                                <a href="#" class="red"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="blue"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="black"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="#">ADD TO CART</a>
                                    </div>
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                </li>
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
                            <div class="inner no-margin  flat-content-box " data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
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
                            <div class="flat-new-latest post-wrap flat-carousel-box style4 data-effect clearfix" data-auto="false" data-column="3" data-column2="2" data-column3="1" data-gap="30" >
                                <div class="owl-carousel owl-theme">
                                    <article class="post clearfix">
                                        <div class="featured-post data-effect-item">
                                            <img src="images/blog/new-lastest-4-370x280.jpg" alt="image">
                                            <div class="overlay-effect bg-overlay-black opacity02"></div>
                                        </div>
                                        <div class="content-post">
                                            <ul class="meta-post">
                                                <li class="date">
                                                    Oct 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#"> By Admin</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">The Most Classic, Unexpected, and Hottest Tech Gifts of 2018</a></h2>
                                            </div><!-- /.title-post -->
                                            <div class="entry-post">
                                                <div class="more-link">
                                                    <a href="blog-detail.html">Continue Reading </a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                    </article><!-- /.post -->
                                    <article class="post clearfix ">
                                        <div class="featured-post data-effect-item">
                                            <img src="images/blog/new-lastest-5-370x280.jpg" alt="image">
                                            <div class="overlay-effect bg-overlay-black opacity02"></div>
                                        </div>
                                        <div class="content-post">
                                            <ul class="meta-post">
                                                <li class="date">
                                                    Oct 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#"> By Admin</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">Elizabeth Sulcer Is the Woman Behind Your Favorite Street Style Looks</a></h2>
                                            </div><!-- /.title-post -->
                                            <div class="entry-post">
                                                <div class="more-link">
                                                    <a href="blog-detail.html">Continue Reading </a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                    </article><!-- /.post -->
                                    <article class="post clearfix">
                                        <div class="featured-post data-effect-item">
                                            <img src="images/blog/new-lastest-6-370x280.jpg" alt="image">
                                            <div class="overlay-effect bg-overlay-black opacity02"></div>
                                        </div>
                                        <div class="content-post">
                                            <ul class="meta-post">
                                                <li class="date">
                                                    Oct 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#"> By Admin</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">The Victoria's Secret x Balmain Collabo- ration Is Everything You Wanted It To Be</a></h2>
                                            </div><!-- /.title-post -->
                                            <div class="entry-post">
                                                <div class="more-link">
                                                    <a href="blog-detail.html">Continue Reading </a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                    </article><!-- /.post -->
                                    <article class="post clearfix">
                                        <div class="featured-post data-effect-item">
                                            <img src="images/blog/new-lastest-4-370x280.jpg" alt="image">
                                            <div class="overlay-effect bg-overlay-black opacity02"></div>
                                        </div>
                                        <div class="content-post">
                                            <ul class="meta-post">
                                                <li class="date">
                                                    Oct 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#"> By Admin</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">The Most Classic, Unexpected, and Hottest Tech Gifts of 2018</a></h2>
                                            </div><!-- /.title-post -->
                                            <div class="entry-post">
                                                <div class="more-link">
                                                    <a href="blog-detail.html">Continue Reading </a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                    </article><!-- /.post -->
                                    <article class="post clearfix">
                                        <div class="featured-post data-effect-item">
                                            <img src="images/blog/new-lastest-5-370x280.jpg" alt="image">
                                            <div class="overlay-effect bg-overlay-black opacity02"></div>
                                        </div>
                                        <div class="content-post">
                                            <ul class="meta-post">
                                                <li class="date">
                                                    Oct 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#"> By Admin</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">Elizabeth Sulcer Is the Woman Behind Your Favorite Street Style Looks</a></h2>
                                            </div><!-- /.title-post -->
                                            <div class="entry-post">
                                                <div class="more-link">
                                                    <a href="blog-detail.html">Continue Reading </a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                    </article><!-- /.post -->
                                    <article class="post clearfix">
                                        <div class="featured-post data-effect-item">
                                            <img src="images/blog/new-lastest-6-370x280.jpg" alt="image">
                                            <div class="overlay-effect bg-overlay-black opacity02"></div>
                                        </div>
                                        <div class="content-post">
                                            <ul class="meta-post">
                                                <li class="date">
                                                    Oct 08, 2018
                                                </li>
                                                <li class="author">
                                                    <a href="#"> By Admin</a>
                                                </li>
                                            </ul><!-- /.meta-post -->
                                            <div class="title-post">
                                                <h2><a href="blog-detail.html">The Victoria's Secret x Balmain Collabo- ration Is Everything You Wanted It To Be</a></h2>
                                            </div><!-- /.title-post -->
                                            <div class="entry-post">
                                                <div class="more-link">
                                                    <a href="blog-detail.html">Continue Reading </a>
                                                </div>
                                            </div>
                                        </div><!-- /.content-post -->
                                    </article><!-- /.post -->
                                </div><!-- /.owl-carousel -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END NEW LATEST -->
        <section class="flat-row mail-chimp">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text">
                            <h3>Sign up for Send Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="subscribe clearfix">
                            <form action="#" method="post" accept-charset="utf-8" id="subscribe-form">
                                <div class="subscribe-content">
                                    <div class="input">
                                        <input type="email" name="subscribe-email" placeholder="Your Email">
                                    </div>
                                    <div class="button">
                                        <button type="button">SUBCRIBE</button>
                                    </div>
                                </div>
                            </form>
                            <ul class="flat-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul><!-- /.flat-social -->
                        </div><!-- /.subscribe -->
                    </div>
                </div>
            </div>
        </section><!-- /.mail-chimp -->

    </div>

<?php
get_footer();
