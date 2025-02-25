<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _cg
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/page-transition.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/page-transition.js" defer></script>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="page opacity-0 transition-opacity duration-500 binary-background">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', '_cg' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="content">
