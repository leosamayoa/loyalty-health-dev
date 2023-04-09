<?php
/**
 * Template Name: Digital Marketing
 *
 * 
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<div id="blue-circle"></div>    

<div id="digital-marketing-wrapper" class="solutions-subpg-wrap bg-white">

        <div class="<?php echo esc_attr( $container ); ?> p-0" id="content" tabindex="-1">

        <?php while ( have_posts() ) : the_post(); ?>   

            <?php
                // check for ACF
                    if (class_exists('ACF')) : ?>

            <?php // ACF Fields 
                $lh_dm_subheading = get_field('lh_dm_subheading');

                $lh_dm_section_1_title = get_field('lh_dm_section_1_title');
                $lh_dm_section_1_content = get_field('lh_dm_section_1_content');
                $lh_dm_section_1_img = get_field('lh_dm_section_1_img');

                $lh_dm_section_2_title = get_field('lh_dm_section_2_title');
                $lh_dm_section_2_content = get_field('lh_dm_section_2_content');
                $lh_dm_map_shortcode = get_field('lh_dm_map_shortcode');

        
                $dm_bottom_section_content = get_field('lh_dm_bottom_text_content');
                $dm_is_vid_slider_on = get_field('lh_dm_is_vid_slider_active');
                $dm_vid_slider = get_field('lh_dm_bottom_vid_slider');
            ?>
        
                <header class="solutions-pg-hero position-relative">
                    <div class="content-wrap">
                        <?php the_title( '<h1 class="accessible-title position-absolute text-center outline-black">', '</h1>' ); ?>

                        <svg id="mp-svg-title" xmlns="http://www.w3.org/2000/svg" width="100%" height="170" viewBox="0 0 865 250" class="mt-50">
                            <text data-name="Digital Marketing" fill="transparent" stroke="#000" transform="translate(2 68)" stroke-dasharray="100%" stroke-dashoffset="100%" stroke-width="2" font-size="70" font-family="Raleway-Regular" letter-spacing="0.015em">
                                <tspan x="100" y="0" data-svg-origin="0 -66.140625" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px; stroke-dashoffset: 0%;">Unique Performance Marketing</tspan>
                                <tspan x="600" y="75" data-svg-origin="0 -66.140625" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px; stroke-dashoffset: 0%;"> + </tspan>
                                <tspan x="-60" y="150" data-svg-origin="0 -66.140625" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px; stroke-dashoffset: 0%;">Automatic Customer Reviews & Referrals</tspan>
                            
                            </text>
                        </svg> 

                        <?php if($lh_dm_subheading) : ?>
                            <h2 class="cabin text-center fw-600 page-subheading">
                                <?php echo $lh_dm_subheading; ?>
                            </h2>
                        <?php endif; ?>
                    </div>
                </header><!-- header -->

                <div class="row">
                    <main class="site-main">
                              
                        <?php if($lh_dm_section_1_title || $lh_dm_section_1_content || $lh_dm_section_1_img) : ?>
                            <section class="solutions-section" id="dm-section-one">
                                <div class="row">
                                    <div class="col-md-7 col-xl-6 d-flex align-items-center p-0">

                                    <div class="text-content position-relative px-75">
                                        <!-- path follow svgs -->
                                        <svg class="position-absolute path-follow" id="dm-path-follow-1" xmlns="http://www.w3.org/2000/svg" width="1" height="220.334" viewBox="0 0 1 175.334">
                                            <path  id="dm-path-1" d="M7050,342.381V515.715" transform="translate(-7049.5 -342.381)" fill="none" stroke="#000" stroke-width="1"/>
                                        </svg>
                                        <svg class="position-absolute path-follow" id="dm-path-follow-2" xmlns="http://www.w3.org/2000/svg" width="1.439" height="260.086" viewBox="0 0 1.439 260.086">
                                            <path id="dm-path-2" d="M7493.146,1578.4l-.400,400.085" transform="translate(-7492.207 -1578.399)" fill="none" stroke="#000" stroke-width="1"/>
                                        </svg>
                                        <!-- end path follow svgs -->

                                        <div class="svg-icon-wrap text-center mb-3">
                                            <svg id="dm-section-one-svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                                <g id="spider" transform="translate(-1454 -748)">
                                                    <g id="Ellipse_8" data-name="Ellipse 8" transform="translate(1454 748)" fill="#fff" stroke="#000" stroke-width="1">
                                                    <circle cx="50" cy="50" r="50" stroke="none"/>
                                                    <circle cx="50" cy="50" r="49.5" fill="none"/>
                                                    </g>
                                                    <g id="Group_271" data-name="Group 271" transform="translate(1326 443.327)">
                                                    <path id="Path_1844" data-name="Path 1844" d="M174.373,341.117a2.178,2.178,0,1,1,2.178-2.178,2.179,2.179,0,0,1-2.178,2.178Zm-6.887,0a2.178,2.178,0,1,1,2.178-2.178,2.178,2.178,0,0,1-2.178,2.178Zm-6.887,0a2.178,2.178,0,1,1,2.178-2.178,2.178,2.178,0,0,1-2.178,2.178Zm-3.528,37.333h26.136c-.005-.038-.01-.077-.015-.116l-.358-3.668H157.071a3.293,3.293,0,0,1-3.289-3.288V346.463h46.832v7.909a3.221,3.221,0,0,1,2.011-.7c.106,0,.212.006.315.016a3.208,3.208,0,0,1,1.456.514V336.595a7.08,7.08,0,0,0-7.071-7.072H157.071A7.08,7.08,0,0,0,150,336.595v34.783a7.08,7.08,0,0,0,7.071,7.073Z"/>
                                                    <path id="Path_1845" data-name="Path 1845" d="M192.011,416.632a5.494,5.494,0,1,0,5.494-5.492,5.494,5.494,0,0,0-5.494,5.492Z" transform="translate(-28.871 -56.089)" fill="#08a5f6"/>
                                                    <path id="Path_1846" data-name="Path 1846" d="M272.482,438.1c0,3.493,2.352,6.324,5.257,6.324S283,441.593,283,438.1s-2.355-6.323-5.257-6.323-5.257,2.83-5.257,6.323Z" transform="translate(-84.172 -70.271)" fill="#08a5f6"/>
                                                    <path id="Path_1847" data-name="Path 1847" d="M266.7,426.072a4.358,4.358,0,0,1-1.365,1.11,3.478,3.478,0,0,1-3.21,0,4.181,4.181,0,0,1-1.055-.769,5.3,5.3,0,0,1-1.176-1.811,6.362,6.362,0,0,1-.449-2.38,6.036,6.036,0,0,1,1.315-3.85,4.351,4.351,0,0,1,1.365-1.11,3.487,3.487,0,0,1,3.21,0,4.2,4.2,0,0,1,1.055.771,5.33,5.33,0,0,1,1.176,1.809,6.362,6.362,0,0,1,.449,2.38,6.035,6.035,0,0,1-1.315,3.85Zm-4.724-12.228a1.9,1.9,0,0,1,2.5-1.013,1.935,1.935,0,0,1,.838.69,1.846,1.846,0,0,1,.187,1.74,4.85,4.85,0,0,0-3.533,0,1.831,1.831,0,0,1,.013-1.417Zm12.413,8.487a.971.971,0,1,0,0-1.943h-4.653a8.009,8.009,0,0,0-.613-1.763l3.4-1.3h0l.275-.1h0a2.192,2.192,0,0,0,1.408-2.044c0-.071-.005-.141-.01-.212v0l-.53-5.413a.971.971,0,1,0-1.933.19l.528,5.411a.107.107,0,0,1,0,.027.228.228,0,0,1-.046.139.25.25,0,0,1-.113.091l-.275.1h0l-3.533,1.352a.942.942,0,0,0-.224.143,6.706,6.706,0,0,0-.855-.827.876.876,0,0,0,.053-.079h0a3.847,3.847,0,1,0-7.382-1.514,3.884,3.884,0,0,0,.308,1.514,1.093,1.093,0,0,0,.091.13,6.767,6.767,0,0,0-.58.424c-.111.109-.192.246-.293.362a.959.959,0,0,0-.242-.153l-3.533-1.352-.275-.1a.234.234,0,0,1-.113-.092.238.238,0,0,1-.046-.14.078.078,0,0,1,0-.023h0l.528-5.413a.971.971,0,0,0-1.933-.19l-.53,5.413h0c-.005.071-.01.141-.01.212a2.194,2.194,0,0,0,1.408,2.047l.272.1,3.407,1.3c-.081.168-.187.318-.255.492a8.055,8.055,0,0,0-.371,1.268h-4.651a.971.971,0,0,0,0,1.943h4.444a8.44,8.44,0,0,0,.245,1.853l-2.819,1.077h0l-.275.1h0a2.192,2.192,0,0,0-1.408,2.044c0,.069.005.143.01.217l.53,5.409a.971.971,0,1,0,1.933-.188l-.528-5.413v0a.053.053,0,0,1,0-.022.227.227,0,0,1,.046-.139.242.242,0,0,1,.113-.091l.275-.1h0l2.786-1.066a7.355,7.355,0,0,0,.845,1.306,6.286,6.286,0,0,0,1.976,1.6,5.433,5.433,0,0,0,4.977,0,6.153,6.153,0,0,0,1.539-1.123A7.13,7.13,0,0,0,269.017,426l2.806,1.074.273.1a.236.236,0,0,1,.116.091.243.243,0,0,1,.046.141c0,.008,0,.015,0,.023h0l-.528,5.413a.971.971,0,1,0,1.933.188l.53-5.413h0c.005-.071.01-.141.01-.211a2.2,2.2,0,0,0-.378-1.228,2.172,2.172,0,0,0-1.03-.819l-.275-.1-2.814-1.077a8.392,8.392,0,0,0,.242-1.853Z" transform="translate(-70.161 -54.393)"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                            <?php if($lh_dm_section_1_title) : ?>
                                                <h3 class="mb-50 text-primary fs-50 fw-600">
                                                    <?php echo $lh_dm_section_1_title; ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if($lh_dm_section_1_content) : ?>
                                                <?php echo $lh_dm_section_1_content; ?>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                    <div class="d-none d-md-block col-md-5 col-xl-6 p-0 dm-image-col">

                                        <?php if($lh_dm_section_1_img) : ?>
                                            <div class="image-wrap">
                                                <?php echo wp_get_attachment_image( $lh_dm_section_1_img, 'full' ); ?> 
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>

                        <!-- section two -->
                        <?php if($lh_dm_section_2_title || $lh_dm_section_2_content ) : ?>
                            <section class="solutions-section" id="dm-section-two">
                           
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0 d-flex align-items-center position-relative">
                                    <!-- path follow svg -->
                                    <svg class="position-absolute path-follow" id="dm-path-follow-3" xmlns="http://www.w3.org/2000/svg" width="1" height="100.334" viewBox="0 0 1 100.334"><path id="dm-path-3" d="M7050,342.381V446.715" transform="translate(-7049.5 -342.381)" fill="none" stroke="#000" stroke-width="1"/></svg>

                                    <!-- end path follow -->
                                        <div class="text-content px-75">
                                            <div class="svg-icon-wrap text-center">
                                                <svg class="position-absolute" id="dm-section-two-svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                                <g transform="translate(-413 -1829)"><g transform="translate(-1041 1081)">
                                                    <g transform="translate(1454 748)" fill="#fff" stroke="#000" stroke-width="1">
                                                        <circle cx="50" cy="50" r="50" stroke="none"/>
                                                        <circle cx="50" cy="50" r="49.5" fill="none"/></g>
                                                    </g><g transform="translate(285 1524.145)">
                                                        <path d="M183,349.723a42.251,42.251,0,0,1,4.779-2.3c.07-.027.141-.058.211-.083l.083-.211a41.738,41.738,0,0,1,2.22-4.636A24.859,24.859,0,0,0,183,349.723Z" transform="translate(-22.835 -8.747)" fill="#020202"/><path d="M222.394,329.855a24.673,24.673,0,0,0-6.475,1.283h0a38.688,38.688,0,0,0-3.654,6.075,42.084,42.084,0,0,1,10.129-1.607v-5.751Z" transform="translate(-43.088)" fill="#020202"/><path d="M261.729,331.138a24.671,24.671,0,0,0-6.475-1.283v5.751a42.105,42.105,0,0,1,10.129,1.607,38.905,38.905,0,0,0-3.652-6.075Z" transform="translate(-72.837)" fill="#020202"/><path d="M296.029,347.342c.071.025.14.055.211.083a42.452,42.452,0,0,1,4.779,2.3,24.886,24.886,0,0,0-7.294-7.228,42.189,42.189,0,0,1,2.22,4.636l.083.211Z" transform="translate(-99.459 -8.747)" fill="#020202"/><path d="M255.254,373.317h14.017A39.4,39.4,0,0,0,266.98,361a39.386,39.386,0,0,0-11.726-2.273v14.587Z" transform="translate(-72.837 -19.982)" fill="#020202"/><path d="M189.608,459.879a41.717,41.717,0,0,1-2.682-5.442l-.083-.211c-.07-.027-.141-.055-.211-.085a41.946,41.946,0,0,1-5.289-2.589,24.848,24.848,0,0,0,8.265,8.328Z" transform="translate(-21.69 -84.214)" fill="#020202"/><path d="M173.5,375.819a31.437,31.437,0,0,0,4.95,5.086,41.921,41.921,0,0,1,1.587-9.609,38.633,38.633,0,0,0-6.306,3.823c-.08.231-.158.464-.231.7Z" transform="translate(-16.261 -28.677)" fill="#020202"/><path d="M199.642,373.314h14.016V358.73A39.386,39.386,0,0,0,201.932,361a39.406,39.406,0,0,0-2.29,12.311Z" transform="translate(-34.353 -19.982)" fill="#020202"/><path d="M216.442,471.479a24.7,24.7,0,0,0,5.957,1.112v-6.269a42.08,42.08,0,0,1-10.126-1.61,38.574,38.574,0,0,0,4.169,6.766Z" transform="translate(-43.093 -93.323)" fill="#020202"/><path d="M267.752,475.456a38.4,38.4,0,0,0,3.257-5l-6.3,5.754a24.963,24.963,0,0,0,3.046-.759Z" transform="translate(-79.377 -97.3)" fill="#020202"/><path d="M300.49,451.551a41.914,41.914,0,0,1-5.287,2.589c-.071.03-.14.058-.211.085l-.083.211a42.32,42.32,0,0,1-2.682,5.445,24.85,24.85,0,0,0,8.263-8.331Z" transform="translate(-98.422 -84.214)" fill="#020202"/><path d="M305.689,371.3a42.168,42.168,0,0,1,1.625,10.717h6.01a24.751,24.751,0,0,0-1.331-6.894,38.689,38.689,0,0,0-6.3-3.823Z" transform="translate(-107.738 -28.677)" fill="#020202"/><path d="M154.281,387.872a2.37,2.37,0,0,0-3.82,2.808A39.332,39.332,0,0,0,179.306,406.6c.937.068,1.881.1,2.828.1.1,0,.191,0,.284,0,.844,0,1.688-.04,2.534-.1l-.457,2.592-.565,3.2-.64,3.642,4.488-4.094,4.764-4.347,2.055-1.874,4.217-3.848L204,397.144l-4.531-.163-3.142-.113-13.909-.5-3.112-.113-3.323-.121,3.323,2.758,3.112,2.584v.488c-1.042.01-2.082-.03-3.112-.116a34.576,34.576,0,0,1-20.6-9.034q-1.225-1.123-2.341-2.373-1.1-1.224-2.085-2.567Z" transform="translate(0 -39.479)" fill="#08a5f6"/></g></g>
                                                </svg>
                                            </div>
                                            <?php if($lh_dm_section_2_title) : ?>
                                                <h3 class="mb-50 text-primary fs-50 fw-600">
                                                    <?php echo $lh_dm_section_2_title; ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if($lh_dm_section_2_content) : ?>
                                                <?php echo $lh_dm_section_2_content; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <?php if($lh_dm_map_shortcode) : ?>
                                        <div class="col-lg-6 p-0 h-100 w-100" id="map-wrap">
                                           <?php echo $lh_dm_map_shortcode; ?>                           
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </section>
                        <?php endif; ?>


                        <!-- section seven -->
                        <?php if($dm_bottom_section_content) : ?>

                            <section id="dm-section-seven" class="position-relative">
                                <div class="row h-100">  
                                    <svg class="position-absolute path-follow" id="dm-path-follow-12" xmlns="http://www.w3.org/2000/svg" width="499.575" height="374.796" viewBox="0 0 499.575 374.796">
                                        <g id="thrid" transform="translate(-460.999 -6624.04)">
                                            <path id="dm-path-19" data-name="Path 1799" d="M0,0H481.579" transform="translate(461.921 6905.5)" fill="none" stroke="#000" stroke-width="1"/>
                                            <path id="dm-path-18" data-name="Path 1869" d="M4108.5,15774.04v281.975" transform="translate(-3647 -9150)" fill="none" stroke="#000" stroke-width="1"/>
                                            <path id="dm-path-20" data-name="Path 1870" d="M4590,16148.836l.074-93.83" transform="translate(-3647 -9150)" fill="none" stroke="#000" stroke-width="1"/>
                                        </g>
                                    </svg>

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

                                        <?php echo $dm_bottom_section_content; ?>
                                        </div>
                                    </div>
                                </div>
                                
                            </section>
                        <?php endif; ?>

                        <!-- Video Slider -->
                        <?php// if($dm_is_vid_slider_on) : ?>
                            <!--<section id="dm-section-eight">
                                <?php// echo $dm_vid_slider; ?>
                            </section>-->
                        <?php// endif; ?>

                    </main><!-- #main -->
                </div><!-- .row -->

            <?php else : ?>
                <p>Please activate ACF</p>
            <?php endif; ?>
        <?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer();
