<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header mb-100">

		<?php the_title( '<h1 class="entry-title outline-black text-center fs-70">', '</h1>' ); ?>

	</header><!-- .entry-header -->

    <div class="ft-img-wrap">
        <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
    </div>

	<div class="entry-content my-50">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
