<?php

/***
 * This is the seventh section of the homepage
 */

 $section_seven_headline = get_field('lh_homepage_section7_headline');

 // company logos 
 $s7_company_logo_1 = get_field('lh_homepage_section7_logo_1');
 $s7_company_logo_2 = get_field('lh_homepage_section7_logo_2');
 $s7_company_logo_3 = get_field('lh_homepage_section7_logo_3');
 $s7_company_logo_4 = get_field('lh_homepage_section7_logo_4');
 $s7_company_logo_5 = get_field('lh_homepage_section7_logo_5');
 $s7_company_logo_6 = get_field('lh_homepage_section7_logo_6');
 $s7_company_logo_7 = get_field('lh_homepage_section7_logo_7');
 $s7_company_logo_8 = get_field('lh_homepage_section7_logo_8');
 $s7_company_logo_9 = get_field('lh_homepage_section7_logo_9');
 $s7_company_logo_10 = get_field('lh_homepage_section7_logo_10');
 $s7_company_logo_11 = get_field('lh_homepage_section7_logo_11');
 $s7_company_logo_12 = get_field('lh_homepage_section7_logo_12');
 $s7_company_logo_13 = get_field('lh_homepage_section7_logo_13');
 $s7_company_logo_14 = get_field('lh_homepage_section7_logo_14');
 $s7_company_logo_15 = get_field('lh_homepage_section7_logo_15');
 // Associations
 $s7_association_1 = get_field('lh_homepage_section7_assoc_1');
 $s7_association_2 = get_field('lh_homepage_section7_assoc_2');
 $s7_association_3 = get_field('lh_homepage_section7_assoc_3');
 $s7_association_4 = get_field('lh_homepage_section7_assoc_4');
 $s7_association_5 = get_field('lh_homepage_section7_assoc_5');


 $logo_size = 'full';

 // count the logos and associations
 $logos = [];
 $associations = [];

 if($s7_company_logo_1) {
     $logos[] = $s7_company_logo_1;
 }
 if($s7_company_logo_2) {
     //$logo_count++;
     $logos[] = $s7_company_logo_2;
 }
 if($s7_company_logo_3) {
     $logos[] = $s7_company_logo_3;
 }
 if($s7_company_logo_4) {
     $logos[] = $s7_company_logo_4;
 }
 if($s7_company_logo_5) {
     $logos[] = $s7_company_logo_5;
 }
 if($s7_company_logo_6) {
     $logos[] = $s7_company_logo_6;
 }
 if($s7_company_logo_7) {
     $logos[] = $s7_company_logo_7;
 }
 if($s7_company_logo_8) {
     $logos[] = $s7_company_logo_8;
 }
 if($s7_company_logo_9) {
     $logos[] = $s7_company_logo_9;
 }
 if($s7_company_logo_10) {
     $logos[] = $s7_company_logo_10;
 }
 if($s7_company_logo_11) {
     $logos[] = $s7_company_logo_11;
 }
 if($s7_company_logo_12) {
     $logos[] = $s7_company_logo_12;
 }
 if($s7_company_logo_13) {
     $logos[] = $s7_company_logo_13;
 }
 if($s7_company_logo_14) {
     $logos[] = $s7_company_logo_14;
 }
 if($s7_company_logo_15) {
     $logos[] = $s7_company_logo_15;
 }

 $logo_count = count($logos);

 if($s7_association_1) {
    $associations[] = $s7_association_1;
}
 if($s7_association_2) {
    $associations[] = $s7_association_2;
}
 if($s7_association_3) {
    $associations[] = $s7_association_3;
}
 if($s7_association_4) {
    $associations[] = $s7_association_4;
}
 if($s7_association_5) {
    $associations[] = $s7_association_5;
}

$associations[] = "<img src='/wp-content/uploads/2020/05/LH-logo-black1.svg' alt='loyalty health logo'>";
$association_count = count($associations);

?>

