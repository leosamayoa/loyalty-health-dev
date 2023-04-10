<?php

/***
 * This is the first section of the homepage
 */
$homepage_title = get_field('lh_homepage_headline'); 
$homepage_subheading = get_field('lh_homepage_subheading'); 
$homepage_static_top_img = get_field('lh_homepage_top_right_bg_img');
$is_homepage_slider_on = get_field('lh_is_top_slider_on');
?>

<div id="homepage-section-one">
    <section class="row position-relative overlay d-md-block" id="fp-section-one-columns">
        <div class="col-md-6 col-lg-6">
            <div class="pl-75 dark-transparent-bg">
                <?php if($homepage_title) : ?>

                    <!--<h1 style="display:none;" class="accessible-title outline-blue text-center text-md-left mb-30" id="homepage-title">
                        <?php// echo $homepage_title; ?>
                    </h1>-->

                    <h1 class="desktopH1"><svg id="site-intro-svg" xmlns="http://www.w3.org/2000/svg" width="700" height="100" viewBox="0 0 1065 80" class="">
                        <text id="to_survive" data-name="Page 1 on Google" fill="transparent" stroke="#08a5f6" transform="translate(2 68)" stroke-dasharray="100%" stroke-dashoffset="100%" stroke-width="2" font-size="38" font-family="Raleway-Regular" letter-spacing="0.015em">
                            <tspan x="0" y="0">
                                <tspan>IMAGINE…</tspan>
                            </tspan>
                        </text>
                    </svg></h1>

                    <h1 class="mobileH1"><svg id="site-intro-svg" xmlns="http://www.w3.org/2000/svg" width="700" height="100" viewBox="0 0 1065 80" class="">
                        <text id="to_survive" data-name="Page 1 on Google" fill="transparent" stroke="#08a5f6" transform="translate(2 68)" stroke-dasharray="100%" stroke-dashoffset="100%" stroke-width="2" font-size="38" font-family="Raleway-Regular" letter-spacing="0.015em">
                            <tspan x="0" y="0">
                                <tspan>IMAGINE…</tspan>
                            </tspan>
                        </text>
                    </svg></h1>


                <?php endif; ?>


                <div class="subheading-wrap">
                    <?php if($homepage_subheading) :  ?>
                            <div class="site-subheading text-center text-md-left d-block d-lg-inline">
                                <?php echo $homepage_subheading; ?>
                    </div> 
                    <?php endif; ?>
                </div>


                <a class="about-vid-link" href="#about-loyalty-health" class="">
                        Please watch the video then scroll down to discover more <img class="home-arrow-down" src="/wp-content/uploads/direct/blue_arrow_down_icon-01.svg" alt="arrow down">
                </a>

            
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="myVideo-wrap">
                <img class="video-bg" src="/wp-content/uploads/direct/home-hero-bg.svg" alt="video bg">
                <!--<div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" id="myVideo" width="560" height="315" src="https://www.youtube.com/embed/HVWWR4xE6FY?&autoplay=1"  title="YouTube video player" frameborder="0" allow="accelerometer;" allow="autoplay;" encrypted-media=" gyroscope; picture-in-picture" allowfullscreen></iframe> 
                </div>-->

                <script src="https://fast.wistia.com/embed/medias/h5wrmsrr3e.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div id="wistia-video" class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_h5wrmsrr3e seo=false videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/h5wrmsrr3e/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
            </div>
			
			   <!--<div class="myVideo-wrap1">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" id="myVideo" width="560" height="315" src="https://www.youtube.com/embed/nVx7WTkZZ-I?&autoplay=1"  title="YouTube video player" frameborder="0" allow="accelerometer;" allow="autoplay;" encrypted-media=" gyroscope; picture-in-picture" allowfullscreen></iframe> 
                </div>-->
            </div>
			
<?php
			$lh_hr_video = get_field('video'); ?>
  <?php if($lh_hr_video) : ?>
                      <div class="hrVideoWrap">
                          <?php echo $lh_hr_video; ?>
                      </div>
                  <?php endif; ?>
			
        </div>

    </section> <!-- end row -->


</div><!-- end front-page-section one -->
