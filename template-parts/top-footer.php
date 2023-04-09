<?php
/**
 * The template for displaying the top footer.
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


    <div class="wrapper" id="wrapper-top-footer">

        <footer class="site-footer" id="top-footer">
                        
            <div class="row">

                <div class="col-lg-6 p-0">

                    <div id="top-footer-widget-area-1" class="widget-area">
                        <?php dynamic_sidebar( 'lh-top-footer-one' ); ?>
                    </div>

                </div>
                <div class="col-lg-6 p-0">

                    <div id="top-footer-widget-area-2" class="widget-area">
                        <?php dynamic_sidebar( 'lh-top-footer-two' ); ?>
                    </div>

                 </div><!--col end -->

            </div><!-- row end -->
		</footer><!-- .site-footer -->

    </div><!-- wrapper end -->


