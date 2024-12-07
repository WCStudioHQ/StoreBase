<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StoreBase
 */

?>
</div>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget widget-link">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Online Store</a></li>
                        <li><a href="blog-list.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-sm-6 col-md-3">
                <div class="widget widget-link link-login">
                    <ul>
                        <li><a href="#">Login/ Register</a></li>
                        <li><a href="#">Your Cart</a></li>
                        <li><a href="#">Wishlist items</a></li>
                        <li><a href="#">Your checkout</a></li>
                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-sm-6 col-md-3">
                <div class="widget widget-link link-faq">
                    <ul>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="#">Term of service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Returns</a></li>
                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-sm-6 col-md-3">
                <div class="widget widget-brand">
                    <div class="logo logo-footer">
                        <a href="index.html"><img src="images/logo@2x.png" alt="image" width="107" height="24"></a>
                    </div>
                    <ul class="flat-contact">
                        <li class="address">112 Kingdom, NA 12, New York</li>
                        <li class="phone">+12 345 678 910</li>
                        <li class="email">infor.deercreative@gmail.com</li>
                    </ul><!-- /.flat-contact -->
                </div><!-- /.widget -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.footer -->

<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright text-center">
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'storebase' ) ); ?>">
                        <?php
                        /* translators: %s: CMS name, i.e. WordPress. */
                        printf( esc_html__( 'Copyright @2025 powered by %s', 'storebase' ), 'WordPress' );
                        ?>
                    </a>
                    <span class="sep"> | </span>
                    <?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf( esc_html__( 'Theme: %1$s by %2$s.', 'storebase' ), 'storebase', '<a href="https://wcstudio.com">WC Studio</a>' );
                    ?>

                </p>
            </div>
        </div>
    </div>
</div>

<!-- Go Top -->
<a class="go-top">
    <i class="fa fa-chevron-up"></i>
</a>


<?php wp_footer(); ?>

</body>
</html>
