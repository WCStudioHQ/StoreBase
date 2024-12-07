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
<!--  NEWS LATER -->
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
<!--END NEWS LATER -->

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area 1 -->
            <div class="col-sm-6 col-md-3">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php else : ?>
                    <div class="widget widget-link">
                        <ul>
                            <li><a href="#"><?php esc_html_e('About Us','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Online Store','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Blog','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Contact Us','storebase');?></a></li>

                        </ul>
                    </div>
                <?php endif; ?>
            </div><!-- /.col-md-3 -->

            <!-- Footer Widget Area 2 -->
            <div class="col-sm-6 col-md-3">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php else : ?>
                    <div class="widget widget-link link-login">
                        <ul>
                            <li><a href="#"><?php esc_html_e('Login/ Register','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Your Cart','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Wishlist items','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Your checkout','storebase');?></a></li>

                        </ul>
                    </div>
                <?php endif; ?>
            </div><!-- /.col-md-3 -->

            <!-- Footer Widget Area 3 -->
            <div class="col-sm-6 col-md-3">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php else : ?>
                    <div class="widget widget-link link-faq">
                        <ul>
                            <li><a href="#"><?php esc_html_e('FAQs','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Term of service','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Privacy Policy','storebase');?></a></li>
                            <li><a href="#"><?php esc_html_e('Returns','storebase');?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div><!-- /.col-md-3 -->

            <!-- Footer Widget Area for Branding -->
            <div class="col-sm-6 col-md-3">
                <?php if ( is_active_sidebar( 'footer-brand' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-brand' ); ?>
                <?php else : ?>
                    <div class="widget widget-brand">
                        <div class="logo logo-footer">
                            <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo@2x.png" alt="image" width="107" height="24"></a>
                        </div>
                        <ul class="flat-contact">
                            <li class="address"><?php esc_html_e('112 Kingdom, NA 12, New York','storebase');?></li>
                            <li class="phone"><?php esc_html_e('+12 345 678 910','storebase');?></li>
                            <li class="email"><?php esc_html_e('infor.deercreative@gmail.com','storebase');?></li>
                        </ul><!-- /.flat-contact -->
                    </div>
                <?php endif; ?>
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
</div>

<?php wp_footer(); ?>

</body>
</html>
