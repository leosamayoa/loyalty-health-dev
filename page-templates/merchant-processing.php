<?php
/**
 * Template Name: Merchant Processing
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<div id="blue-circle"></div>
<div id="merchant-processing-wrapper" class="solutions-subpg-wrap bg-white">

        <div class="<?php echo esc_attr( $container ); ?> p-0" id="content" tabindex="-1">

        <?php while ( have_posts() ) : the_post(); ?>   

            <?php
                // check for ACF
                if (class_exists('ACF')) : ?>

            <?php // ACF Fields 
                $mp_page_subheading = get_field('lh_mp_subheading');
                
                $mp_section_one_text_content = get_field('lh_mp_section_1_text_content');
                $mp_section_one_img = get_field('lh_mp_section_1_img');
                $mp_section_two_text_content = get_field('lh_mp_section_2_text_content');
                $mp_section_two_img = get_field('lh_mp_section_2_img');
                $mp_section_three_text_content = get_field('lh_mp_section_3_text_content');
                $mp_section_three_img = get_field('lh_mp_section_3_img');
                $mp_section_four_text_content = get_field('lh_mp_section_4_text_content');
                $mp_section_four_img = get_field('lh_mp_section_4_img');

                $mp_bottom_section_content = get_field('lh_mp_bottom_text_content');
            ?>
                <header class="solutions-pg-hero position-relative">
                    <div class="content-wrap">
                        <?php the_title( '<h1 class="zerocredit_title accessible-title position-absolute text-center outline-black">', '</h1>' ); ?>
                    
                        <svg id="mp-svg-title" class="zerocredit_svgtitle" xmlns="http://www.w3.org/2000/svg" width="965" height="160" viewBox="0 0 965 160" class="mt-50">
                            


                                <text data-name="Merchant Processing" fill="transparent" stroke="#000" transform="translate(2 68)" stroke-dasharray="100%" stroke-dashoffset="100%" stroke-width="2" font-size="70" font-family="Raleway-Regular" letter-spacing="0.015em">
                                <tspan x="140" y="0" data-svg-origin="0 -66.140625" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px; stroke-dashoffset: 0%;">Zero Fee Credit Card</tspan>
                                <tspan x="54" y="75" data-svg-origin="0 -66.140625" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px; stroke-dashoffset: 0%;">Processing for Businesses</tspan>
                            
                            </text>
                        </svg> 

                        <?php if($mp_page_subheading) : ?>
                            <h2 class="cabin text-center fw-600 page-subheading">
                                <?php echo $mp_page_subheading; ?>
                            </h2>
                        <?php endif; ?>
                    </div>
                </header><!-- header -->

                <div class="row">
                    <main class="site-main">
                              
                        <?php if($mp_section_one_text_content || $mp_section_one_img) : ?>
                            <section class="solutions-section position-relative" id="mp-section-one">
                                <div class="row">
                                    <!-- svg path follow -->
                                    <svg class="position-absolute" id="mp-path-follow" xmlns="http://www.w3.org/2000/svg" width="1" height="5800.334" viewBox="0 0 1 5904.334">
                                        <path id="mp-path-follow-1" d="M7050,342.381V5805.715" transform="translate(-7049.5 -342.381)" fill="none" stroke="#000" stroke-width="1"/>
                                    </svg> 
                                    <!-- end path follow -->
                                    <div class="col-md-7 col-xl-6 d-flex align-items-center p-0">
                                        
                                        <?php if($mp_section_one_text_content) : ?>
                                            <div class="text-content px-75">
                                                <?php echo $mp_section_one_text_content; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    <div class="d-none-mobile d-md-block col-md-5 col-xl-6 p-0">

                                        <?php if($mp_section_one_img) : ?>
                                            <div class="image-wrap right">
                                                <?php echo wp_get_attachment_image( $mp_section_one_img, 'full' ); ?> 
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>
                                <div class="position-absolute solutions-bottom-overlay w-100"></div>
                            </section>
                        <?php endif; ?>

                        <!-- section two -->
                        <?php if($mp_section_two_text_content || $mp_section_two_img) : ?>

                            <section class="solutions-section position-relative" id="mp-section-two">
                                <div class="row">
                                    <div class="d-none-mobile d-md-block col-md-5 col-xl-6 p-0">

                                        <?php if($mp_section_two_img) : ?>
                                            <div class="image-wrap left">
                                                <?php echo wp_get_attachment_image( $mp_section_two_img, 'full' ); ?> 
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-7 col-xl-6 d-flex align-items-center p-0">
                                        
                                        <?php if($mp_section_two_text_content) : ?>
                                            <div class="text-content px-75">
                                                <?php echo $mp_section_two_text_content; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    
                                </div>
                                <div class="position-absolute solutions-bottom-overlay w-100"></div>
                            </section>

                        <?php endif; ?>

                        <!-- section three -->
                        <?php if($mp_section_three_text_content || $mp_section_three_img) : ?>

                            <section class="solutions-section position-relative" id="mp-section-three">
                                <div class="row">

                                    <div class="col-md-7 col-xl-6 d-flex align-items-center p-0">
                                        
                                        <?php if($mp_section_three_text_content) : ?>
                                            <div class="text-content px-75">
                                                <?php echo $mp_section_three_text_content; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                    <div class="d-none-mobile d-md-block col-md-5 col-xl-6 p-0">

                                        <?php if($mp_section_three_img) : ?>
                                            <div class="image-wrap right">
                                                <?php echo wp_get_attachment_image( $mp_section_three_img, 'full' ); ?> 
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                                <div class="position-absolute solutions-bottom-overlay w-100"></div>
                            </section>

                        <?php endif; ?>

                        <!-- section four -->
                        <?php if($mp_section_four_text_content || $mp_section_four_img) : ?>

                            <section class="solutions-section position-relative" id="mp-section-four">
                                <div class="row">                                    
                                    <div class="d-none-mobile d-md-block col-md-5 col-xl-6 p-0">

                                        <?php if($mp_section_four_img) : ?>
                                            <div class="image-wrap left">
                                                <?php echo wp_get_attachment_image( $mp_section_four_img, 'full' ); ?> 
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-7 col-xl-6 d-flex align-items-center p-0">
                                        
                                        <?php if($mp_section_four_text_content) : ?>
                                            <div class="text-content px-75">
                                                <?php echo $mp_section_four_text_content; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    
                                </div>
                                <div class="position-absolute solutions-bottom-overlay w-100"></div>
                            </section>

                        <?php endif; ?>

                        <!-- section five -->
                        <?php if($mp_bottom_section_content) : ?>

                            <section class="solutions-section" id="mp-section-five">
                                <div class="row h-100">                                    

                                    <div class="col-12 d-flex justify-content-center align-items-center">

                                        <div class="content-wrap">

                                        <div class="svg-icon-wrap text-center">
                                            <svg id="bottom-section-svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                                <g id="handshake" transform="translate(-1454 -748)">
                                                    <g id="Ellipse_8" data-name="Ellipse 8" transform="translate(1454 748)" fill="#fff" stroke="#000" stroke-width="1">
                                                    <circle cx="50" cy="50" r="50" stroke="none"/>
                                                    <circle cx="50" cy="50" r="49.5" fill="none"/>
                                                    </g>
                                                    <g id="Group_272" data-name="Group 272" transform="translate(1321 422.773)">
                                                    <path id="Path_1848" data-name="Path 1848" d="M208.115,410.659c.015-.018.032-.035.047-.056a1.191,1.191,0,0,1,1.341-.283l9.366,4.066a1.712,1.712,0,0,0,2.236-.83l.009-.018.248-.555a2.62,2.62,0,0,0,.227-1.3,2.69,2.69,0,0,0-1.565-2.241l-11.69-4.937-7.733-3.266-2.386,1.3-3,1.636a5.651,5.651,0,0,1-8.244-3.845l-6.03,16.046a5.725,5.725,0,0,1-1.042,1.745l11.921,4.875,14.436,6.517a2.683,2.683,0,0,0,3.543-1.338l.251-.555.009-.015a1.607,1.607,0,0,0-.847-2.111l-9.363-4.063a1.189,1.189,0,0,1-.617-1.559,1.243,1.243,0,0,0,.092-.165,1.184,1.184,0,0,1,1.47-.451l11.168,4.846a1.405,1.405,0,0,0,1.834-.685l.005-.015.251-.555c.018-.041.038-.085.053-.13a1.4,1.4,0,0,0-.761-1.778l-9.222-4a1.184,1.184,0,0,1-.617-1.559,1.143,1.143,0,0,1,.1-.186l-.012,0,.024-.026.006,0a1.188,1.188,0,0,1,1.441-.4l10.976,4.763a.615.615,0,0,0,.629-.077,2.669,2.669,0,0,0,.765-.983l.248-.555a2.557,2.557,0,0,0,.165-.484,2.7,2.7,0,0,0,.053-.3l.009-.077c0-.015,0-.029,0-.044v-.015a.619.619,0,0,0-.375-.588l-8.98-3.9a1.189,1.189,0,0,1-.617-1.562,1.215,1.215,0,0,1,.172-.277Z" transform="translate(-18.955 -30.709)"/>
                                                    <path id="Path_1849" data-name="Path 1849" d="M152.214,401.045l3.154,1.184a3.427,3.427,0,0,0,4.4-2l6.857-18.246a3.276,3.276,0,0,0,.191-.791,3.429,3.429,0,0,0-2.188-3.609l-3.157-1.184a3.426,3.426,0,0,0-4.4,2l-6.853,18.245a3.425,3.425,0,0,0,2,4.4Z" transform="translate(0 -15.405)"/>
                                                    <path id="Path_1850" data-name="Path 1850" d="M287.767,376.25a3.424,3.424,0,0,0,4.151.573l2.918-1.686a3.422,3.422,0,0,0,1.249-4.665l-9.745-16.879a3.426,3.426,0,0,0-4.668-1.252l-2.918,1.683a3.427,3.427,0,0,0-1.249,4.668l.2.349,9.544,16.53a3.2,3.2,0,0,0,.517.679Z" transform="translate(-80.542)" fill="#08a5f6"/>
                                                    <path id="Path_1851" data-name="Path 1851" d="M240.2,391.289l.056-.059.056-.056a.575.575,0,0,0,.012-.786l-.109-.133a.578.578,0,0,0-.036-.047c-.068-.086-.13-.177-.192-.266-.012-.021-.027-.038-.038-.059-.062-.094-.124-.189-.18-.29l-9.745-16.878a4.993,4.993,0,0,1-.292-.582l-3.8.387L217,373.912a16.661,16.661,0,0,0-6.106,2.236l-2.472,1.506h0l-1.45.886a3.277,3.277,0,0,0,3.275,5.675l4.16-2.268,2.227-1.214.4-.219.027.02.945.774.041.018,16.917,7.148a13.032,13.032,0,0,1,2.714,1.554l1.772,1.32a.576.576,0,0,0,.756-.059Z" transform="translate(-35.119 -12.836)" fill="#08a5f6"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>

                                        <?php echo $mp_bottom_section_content; ?>

                                        </div>

                                    </div>
                                </div>
                            </section>

                        <?php endif; ?>

                    </main><!-- #main -->

                </div><!-- .row -->

            <?php else : ?>

                <p>Please activate ACF</p>

            <?php endif; ?>
            
        <?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
