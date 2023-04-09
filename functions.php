<?php
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