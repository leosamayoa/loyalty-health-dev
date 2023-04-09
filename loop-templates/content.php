<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-50 card-wrap">
	<div class="card">

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<header class="entry-header px-xl-4 p-3 pt-3">
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</header><!-- .entry-header -->

			<div class="entry-content p-3 px-xl-4">

				<?php the_excerpt(); ?>


			</div><!-- .entry-content -->

		</article><!-- #post-## -->
	</div>
</div>