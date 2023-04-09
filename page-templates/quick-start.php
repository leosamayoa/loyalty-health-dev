<?php
/**
 * Template Name: Quick Start
 *
 * This is the same as the blank template but queries the correct JS
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<script>
window.addEventListener(
  "scroll",
  () => {
    document.body.style.setProperty(
      "--scroll",
      window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
    );
  },
  false
);
</script>

<style>
	.in-left div{
		animation: rotate 1s linear infinite;
		animation-play-state: paused;
		animation-delay: calc(var(--scroll) * -1s);
		animation-iteration-count: 1;
		animation-fill-mode: both;
	}

</style>

<div class="wrapper bg-white p-0" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

		<header class="entry-header blue-bg">

			<div class="container">
				<div class="row justify-content-center">
					<?php echo '<h1 class="entry-title text-center fs-70">' . get_the_title() . '</h1>'; ?>
					<h2 class="cabin text-center fw-600 page-subheading"><span class="page_toptitle">Geofencing & all services set-up within 72 hours!</span></h2>
				</div>
			</div>

		</header><!-- .entry-header -->

		<div class="row">
			<main class="site-main pt-0" id="main">
				
					<?php/* while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					<?php endwhile;  */?>


				<div class="container">
					<div class="quick-start-wrap">
						<?php echo do_shortcode('[gravityform id="2" title="true"]'); ?>
					</div>
				</div>


			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->





<?php get_footer();