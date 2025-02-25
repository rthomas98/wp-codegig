<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _cg
 */

get_header();
?>

	<section id="primary">
		<main id="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span aria-hidden="true">' . __( 'Next Post', '_cg' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Next post:', '_cg' ) . '</span> <br/>' .
								'<span>%title</span>',
							'prev_text' => '<span aria-hidden="true">' . __( 'Previous Post', '_cg' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Previous post:', '_cg' ) . '</span> <br/>' .
								'<span>%title</span>',
						)
					);
				}
			endwhile;
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
