<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper pb-0 bg-white" id="index-wrapper">

    <div class="<?php echo esc_attr( $container ); ?> pt-150 px-75" id="content" tabindex="-1">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="page-title outline-black">
                    <?php wp_title(''); ?>
                </h1>
            </div>
        </div>

		<div class="row">

			<main class="site-main" id="main">

                <?php 
                    // featured post that displays above all posts
                    $ft_post_args = array( 'posts_per_page' => 1, 'cat' => 4 );
                    $ft_post_query = new WP_Query( $ft_post_args ); 
                ?>

                <?php if ( $ft_post_query->have_posts() ) : ?>
                    <?php while ( $ft_post_query->have_posts() ) : $ft_post_query->the_post(); ?>

                       <div class="row ft-post-wrap py-100">
                            <div class="col-lg-7 col-xl-6 d-flex justify-content-center align-items-center p-0">
                                <div class="pr-75">
                                    <h2 class="entry-title text-primary mb-50">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="excerpt-wrap">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-6 ft-post-image-wrap p-0">
                                <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
               <?php wp_reset_postdata(); ?>
               <?php // end ft post section ?>

                <?php // the rest of the posts 
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $blog_posts_args = array( 
                        'posts_per_page' => 8,
                        'paged' => $paged,
                        'cat' => -4
                    );
                 ?>
                <?php query_posts($blog_posts_args); ?>
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
                    <div class="row blog-page-post-grid">

                        <?php while ( have_posts() ) : the_post(); ?>
                        
                                <?php
                                /*
                                * Include the Post-Format-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                */
                                get_template_part( 'loop-templates/content', get_post_format() );
                                ?>

                        <?php endwhile; ?>
                    </div>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

			</main><!-- #main -->

            <div class="ml-auto mb-100">
                <!-- The pagination component -->
                <?php understrap_pagination(); ?>

            </div>
            <?php wp_reset_postdata(); ?>


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer();
