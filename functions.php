<?php
require_once 'dompdf/autoload.inc.php'; // Replace with the actual path to the autoload file
use Dompdf\Dompdf;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
	
    
    if(!is_page_template( 'page-templates/blank.php' ) && !is_page_template( 'page-templates/meeting.php' )) {
        // WHOLE SITE
        wp_enqueue_script('loyalty-allsite-js', get_stylesheet_directory_uri() . '/js/lh-custom-allsite.js',null,array('jquery'), true);
    }

    // individual pages below
    if(is_page_template( 'page-templates/meeting.php' )) {
        wp_enqueue_script('loyalty-meeting-js', get_stylesheet_directory_uri() . '/js/lh-meeting-page.js',null,array('jquery'), true);
    }

	
	

    // Homepage
    if ( is_front_page() ) {
        // slick css in sass > theme
        // slick JS and front-page JS
         wp_enqueue_script('slick-slider-script', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',null,array('jquery'),true);

         // GSAP
         wp_enqueue_script('gsap-main', get_stylesheet_directory_uri() . '/js/gs/gsap.min.js','3.2.6','',true);
         wp_enqueue_script('gs-motion-path', get_stylesheet_directory_uri() . '/js/gs/MotionPathPlugin.min.js','3.2.6',array('gsap-main'),true);
         wp_enqueue_script('gs-split-text', get_stylesheet_directory_uri() . '/js/gs/SplitText.min.js','3.2.6',array('gsap-main'),true);
         wp_enqueue_script('gs-drawsvg', get_stylesheet_directory_uri() . '/js/gs/DrawSVGPlugin.min.js','3.2.6',array('gsap-main'),true);
         wp_enqueue_script('scroll-magic', get_stylesheet_directory_uri() . '/js/gs/ScrollMagic.min.js','2.0.7',array(''),true);
         wp_enqueue_script('scroll-magic-gs-plugin',get_stylesheet_directory_uri() . '/js/gs/animation.gsap.min.js','2.0.7',array(''),true);

         // custom Loyalty Health
         wp_enqueue_script('loyalty-homepage-js', get_stylesheet_directory_uri() . '/js/lh-custom-homepage.js',null,array('jquery', 'slick-slider-script', 'gs-split-text', 'gs-motion-path', 'gs-drawsvg', 'scroll-magic', 'scroll-magic-gs-plugin'), true);
     }


     // Merchant Processing
     if(is_page_template('page-templates/merchant-processing.php')) {
        wp_enqueue_script('gs-split-text', get_stylesheet_directory_uri() . '/js/gs/SplitText.min.js','3.2.6',array('gsap-main'),true);
        wp_enqueue_script('gsap-main', get_stylesheet_directory_uri() . '/js/gs/gsap.min.js','3.2.6','',true);
        if ( ! wp_is_mobile() ) { 
            wp_enqueue_script('gs-motion-path', get_stylesheet_directory_uri() . '/js/gs/MotionPathPlugin.min.js','3.2.6',array('gsap-main'),true);
        }

//        wp_enqueue_script( 'popper-js', get_stylesheet_directory_uri() . '/js/popper.min.js', array('jquery', 'child-understrap-scripts'), $the_theme->get( 'Version' ), true );

        wp_enqueue_script('scroll-magic', get_stylesheet_directory_uri() . '/js/gs/ScrollMagic.min.js','2.0.7',array(''),true);
        wp_enqueue_script('scroll-magic-gs-plugin',get_stylesheet_directory_uri() . '/js/gs/animation.gsap.min.js','2.0.7',array(''),true);

         wp_enqueue_script('loyalty-merchantprocessing-js', get_stylesheet_directory_uri() . '/js/lh-merchantprocessing.js',null,array('jquery', 'gs-motion-path', 'scroll-magic', 'gs-split-text', 'scroll-magic-gs-plugin'), true);

     }

     // HR & Payroll
     if(is_page_template('page-templates/hr.php')) {

        wp_enqueue_script('gsap-main', get_stylesheet_directory_uri() . '/js/gs/gsap.min.js','3.2.6','',true);
        if ( ! wp_is_mobile() ) { 
            wp_enqueue_script('gs-motion-path', get_stylesheet_directory_uri() . '/js/gs/MotionPathPlugin.min.js','3.2.6',array('gsap-main'),true);
        }
        wp_enqueue_script('gs-split-text', get_stylesheet_directory_uri() . '/js/gs/SplitText.min.js','3.2.6',array('gsap-main'),true);
        wp_enqueue_script('scroll-magic', get_stylesheet_directory_uri() . '/js/gs/ScrollMagic.min.js','2.0.7',array(''),true);
        wp_enqueue_script('gs-drawsvg', get_stylesheet_directory_uri() . '/js/gs/DrawSVGPlugin.min.js','3.2.6',array('gsap-main'),true);
        wp_enqueue_script('scroll-magic-gs-plugin',get_stylesheet_directory_uri() . '/js/gs/animation.gsap.min.js','2.0.7',array(''),true);
        
        wp_enqueue_script('loyalty-hr-js', get_stylesheet_directory_uri() . '/js/lh-hr.js',null,array('jquery', 'gs-motion-path', 'gs-split-text', 'scroll-magic', 'scroll-magic-gs-plugin'), true);

    }

     // Quick Start
     if(is_page_template('page-templates/quick-start.php')) {

        wp_enqueue_script('gsap-main', get_stylesheet_directory_uri() . '/js/gs/gsap.min.js','3.2.6','',true);
        if ( ! wp_is_mobile() ) { 
            wp_enqueue_script('gs-motion-path', get_stylesheet_directory_uri() . '/js/gs/MotionPathPlugin.min.js','3.2.6',array('gsap-main'),true);
        }
        wp_enqueue_script('gs-split-text', get_stylesheet_directory_uri() . '/js/gs/SplitText.min.js','3.2.6',array('gsap-main'),true);
        wp_enqueue_script('scroll-magic', get_stylesheet_directory_uri() . '/js/gs/ScrollMagic.min.js','2.0.7',array(''),true);
        wp_enqueue_script('gs-drawsvg', get_stylesheet_directory_uri() . '/js/gs/DrawSVGPlugin.min.js','3.2.6',array('gsap-main'),true);
        wp_enqueue_script('scroll-magic-gs-plugin',get_stylesheet_directory_uri() . '/js/gs/animation.gsap.min.js','2.0.7',array(''),true);
        
        wp_enqueue_script('loyalty-quick-start', get_stylesheet_directory_uri() . '/js/quick-start.js',null,array('jquery', 'gs-motion-path', 'gs-split-text', 'scroll-magic', 'scroll-magic-gs-plugin'), true);

    }

     // Digital Marketing
    if(is_page_template('page-templates/digital-marketing.php')) {

        wp_enqueue_script('gsap-main', get_stylesheet_directory_uri() . '/js/gs/gsap.min.js','3.2.6','',true);
        wp_enqueue_script('gs-split-text', get_stylesheet_directory_uri() . '/js/gs/SplitText.min.js','3.2.6',array('gsap-main'),true);
        wp_enqueue_script('scroll-magic', get_stylesheet_directory_uri() . '/js/gs/ScrollMagic.min.js','2.0.7',array(''),true);
        wp_enqueue_script('gs-drawsvg', get_stylesheet_directory_uri() . '/js/gs/DrawSVGPlugin.min.js','3.2.6',array('gsap-main'),true);
        wp_enqueue_script('scroll-magic-gs-plugin',get_stylesheet_directory_uri() . '/js/gs/animation.gsap.min.js','2.0.7',array(''),true);
        wp_enqueue_script( 'popper-js', get_stylesheet_directory_uri() . '/js/popper.min.js', array('jquery'), $the_theme->get( 'Version' ), true );
        wp_enqueue_script( 'popper-js', get_stylesheet_directory_uri() . '/js/popper.min.js', array('jquery'), $the_theme->get( 'Version' ), true );

        if ( ! wp_is_mobile() ) { 
            wp_enqueue_script('gs-motion-path', get_stylesheet_directory_uri() . '/js/gs/MotionPathPlugin.min.js','3.2.6',array('gsap-main'),true);
        }

        wp_enqueue_script('loyalty-dm-js', get_stylesheet_directory_uri() . '/js/lh-digital-marketing.js',null,array('jquery', 'gs-motion-path', 'gs-split-text', 'scroll-magic', 'scroll-magic-gs-plugin'), true);

    }

}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/** Custom Loyalty Health functions below **/
// hide the WordPress content editor on Homepage
add_action( 'admin_init', 'lh_hide_editor' );
 