<section id="homepage-section-seven" class="d-flex align-items-center position-relative">
    <div class="content-wrap w-100">

        <?php if ( $section_seven_headline ) : ?>
            <h3 class="fs-50 fw-600 text-center">
                <?php echo $section_seven_headline; ?>
            </h3>
        <?php endif; ?>
        <div class="company-logos">

            <?php if($logo_count > 0) : ?>
                
                <div class="logos-row row-1 mb-0 overflow-hidden position-relative justify-content-center">
                    <div class="logos-wrap-1">

                        <?php for ($i = 0; $i < $logo_count; $i++) { ?>
                            <div class="logo">
                                    <?php  echo wp_get_attachment_image( $logos[$i], $logo_size ); ?>
                                <!-- for animation -->
                                <div class="waves">
                                    <span class="wave"></span>
                                    <span class="wave"></span>
                                    <span class="wave"></span>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            
            <?php endif; ?>

            <?php if($association_count > 0) : ?>

                <div class="logos-row row-2 mb-0 overflow-hidden position-relative justify-content-center">
                    <div class="logos-wrap-2">
                    <?php 
                              $last_association = $association_count - 1;
                        ?>

                        <?php for ($i = 0; $i < $association_count; $i++) { ?>
                            <?php if($i == $last_association) : ?>
                                <!-- spacers for the "proud member of msg" -->
                                <div class="logo"></div>
                                <div class="logo"></div>
                                <div class="logo"></div>                              

                                <div class="logo">
                                    <div class="position-relative w-100 h-100 d-flex align-items-center">
                                        <?php echo $associations[$i]; ?>
                                        <svg id="proud-member-svg" class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="1085" height="59" viewBox="0 0 1090 59"><text transform="translate(0 47)" fill="#08a5f6" font-size="50" font-family="Raleway-SemiBold, Raleway" font-weight="600"><tspan x="0" y="0" fill="#000">A proud member of the </tspan><tspan y="0" fill="#08a5f6">following associations</tspan></text></svg>

                                        <div class="waves">
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                            <span class="wave"></span>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="logo">
                                    <?php  echo wp_get_attachment_image( $associations[$i], $logo_size ); ?>
                                    <div class="waves">
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                        <span class="wave"></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php } ?>
                    </div>
                </div>

            <?php endif; ?>
                

        </div>
    </div>
    <svg id="lh-path-follow-homepage7" class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="79.992" height="322.787" viewBox="0 0 79.992 322.787">
        <path id="lh_home_7_1" data-name="path 7" d="M1084.848,7514.536l-.077-190.285,34.591-10.24-77.874-12.344,43.283-15.9-14.784-6.323,14.784-6.853V7221.75" transform="translate(-1039.512 -7221.75)" fill="none" stroke="#000" stroke-width="1"/>
    </svg>

    
</section><!-- end front-page-section seven -->
<!--<div class="bg-light-gray w-100 d-none d-xl-block" id="home-before-footer-spacer"></div>-->



<!-- Top Footer -->
<?php if ( is_active_sidebar( 'lh-top-footer-one' ) && is_active_sidebar( 'lh-top-footer-two' ) ) : ?>
    <div class="<?php echo esc_attr( $container ); ?> p-0">
        <?php get_template_part('template-parts/top-footer'); ?>
    

        <?php/* if(is_page_template( 'page-templates/homepage.php' )) { ?>
            <!-- <div class="bg-light-gray w-100 d-none d-xl-block" id="home-after-footer-spacer">

                <svg id="lh-path-follow-homepage8" class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="122.724" height="179.196" viewBox="0 0 122.724 179.196">
                    <g transform="translate(-892.147 -6304.935)">
                        <path id="lh_home_8_2" d="M1079.546,6381.2l-67.758,9.372,35.907,6.949,32.011,5.153,54.619,10.305-54.619,8.051V6438.1l-15.264,7.085,15.264,5.475-47.791,14.17,68.917,17.39-21.561,12.007v34.483" transform="translate(-119.546 -44.575)" fill="none" stroke="#000" stroke-width="1"/>
                        <path id="lh_home_8_1" d="M1083,6306.682v31.8" transform="translate(-123 -1.747)" fill="none" stroke="#000" stroke-width="1"/>                    
                    </g>
                </svg> 

            </div> -->
        <?php } */?>
    </div>
<?php endif; ?>