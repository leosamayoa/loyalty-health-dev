<?php
/**
 * Template Name: Homepage Template
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

<div id="homepage-wrapper" class="bg-white">

		<div class="<?php echo esc_attr( $container ); ?> p-0" id="content" tabindex="-1">

			<div class="row">

				<main class="site-main" id="homepage-main">

					<?php while ( have_posts() ) : the_post(); ?>   
						<?php
						// check for ACF
							if (class_exists('ACF')) : ?>

								<div id="homepage-top-section-wrapper">
								
									<?php /** Homepage Sections */ ?>
									<?php get_template_part('template-parts/home-section-one'); ?>

								</div><!-- #homepage-top-section-wrapper -->


								<?php get_template_part('template-parts/home-section-two'); ?>
								<?php get_template_part('template-parts/home-section-three'); ?>
								<?php get_template_part('template-parts/home-section-four'); ?>
								<?php get_template_part('template-parts/home-section-five'); ?>
								<?php get_template_part('template-parts/home-section-six'); ?>
								<?php get_template_part('template-parts/home-section-seven'); ?>

							<?php else : ?>

								<p>Please activate ACF</p>

							<?php endif; ?>


					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- .row -->

		</div><!-- #content -->
	

</div><!-- #page-wrapper -->

<?php get_footer();
