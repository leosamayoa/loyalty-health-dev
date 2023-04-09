<?php

/***
 * This is the sixth section of the homepage
 */
$section_six_headline = get_field('lh_homepage_section6_headline'); 
$section_six_vid_embed = get_field('lh_homepage_section6_vid');

?>

<section id="homepage-section-six" class="d-lg-flex align-items-center position-relative">
    <div class="row h-100 w-100">
        
        <div class="col-xl-7 p-0 d-flex h-100 align-items-center first-col">
            <?php if($section_six_headline || $section_six_text_content) : ?>
                <div class="section-content-wrap px-75 w-100">
                    <?php if($section_six_headline) : ?>
                        <h3 class="fs-v-lg outline-blue mb-50 section-heading text-center text-xl-left">
                            <?php echo $section_six_headline; ?>
                        </h3>
                    <?php endif; ?>
                </div>
                
            <?php endif; ?>
        </div>
        <div class="col-xl-5 p-0 d-flex h-100 align-items-center position-relative second-col">
            <div class="embed-container position-absolute"> 
                <?php if($section_six_vid_embed) : ?>
                    
                    <?php the_field('lh_homepage_section6_vid'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <svg id="lh-path-follow-homepage6" class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="473.104" height="290.636" viewBox="0 0 473.104 290.636">
        <g id="path_6" data-name="path 6" transform="translate(-487.406 -6351.98)">
            <path id="lh_home_6_4" data-name="Path 889" d="M-1185.354,1839.818v102.915" transform="translate(2145.354 4699.883)" fill="none" stroke="#000" stroke-width="1"/>
            <path id="lh_home_6_2" data-name="Path 1758" d="M487.756,6489.7v58.132" transform="translate(0.244 -10)" fill="none" stroke="#000" stroke-width="1"/>
            <path id="lh_home_6_3" data-name="Path 1759" d="M960.509,6547.426l-473,.226" transform="translate(0 -8)" fill="none" stroke="#000" stroke-width="1"/>
            <path id="lh_home_6_1" data-name="Path 1291" d="M299.906,6317.841c0,25.416.094,128.02.094,128.02" transform="translate(188 34.14)" fill="none" stroke="#000" stroke-width="1"/>
        </g>
    </svg>
</section><!-- end front-page-section six -->
