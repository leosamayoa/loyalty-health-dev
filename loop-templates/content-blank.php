<?php
/**
 * Blank content partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


get_header();


?>

    <header class="entry-header">

		<?php the_title( '<h1 class="entry-title text-center outline-black fs-70">', '</h1>' ); ?>

	</header><!-- .entry-header -->
    
    <?php 
    the_content();
