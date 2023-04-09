<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<?php if(!is_page_template( 'page-templates/meeting.php' ) ) : ?>


    <?php if(!is_page_template( 'page-templates/homepage.php' )) : ?>
        <!-- Top Footer -->
        <?php if ( is_active_sidebar( 'lh-top-footer-one' ) && is_active_sidebar( 'lh-top-footer-two' ) ) : ?>
            <div class="<?php echo esc_attr( $container ); ?> p-0">
                <?php get_template_part('template-parts/top-footer'); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php
        if(!is_page_template( 'page-templates/meeting.php' )) {
            get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); 
        }
    ?>


    <div class="pl-75 pr-75 sub-footer-section">
        <address class="text-center">
            <a class="" href="https://www.google.com/maps/dir//235+E+Main+St+%23105b,+Northville,+MI+48167/@42.4320279,-83.4800975,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8824ac3b016ba7c9:0xb138f896fe1a062a!2m2!1d-83.4779088!2d42.432024!3e0" target="_blank" rel="noopener">235 East Main Street, Suite 105B, Northville, MI 48167</a>
        </address>
        <p class="text-center text-black">
            <a href="mailto:info@loyaltyhealth.com">info@loyaltyhealth.com</a> | <a href="tel:800-411-6022">800.411.6022</a>
        </p>
    </div>



    <?php if ( is_active_sidebar( 'lh-bottom-footer-widget' ) || is_active_sidebar( 'lh-bottom-footer-social' ) ) : ?>

        <div class="<?php echo esc_attr( $container ); ?> p-0" id="bottom-footer">

        <div class="h-100 px-75 d-flex justify-content-center align-items-center" id="wrapper-footer">

            <div class="w-100">

                <div class="row">

                    <div class="col-12 p-0">

                        <footer class="site-footer" id="colophon">
                            <div class="site-info d-flex justify-content-md-between flex-column flex-lg-row flex-column-reverse">

                                <?php if ( is_active_sidebar( 'lh-bottom-footer-widget' ) ) : ?>
                                    <div id="footer-widget-area-1" class="lh-widget-area widget-area" role="complementary">
                                        <?php dynamic_sidebar( 'lh-bottom-footer-widget' ); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ( is_active_sidebar( 'lh-bottom-footer-social' ) ) : ?>
                                    <div id="footer-widget-area-2" class="lh-widget-area widget-area" role="complementary">
                                        <?php dynamic_sidebar( 'lh-bottom-footer-social' ); ?>
                                    </div>
                                <?php endif; ?>

                            </div><!-- .site-info -->

                        </footer><!-- #colophon -->

                    </div><!--col end -->

                </div><!-- row end -->

                </div>

            </div><!-- container end -->

        </div><!-- wrapper end -->

    <?php endif; ?>

<?php endif; ?>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>


</body>

</html>