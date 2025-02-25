<?php
/**
 * _cg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _cg
 */

if ( ! defined( '_CG_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( '_CG_VERSION', '0.1.0' );
}

if ( ! defined( '_CG_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `_cg_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'_CG_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( '_cg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _cg_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _cg, use a find and replace
		 * to change '_cg' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_cg', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', '_cg' ),
				'footer-1' => esc_html__( 'Footer Quick Links', '_cg' ),
				'footer-2' => esc_html__( 'Footer Resources', '_cg' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', '_cg_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _cg_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', '_cg' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', '_cg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_cg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _cg_scripts() {
    // Enqueue styles
    wp_enqueue_style('_cg-style', get_stylesheet_uri(), array(), _CG_VERSION);
    wp_enqueue_style('_cg-page-transition', get_template_directory_uri() . '/js/page-transition.css', array(), _CG_VERSION);
    wp_enqueue_style('_cg-navigation', get_template_directory_uri() . '/js/navigation.css', array(), _CG_VERSION);

    // Make sure jQuery is loaded in the header
    wp_enqueue_script('jquery');

    // Enqueue our scripts in footer with jQuery dependency
    wp_register_script('_cg-page-transition', get_template_directory_uri() . '/js/page-transition.js', array('jquery'), _CG_VERSION, true);
    wp_register_script('_cg-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _CG_VERSION, true);
    wp_register_script('_cg-script', get_template_directory_uri() . '/js/script.min.js', array('jquery'), _CG_VERSION, true);

    // Add AOS library
    if (is_front_page()) {
        wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null);
        wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
        
        // Add hero animations script
        wp_enqueue_script(
            '_cg-hero-animations',
            get_template_directory_uri() . '/js/hero-animations.js',
            array('aos-js'),
            _CG_VERSION,
            true
        );
    }

    // Add binary background script
    wp_enqueue_script(
        '_cg-binary-background',
        get_template_directory_uri() . '/js/binary-background.js',
        array(),
        _CG_VERSION,
        true
    );

    // Localize the script with site data
    wp_localize_script('_cg-page-transition', '_cgData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'homeUrl' => home_url()
    ));

    // Enqueue the scripts
    wp_enqueue_script('_cg-page-transition');
    wp_enqueue_script('_cg-navigation');
    wp_enqueue_script('_cg-script');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action( 'wp_enqueue_scripts', '_cg_scripts' );

/**
 * Enqueue layout-specific scripts
 */
function cg_enqueue_layout_scripts() {
    if (is_page_template('page-about.php')) {
        wp_enqueue_script(
            'layout-423-animations',
            get_template_directory_uri() . '/theme/js/layout-423-animations.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'cg_enqueue_layout_scripts');

/**
 * Enqueue the block editor script.
 */
function _cg_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'_cg-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			_CG_VERSION,
			true
		);
		wp_add_inline_script( '_cg-editor', "tailwindTypographyClasses = '" . esc_attr( _CG_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', '_cg_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function _cg_tinymce_add_class( $settings ) {
	$settings['body_class'] = _CG_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', '_cg_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

// Include custom nav walker
require get_template_directory() . '/inc/class-custom-walker-nav-menu.php';

// Add ACF Options Page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
