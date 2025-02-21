<?php
/**
 * Template Name: Services Overview Page Template
 * Template Post Type: service
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

				get_template_part( '/template-parts/content/content', 'overview' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
