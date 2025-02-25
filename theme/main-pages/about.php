<?php
/**
 * Template Name: About Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _ccg
 */

get_header();
?>

<section id="primary">
    <main id="main">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content/content', 'about');
        endwhile;
        ?>
    </main>
</section>

<?php
get_footer(); 