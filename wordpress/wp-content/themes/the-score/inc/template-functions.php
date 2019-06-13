<?php 
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'the_score_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function the_score_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'the-score', get_template_directory() . '/languages' );

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
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * WooCommerce Support
		 */		
		add_theme_support( 'woocommerce' );
		/*
		 * Gutenberg Support
		 */			
		add_theme_support( 'align-wide' );
		add_theme_support( 'disable-custom-font-sizes');
		add_theme_support( 'disable-custom-colors' );
		add_theme_support( 'wp-block-styles' );		
		add_theme_support( 'responsive-embeds' );
		// This theme uses wp_nav_menu() in one location.
		add_theme_support( 'nav-menus' );
		register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'the-score' )) );
		register_nav_menu('primary', esc_html__( 'Primary', 'the-score' ) );
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
		add_theme_support( 'custom-background', apply_filters( 'the_score_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 140,
			'flex-width'  => true,
			'flex-height' => false,
		) );
	}
endif;
add_action( 'after_setup_theme', 'the_score_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function the_score_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'the_score_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_score_content_width', 0 );

/**
 * Register widget area.
 */
function the_score_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-score' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-score' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'the-score' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'the-score' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'the-score' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'the-score' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'the_score_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_score_scripts() {
	wp_enqueue_style( 'score-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'photo-font', '//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' );
	wp_enqueue_style( 'score-default-menu', get_template_directory_uri() . '/css/default.css');
	wp_enqueue_style( 'score-component-menu', get_template_directory_uri() . '/css/component.css');
	wp_enqueue_style( 'score-image', get_template_directory_uri() . '/css/image.css');
	wp_enqueue_style( 'score-woo-css', get_template_directory_uri() . '/inc/woocommerce/woo-css.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0'  );	
	wp_enqueue_script( 'jquery');	


	wp_enqueue_script( 'score-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '', true );


    wp_enqueue_script( 'dlmenu', get_template_directory_uri() . '/js/jquery.dlmenu.js', array(), '', true );
    wp_enqueue_script( 'dlmenu-footer', get_template_directory_uri() . '/js/dlmenu-footer.js', array(), '', true );
	wp_enqueue_script( 'score-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );
	wp_enqueue_script( 'mobile-menu-toggle.', get_template_directory_uri() . '/js/mobile-menu-toggle.js', array(), '', true );	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_score_scripts' );

/**
 * Admin scripts and styles.
 */
function the_score_admin_scripts() {
	wp_enqueue_style( 'score-admin-css', get_template_directory_uri() . '/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'the_score_admin_scripts' );

/**
 * Includes
 */

require get_template_directory() . '/framework/kirki/kirki.php';
require get_template_directory() . '/framework/letters/anime.php'; 
require get_template_directory() . '/inc/content-width.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/before-header.php';
require get_template_directory() . '/inc/header-top.php';
require get_template_directory() . '/inc/woocommerce/woo-functions.php';
require get_template_directory() . '/inc/back-to-top.php';
require get_template_directory() . '/inc/read-more.php';
require get_template_directory() . '/inc/social.php';
require get_template_directory() . '/inc/pro/pro.php';
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Adds custom classes to the array of body classes.
 */

function the_score_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'the_score_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function the_score_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'the_score_pingback_header' );


/**
Sidebar Options
 */
function the_score_sidebar_width () { 
	if((get_theme_mod('sidebar_width') && (get_theme_mod('sidebar_position') != 'no')) && is_active_sidebar('sidebar-1')) {
		
		$the_score_content_width = 100;
		$the_score_sidebar_width = get_theme_mod('sidebar_width');
		$the_score_sidebar_sum = $the_score_content_width - $the_score_sidebar_width;

		?>
		<style>
			#content #secondary {width: <?php echo get_theme_mod('sidebar_width'); ?>% !important;}
			#content #primary {width: <?php echo $the_score_sidebar_sum; ?>% !important;}
		</style>
		
	<?php }

}
add_action('wp_head','the_score_sidebar_width');

/**
 * Sidebar Position
 */
 
function the_score_sidebar_position() {
	if ((get_theme_mod( 'sidebar_position') =='left' && is_active_sidebar('sidebar-1'))) { 
		wp_enqueue_style( 'score-sidebar', get_template_directory_uri() . '/layouts/left-sidebar.css');
	}

	if ((get_theme_mod( 'sidebar_position') =='right' && is_active_sidebar('sidebar-1'))) { 
		wp_enqueue_style( 'score-sidebar', get_template_directory_uri() . '/layouts/right-sidebar.css');
	}

}
add_action( 'wp_enqueue_scripts', 'the_score_sidebar_position' );