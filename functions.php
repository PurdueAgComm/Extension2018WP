<?php
/**
 * extension2018 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package extension2018
 */

if ( ! function_exists( 'extension2018_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function extension2018_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on extension2018, use a find and replace
		 * to change 'extension2018' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'extension2018', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'extension2018' ),
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
		add_theme_support( 'custom-background', apply_filters( 'extension2018_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'extension2018_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function extension2018_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'extension2018_content_width', 640 );
}
add_action( 'after_setup_theme', 'extension2018_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function extension2018_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'extension2018' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'extension2018' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'extension2018_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function extension2018_scripts() {
	wp_enqueue_style( 'extension-style', "https://extension.purdue.edu/_compiled/styles.css");

	wp_enqueue_style( 'extension2018-style', get_stylesheet_uri() );

	wp_enqueue_script( 'extension2018-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'extension2018-fa', 'https://use.fontawesome.com/releases/v5.0.10/js/all.js', array(), '20180919', true );

	wp_enqueue_script( 'extension2018-reveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', array(), '20180919', true );

	wp_enqueue_script( 'extension2018-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'extension2018_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

register_sidebar(array(
	'id'            => 'sidenav-sidebar',
	'name'          => 'Left Sidebar Navigation',
	'description'   => 'Appears only on 2 columnlayouts. You can use a text widget with an unordered list for navigation links. Alternatively, create a new menu and use the Custom Menu widget and visibility function.',
	'class'         => 'sidenav',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
	'before_widget' => '<div>',
	'after_widget'  => '</div><br>',
   ));

register_sidebar(array(
  'id'            => 'sidecontent',
  'name'          => 'Left Sidebar Content',
  'description'   => 'Appears only on 2 column layouts, here you can add custom content that will appear under your navigation.',
  'before_title'  => '<h5 class="widgettitle">',
  'after_title'   => '</h5>',
  'before_widget' => '<div id="%1$s">',
  'after_widget'  => '</div>',
));

// remove the [...] from the_excerpt output and just adds an elipses
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Load custom bootstrap navwalker for menus
 */

require_once('wp_bootstrap_navwalker.php');

// Register Custom Navigation Walker
require_once('wp_bootstrap_pagination.php');

/*  Add responsive container to embeds
/* ------------------------------------ */
function alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}

add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack


/**
* Create Custom Customize Settings for Extension
*/
function extension2018_new_customizer_settings($wp_customize) {

// Add Footer Section
$wp_customize->add_section('extension2018_settings', array(
'title' => 'Extension Settings',
'description' => 'Customize Extension-specific settings.',
'priority' => 10,
));

// add a setting for the address
$wp_customize->add_setting('extension2018_custom_address');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'extension2018_custom_address',
array(
'label' => 'Custom Address',
'section' => 'extension2018_settings',
'settings' => 'extension2018_custom_address',
) ) );
}


add_action('customize_register', 'extension2018_new_customizer_settings');
