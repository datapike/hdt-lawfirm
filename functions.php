<?php
/**
 * HDT Lawfirm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HDT_Lawfirm
 */

if ( ! function_exists( 'hdt_lawfirm_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hdt_lawfirm_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on HDT Lawfirm, use a find and replace
	 * to change 'hdt-lawfirm' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hdt-lawfirm', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'hdt-lawfirm' ),
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
	add_theme_support( 'custom-background', apply_filters( 'hdt_lawfirm_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'hdt_lawfirm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hdt_lawfirm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hdt_lawfirm_content_width', 640 );
}
add_action( 'after_setup_theme', 'hdt_lawfirm_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hdt_lawfirm_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hdt-lawfirm' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hdt-lawfirm' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hdt_lawfirm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hdt_lawfirm_scripts() {
	wp_enqueue_style( 'hdt-lawfirm-style', get_stylesheet_uri() );

	wp_enqueue_script( 'hdt-lawfirm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hdt-lawfirm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hdt_lawfirm_scripts' );

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



add_action('wp_enqueue_scripts', 'register_myscripts_scripts');
function register_myscripts_scripts(){
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.2-3.min.js', '2.2.3', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js');
}


// Register Custom Navigation Walker
//require_once('wp_bootstrap_navwalker.php');

function wpdocs_custom_excerpt_length( $length ) {
    return 75;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( ' <a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '[Read More]', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

	
add_action( 'widgets_init', 'qbs_widgets_init');
function qbs_widgets_init() {
	
	/* Top header widget area */
	register_sidebar( array(
		'name' => __( 'Top Header Sidebar', 'hdt-lawfirm' ),
		'id' => 'sidebar-header',
		'description' => __( 'Top header widget area', 'hdt-lawfirm' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Sidebar', 'hdt-lawfirm' ),
		'id' => 'sidebar-home',
		'description' => __( 'Homepage widget area', 'hdt-lawfirm' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}