function lh_hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
 
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
     
    if($template_file == 'page-templates/homepage.php' || $template_file == 'page-templates/digital-marketing.php' || $template_file == 'page-templates/merchant-processing.php' || $template_file == 'page-templates/hr.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}

// Register nav menu for secondary top menu
function lh_register_my_menu() {
    register_nav_menu('main-nav-login-menu',__( 'Login and Get Started Menu' ));
    register_nav_menu('mobile-nav-menu',__( 'Mobile Menu' ));
}
add_action( 'init', 'lh_register_my_menu' );


  
// Custom Widget area for footer
function lh_register_widget_areas() {
    register_sidebar( array(
        'name'          => 'Footer Bottom Copyright Area',
        'id'            => 'lh-bottom-footer-widget',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'description'   => 'This is the left side of the Bottom Footer section. Add copyright info here.',
    ) );

    register_sidebar( array(
        'name'          => 'Footer Bottom Bar Social Media',
        'id'            => 'lh-bottom-footer-social',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'description'   => 'This is the right side of the Bottom Footer section. Add social media icons and links here.',
    ) );

    register_sidebar( array(
        'name'          => 'Top Footer Left',
        'id'            => 'lh-top-footer-one',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'description'   => 'This is the right side of the Top Footer section. NOTE: left AND right side must have content to show.',
    ) );

    register_sidebar( array(
        'name'          => 'Top Footer Right',
        'id'            => 'lh-top-footer-two',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'description'   => 'This is the right side of the Top Footer section. NOTE: right AND left side must have content to show.',
    ) );
 
}
add_action( 'widgets_init', 'lh_register_widget_areas' );




// customize "Read More" links on blog page

if ( ! function_exists( 'understrap_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function understrap_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' [...]<p><a class="btn text-primary text-center understrap-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'read more',
			'understrap' ) . '</a></p>';
		}
		return $post_excerpt;
	}
}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );


// Allow SVG upload 
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');


add_action('wp_logout','auto_redirect_external_after_logout');
function auto_redirect_external_after_logout(){
wp_redirect( 'https://www.loyaltyhealth.com/membership-signup/' );
exit();
}


add_action( 'init', 'agent_blog_cpt' );

function agent_blog_cpt() {
    register_post_type( 'agent', array(
        'labels' => array(
            'name' => 'Sales',
            'singular_name' => 'Agent',
        ),
        'description' => 'Agent which we will be discussing on this blog.',
        'public' => true,
        'menu_position' => 20,
        'supports' => array( 'title', 'editor', 'custom-fields' )
    ));
}

add_action( 'gform_after_submission', 'get_recent_gravity_form_entry', 10, 2 );
function get_recent_gravity_form_entry( $entry, $form ) {



    $entries = GFAPI::get_entries( $form['id'], array(), null, array( 'offset' => 0, 'page_size' => 1, 'orderby' => 'id', 'order' => 'DESC' ) );

    if ( ! empty( $entries ) ) {
        $entry = $entries[0];
//
//  echo '<pre>';
//        print_r( $entry);
//        echo '</pre>';


        // now you can access the values of the most recently submitted entry
        $value_1 = $entry['1'];
        $value_2 = $entry['2'];
        // etc.



    }



   // exit;


    //$form_id = 1;
    $template_id = '4';

// Get the form entries
    $entries = GFAPI::get_entries( $form['id'], array( 'status' => 'active', 'page_size' => 1 ) );

// Format the form data as HTML
   // $html = '<table>';

    $htmlFinal='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.cdnfonts.com/css/cabin-3" rel="stylesheet">
    <style>@import url(https://fonts.cdnfonts.com/css/cabin-3);
    @import url(https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=Josefin+Sans:wght@400;500;600;700&display=swap);

    html {
        font-family: Cabin, Helvetica, sans-serif
    }

    #gform_fields_4 input[type="text"],
    #gform_fields_4 input[type="email"]{
        font-family:Cabin,Helvetica,sans-serif;
        border:2px solid #d1d9e4;
        margin-bottom:10px!important;
        color:#a0aec3;
        font-size:15px;width:100%;
    }

    *, body {
        margin: 0;
        padding: 0
    }

    label {
        display: inline-block;
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
        padding: 0
    }

    input[type="text"]{
        height:40px;
    }

    .table{
        display:table;
    }

    .table-row{
        display:table-row;
    }

    .table-cell{
        display:table-cell;
        width:300px;
        padding-left:15px;
    }

    h2 {
        font-size: 24px;
        display: flex;
        font-family: Cabin, Helvetica, sans-serif;
        text-transform: uppercase;
        justify-content: center;
        margin-bottom: 20px
    }
div {
  margin-bottom: 25px !important;
}
    h3 {
        font-family: Cabin, Helvetica, sans-serif;
        line-height:50px;
    }</style>
</head>
<body>
<div class="container" style="width:650px;margin:0 auto">
    <div style="max-width:600px">
        <div style="width:100%" id="gform_fields_4">
            <h2 style="padding-top:30px">Your Company Business Information</h2>
            <div class="table">
                <div class="table-row">
                    <div class="table-cell" style="margin-top:20px;">
                        <label>Company Name</label>
                        <input type="text" value="My Company" placeholder="Enter Your company name" aria-invalid="false">
                    </div>
                    <div class="table-cell" style="margin-top:20px;">
                        <label>Full Contact Name</label>
                        <input type="text" value="" class="large" placeholder="Enter Your Full Name" aria-invalid="false">
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell" style="margin-top:20px;">
                        <label>Business Address</label>
                        <input type="text" aria-invalid="false">
                    </div>
                    <div class="table-cell" style="margin-top:20px">
                        <label>City</label>
                        <input id="input_4_5" type="text" value="">
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell" style="margin-top:20px">
                        <label>State</label>
                        <input type="text" value="">
                    </div>
                    <div class="table-cell" style="margin-top:20px">
                        <label>Phone Number</label>
                        <input type="text" value="">
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell" style="margin-top:20px">
                        <label>Zip</label>
                        <input type="text" value="">
                    </div>
                    <div class="table-cell" style="margin-top:20px">
                        <label>Website</label>
                        <input type="text" value="">
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell" style="margin-top:20px">
                        <label>Email Address</label>
                        <input type="text" value="">
                    </div>
                </div>
            </div>
    <div style="page-break-before:always"></div>

            <div style="margin-top:20px" style="grid-column:span 12;min-width:0">
                <div style="text-align:center; padding-top:30px;"><h2>Benefits</h2>
                    <div style="text-align:center;">
                        <div style="position:relative;width:100%;">
                            <div style="background:#e8fff2;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="green">PLUS&nbsp;&nbsp;</span>So much more ALL included!
                    </div>
                    <div class="blue-bg"
                         style="background:#e4f6ff;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="blue" style="color:#08a5f6">24/7/365&nbsp;&nbsp;</span>Monitoring and
                        performance testing of your account
                    </div>
                    <div class="green-bg"
                         style="background:#e8fff2;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="green" style="color:#00b050">DEDICATED&nbsp;&nbsp;</span>Client Success
                        Manager for you and your business
                    </div>
                    <div class="blue-bg"
                         style="background:#e4f6ff;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="blue" style="color:#08a5f6">GOOGLE &nbsp;&nbsp;</span>Local Service Ads
                        (LSA) Mgmt (Ad spend separate)
                    </div>

                    <div class="green-bg"
                         style="background:#e8fff2;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="green" style="color:#00b050">GOOGLE &nbsp;&nbsp;</span>Business Profile
                        GBP/GMB plus Maps Management
                    </div>
                    <div class="blue-bg"
                         style="background:#e4f6ff;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="blue" style="color:#08a5f6">CUSTOM</span>QR Codes that generate business
                        like magic
                    </div>
                    <div class="green-bg"
                         style="background:#e8fff2;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="green" style="color:#00b050">AUTOMATED 50 +  &nbsp;&nbsp;</span>Online
                        directories synchronized to your GBP
                    </div>
                    <div class="blue-bg"
                         style="background:#e4f6ff;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="blue" style="color:#08a5f6">AUTOMATED &nbsp;&nbsp;</span>Voice search
                        set-up (Siri, Alexa, Bixby, Cortana, etc.)
                    </div>
                    <div class="green-bg"
                         style="background:#e8fff2;margin-bottom:10px;padding:20px;font-family:Cabin,Helvetica,sans-serif">
                        <span class="green" style="color:#00b050">AUTOMATED &nbsp;&nbsp;</span>Unlimited Upsell
                        Surveys/feedback from your customers
                    </div>
                </div>
                
                    <div style="page-break-before:always"></div>

                <div style="position:relative;width:100%;">
                    <div class="blue-bg" style="background:#e4f6ff;margin-bottom:10px;padding:20px"><span
                            class="blue" style="color:#08a5f6">AUTOMATED &nbsp;&nbsp;</span>Invisible Geofencing
                        to dominate your competition
                    </div>
                    <div class="green-bg" style="background:#e8fff2;margin-bottom:10px;padding:20px"><span
                            class="green" style="color:#00b050; padding-rght:5px;">AUTOMATED &nbsp;&nbsp;</span>Analysis
                        of your TOP-3 competitors in your area
                    </div>
                    <div class="blue-bg" style="background:#e4f6ff;margin-bottom:10px;padding:20px"><span
                            class="blue" style="color:#08a5f6">AUTOMATED &nbsp;&nbsp;</span>Website analysis and
                        customer experience monitoring
                    </div>
                    <div class="green-bg" style="background:#e8fff2;margin-bottom:10px;padding:20px"><span
                            class="green" style="color:#00b050">INCLUDES 40,000 &nbsp;&nbsp;</span>Custom
                        Geofencing display ads promoting you
                    </div>
                    <div class="blue-bg" style="background:#e4f6ff;margin-bottom:10px;padding:20px"><span
                            class="blue" style="color:#08a5f6">ZERO FEE</span>Credit/Debit card processing +
                        FREE card terminal
                    </div>
                    <div class="blue-bg" style="background:#e4f6ff;margin-bottom:10px;padding:20px"><span
                            class="blue" style="color:#08a5f6">AUTOMATED &nbsp;&nbsp;</span>Review responses to
                        all your customers reviews
                    </div>
                    <div class="green-bg" style="background:#e8fff2;margin-bottom:10px;padding:20px"><span
                            class="green" style="color:#00b050;">AUTOMATED &nbsp;&nbsp;</span>Unlimited 5-Star
                        Reviews
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="page-break-before:always"></div>

    <div id="managed-services-section" style="background:#fff;box-shadow:0 0 69px rgba(0,0,0,.1);padding:20px">
        <div class="row" style="align-items:center;margin-left:0;margin-right:0">
            <div style="flex:0 0 100%;max-width:100%;position:relative;padding-right:15px;padding-left:15px">
                <div><h3
                        style="margin-bottom:0!important;color:#08a5f6!important;text-align:center;font-weight:600;font-size:1.5">
                    <span style="color:#000;font-size:2rem"><span style="color:#00b050">UNLIMITED&nbsp;&nbsp;</span>Exclusive New Customers</span>
                </h3>
                    <h3 style="margin-bottom:0!important;text-align:center;font-weight:600;font-size:1.5rem">
                        <span style="color:#00b050">UNLIMITED&nbsp;&nbsp;</span>5-Star Reviews +<span style="color:#00b050">UNLIMITED&nbsp;&nbsp;</span>Friends
                        & Family Referrals</h3>
                    <h3 style="text-align:center;font-weight:600;font-size:1.5rem"><span
                            style="color:#00b050;text-align:center;font-weight:600;font-size:1.5rem">ZERO  &nbsp;&nbsp;</span>Fee
                        Customer Credit Card Processing</h3></div>
                <div style="margin:50px auto"><h3
                        style="line-height:30px;font-weight:600;font-size:1.5rem;color:#08a5f6!important;text-align:center">
                    OUR 24/7 FULLY MANAGED SERVICES… ONLY $1997/PER MONTH</h3></div>
                <h3 style="text-align:center;font-weight:600;font-size:1.5rem">100% Risk Free / Month to Month /
                    Cancel Anytime</h3></div>
        </div>
    </div>
    <div style="page-break-before:always"></div>

    <div style="margin-top:20px"><h2>Cardholder Information<span></span></h2>Cardholder authorizes Loyalty Health
        for charges to credit/debit card for agreed upon purchases and services
    </div>
    <div class="main-sec" style="">
        <div class="one-sect">
            <div style="margin-top:20px"><label>Cardholder Name</label>
                <div><input name="input_13" id="input_4_13" type="text" value="" class="large"
                            style="font-family:Cabin,Helvetica,sans-serif;padding:8px;border:2px solid #d1d9e4;padding:20px 30px!important;margin-bottom:10px!important;width:80%"
                            placeholder="Enter Cardholder Name" aria-required="true" aria-invalid="false"></div>
            </div>
            <div style="margin-top:20px" id="field_4_15" data-js-reload="field_4_15"><label class=""
                                                                                            for="input_4_15">Card
                Number</label>
                <div><input name="input_15" id="input_4_15" type="text" value="" class="large"
                            style="font-family:Cabin,Helvetica,sans-serif;padding:8px;border:2px solid #d1d9e4;padding:20px 30px!important;margin-bottom:10px!important;width:80%"
                            placeholder="Card Number" aria-required="true" aria-invalid="false"></div>
            </div>
            <fieldset style="margin-top:20px;border:0">
                <legend>Electronic Signature</legend>
                <div style="margin-top:20px">
                    <div>
                        <div><input type="checkbox"
                                    value="By clicking this box, I accept this as my electronic signature"
                                    id="choice_4_21_1"><label for="choice_4_21_1" id="label_4_21_1">By clicking this
                            box, I accept this as my electronic signature</label></div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="two-sec">
            <div style="margin-top:20px" id="field_4_25"><label>Expiration Date</label>
                <div><input name="input_25" id="input_4_25" type="text" value="" class="large"
                            style="font-family:Cabin,Helvetica,sans-serif;padding:8px;border:2px solid #d1d9e4;padding:20px 30px!important;margin-bottom:10px!important;width:80%"
                            aria-required="true" aria-invalid="false"></div>
            </div>
            <div style="margin-top:20px"><label>CVV Security Code</label>
                <div><input name="input_16" id="input_4_16" type="text" value="" class="large"
                            style="font-family:Cabin,Helvetica,sans-serif;padding:8px;border:2px solid #d1d9e4;padding:20px 30px!important;margin-bottom:10px!important;width:80%"
                            placeholder="CVV Security Code" aria-required="true" aria-invalid="false"></div>
            </div>
            <div style="margin-top:20px"><label>Your Electronic Signature</label>
                <div><input name="input_22" id="input_4_22" type="text" value="" class="large"
                            style="font-family:Cabin,Helvetica,sans-serif;padding:8px;border:2px solid #d1d9e4;padding:20px 30px!important;margin-bottom:10px!important;width:80%"
                            placeholder="Your Electronic Signature" aria-required="true" aria-invalid="false"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
';
//    foreach ($entries as $entry) {
//        $html .= '<tr><td>' . $entry['id'] . '</td><td>' . $entry['date_created'] . '</td></tr>';
//    }
//    $html .= '</table>';

// Get the HTML content to be converted to PDF
// Create a new instance of the DOMPDF class
    $dompdf = new Dompdf();
    $header_html = '<div style="text-align:center; font-size: 12px;"><img src="https://loyaltyhea1dev.wpengine.com/wp-content/uploads/2022/10/cropped-LH-logo-color-FontRaleway-jpg@2x.png" alt="Loyalty Health"> </div>';
    $html = file_get_contents('https://loyaltyhea1dev.wpengine.com/test');

// set the header options
    $options = [
        'isPhpEnabled' => true,
        'header-html' => $header_html,
        'header-spacing' => '10',
    ];

    $dompdf->loadHtml($html);

// Load the HTML content into the DOMPDF object
//    $dompdf->loadHtml($htmlFinal);

// Set the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
    $dompdf->render();
    $dompdf->output('example.pdf');



// Output the PDF as a file
    $dompdf->stream('document.pdf', array('Attachment' => false));
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="my_pdf.pdf"');
    exit;

    // Get the most recent entry


    $pdf_id = 1; // ID of the PDF you want to generate
    $entry_id = 123; // ID of the entry you want to use as data for the PDF
    $options = array(); // Additional options for the PDF generator

   // $pdf_data = gf_pdfextended_api_generate_pdf($template_id, $form['id'], $options);
   // echo $pdf_data;exit;
// Generate the PDF using Gravity PDF
//    $pdf = GravityPDF::generate(array(
//        'form_id' => $form['id'],
//        'template_id' => $template_id,
//        'filename' => 'my_pdf.pdf',
//        'data' => $html
//    ));
    $pdf_template = GPDFAPI::get_template( $template_id );

    echo $html;exit;
    $pdf_data = GPDFAPI::generate_pdf( $pdf_template, $entries );
    file_put_contents( 'my-pdf-file.pdf', $pdf_data );

// Output the PDF file
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="my_pdf.pdf"');
    echo $pdf_data;


    // Do something with the most recent entry
    // For example, you can access the fields of the entry like this:

  //  print_r($recent_entry);

}