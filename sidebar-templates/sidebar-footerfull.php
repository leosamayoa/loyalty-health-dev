<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<div class="<?php echo esc_attr( $container ); ?> p-0">

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

		<div class="wrapper px-75 py-100" id="wrapper-footer-full">

			<div id="footer-full-content" tabindex="-1">

				<div class="row justify-content-between align-items-center">

					<?php dynamic_sidebar( 'footerfull' ); ?>

				</div>

			</div>
			
		</div>

	</div><!-- end #wrapper-footer-full -->

<?php endif;