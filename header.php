<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N7LQWS3');</script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161878099-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-161878099-1');

			function getBrowserData() {
	var navigator = window.navigator;

	var data = {
		acceptHeader: 'application/json',
		userAgent: navigator.userAgent,
		language: navigator.language,
		timezone: (new Date()).getTimezoneOffset().toString(),
		colorDepth: screen.colorDepth,
		screen: {
			height: screen.height.toString(),
			width: screen.width.toString()
		},
		javaScriptEnabled: true,
		javaEnabled: navigator.javaEnabled()
	};

	return JSON.stringify(data);
}


		</script>
	<!-- End Google Tag Manager -->


    <?php wp_head(); ?>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet"> -->

	<?php $css_ver = date( "ymd-Gis", filemtime( get_stylesheet_directory() . '/style.css' ) ); ?>

	<link rel="stylesheet" href="/wp-content/themes/understrap-child/style.css?<?php echo $css_ver ?>">


	<style>
		#wrapper-navbar .navbar #navbarNavDropdown #main-menu .dropdown-menu li.nav-digital-marketing {
			background-image: url(/wp-content/themes/understrap-child/images/companies.svg);
		}
	</style>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7LQWS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php do_action( 'wp_body_open' ); ?>

<div id="lh-cursor" class="d-none d-md-flex justify-content-center align-items-center position-absolute"><div id="blue-dot"></div></div>

<div class="site bg-white" id="page">
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="bg-white" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light pt-150 px-75 py-0">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>
			<div class="d-flex justify-content-between w-100">
				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php  echo esc_url( home_url( '/' ) ); ?>" title="<?php  echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php  bloginfo( 'name' ); ?></a></h1>

					<?php else : ?>

						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="/wp-content/themes/understrap-child/images/LH-logo-black-1.svg" alt="equals icon">
						</a>

						<a class="header-phone" href="tel:800-411-6022"><i class="fa fa-phone"></i> 800.411.6022</a>

					<?php endif; ?>


				<?php } else { ?>
					<div class="logo-wrap">
						<div class="light-mode-logo">
							<?php the_custom_logo(); ?>
							<a class="header-phone" href="tel:800-411-6022"><i class="fa fa-phone"></i> 800.411.6022</a>
						</div>

						 <div class="dark-mode-logo">
						 	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand custom-logo-link" rel="home">
							   <img src="/wp-content/themes/understrap-child/images/LH-Logo-White.png" alt="Loyalty Health Logo">
							</a>
							<a class="header-phone" href="tel:800-411-6022"><i class="fa fa-phone"></i> 800.411.6022</a>
						 </div>
					</div>

				<?php } ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-nav-wrap" aria-controls="mobile-nav-wrap" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

				<?php if(is_front_page()) {
					$sign_in_color_class = 'home';
				} else {
					$sign_in_color_class = 'not-home';
				} ?>
				<div class="quick_btnbox">
					<a class="bg-blue btn btn-default btn-animate btn-animate-black text-white text-uppercase wp-dark-mode-ignore" href="/quick-start" rel="noopener"><span>QUICK START</span></a>
				</div>
				<!--  Mobile Nav Menu -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'mobile-nav-menu',
						'container_class' => 'collapse navbar-collapse position-absolute w-100 px-75',
						'container_id'    => 'mobile-nav-wrap',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'mobile-nav-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				</div>
			<?php if ( 'container' == $container ) : ?>
				</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->