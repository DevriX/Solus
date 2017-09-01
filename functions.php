<?php
/**
 * Solus functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Solus
 */
if ( ! function_exists( 'solus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function solus_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Solus, use a find and replace
	 * to change 'solus' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'solus', get_template_directory() . '/languages' );
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
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'solus' )
		) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'solus_custom_background_args', array(
		'default-color' => '1d222b',
		'default-image' => '',
		) ) );
}
endif; // solus_setup
add_action( 'after_setup_theme', 'solus_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function solus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'solus_content_width', 640 );
}
add_action( 'after_setup_theme', 'solus_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function solus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'solus' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-1', 'solus' ),
		'id'            => 'footer-widget-1',
		'description'   => 'Footer Widget 1',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
		) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-2', 'solus' ),
		'id'            => 'footer-widget-2',
		'description'   => 'Footer Widget 2',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
		) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-3', 'solus' ),
		'id'            => 'footer-widget-3',
		'description'   => 'Footer Widget 3',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
		) );
	
}
add_action( 'widgets_init', 'solus_widgets_init' );

function solus_excerpt_length($length) {
	return 160;
}
add_filter('excerpt_length', 'solus_excerpt_length', 999);
/**
 * Enqueue scripts and styles.
 */
function solus_scripts() {
	wp_enqueue_style( 'solus-style', get_stylesheet_uri() );
	wp_enqueue_style( 'solus-responsive-css', get_template_directory_uri() . '/responsive.css');
	wp_enqueue_style( 'font-icons-css', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
	wp_enqueue_script( 'solus-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'solus-navigation-heler', get_template_directory_uri() . '/js/helpers.js', array('jquery'), '20120206', true );
	wp_register_style('Open-sans', "http" . ( is_ssl() == 1 ? "s" : "") . '://fonts.googleapis.com/css?family=Open+Sans:400,800,300,700');
	wp_enqueue_style('Open-sans');
	wp_enqueue_script( 'solus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'solus_scripts' );

/**
 * Customizer stylesheet
 */
function solus_customizer_stylesheet() {
	wp_register_style( 'customizer-css', get_template_directory_uri() . '/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'customizer-css' );
	wp_enqueue_style( 'font-icons-css', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
}
add_action( 'customize_controls_print_styles', 'solus_customizer_stylesheet' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );