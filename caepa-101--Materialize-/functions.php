<?php
/**
 * CAEPA-101 functions and definitions
 *
 * @package CAEPA-101
 */

if ( ! function_exists( 'caepa_101_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function caepa_101_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CAEPA-101, use a find and replace
	 * to change 'caepa-101' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'caepa-101', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'caepa-101' ),
		'secondary' => esc_html__( 'Footer Menu', 'caepa-101' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'caepa_101_custom_background_args', array(
		'default-color' => '#fcfcfc',
		'default-image' => '',
	) ) );
    
	/*
	 * Enable support for Subtitle Custom Post Types.
	 * See https://github.com/benhuson/wp-subtitle/wiki
	 */
    add_post_type_support( 'event', 'wps_subtitle' );
    
}
endif; // caepa_101_setup
add_action( 'after_setup_theme', 'caepa_101_setup' );

/**
 * stops tinymce from removing tags between text and visual views... maybe excessive variable ...
 * hmmm... this looks interesting > http://www.tinymce.com/tryit/full.php
 */
function caepa_101_tinymce_fix( $init ) {

    // html elements being stripped
    $init['valid_elements'] = '+*[*]';
    return $init;
}

add_filter('tiny_mce_before_init', 'caepa_101_tinymce_fix');


/**
 * Apply theme's stylesheet to the visual editor.
 * Remove get_stylesheet_uri() and replace it with 'your-custom-styles.css'
 *
 * @uses add_editor_style() Links a stylesheet to visual editor
 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
 */
function cd_add_editor_styles() {

    add_editor_style( 'materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css' );
}

add_action( 'init', 'cd_add_editor_styles' ); // adds stylesheet to editor

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function caepa_101_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'caepa_101_content_width', 640 );
}
add_action( 'after_setup_theme', 'caepa_101_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function caepa_101_widgets_init() {
    
	register_sidebar( array(
		'name'          => esc_html__( 'FrontPage', 'caepa-101' ),
		'id'            => 'frontpage-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Advocacy', 'caepa-101' ),
		'id'            => 'advocacy-01',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="%2$s entry-content col s12 m4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Communications', 'caepa-101' ),
		'id'            => 'communications-01',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="%2$s entry-content col s12 m4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Conferences', 'caepa-101' ),
		'id'            => 'conferences-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Contact', 'caepa-101' ),
		'id'            => 'contact-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Directory', 'caepa-101' ),
		'id'            => 'directory-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Executive', 'caepa-101' ),
		'id'            => 'executive-01',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="%2$s entry-content col s12 m4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Forum', 'caepa-101' ),
		'id'            => 'forum-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'History', 'caepa-101' ),
		'id'            => 'history-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Links', 'caepa-101' ),
		'id'            => 'links-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'News', 'caepa-101' ),
		'id'            => 'news-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Professional Development', 'caepa-101' ),
		'id'            => 'professional-development-01',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="%2$s entry-content col s12 m4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'The Board', 'caepa-101' ),
		'id'            => 'the_board-01',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s entry-content">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Global Sidebar', 'caepa-101' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="%2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Left', 'caepa-101' ),
		'id'            => 'footer-01',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '',
	) );register_sidebar( array(
		'name'          => esc_html__( 'Footer Right', 'caepa-101' ),
		'id'            => 'footer-02',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'caepa_101_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function caepa_101_scripts() {
    
	wp_enqueue_style( 'caepa-101-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css' );
    
    wp_enqueue_style( 'materialize-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    
    wp_enqueue_style( 'font-awsome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
    
    wp_enqueue_style( 'caepa-101-my.css', get_template_directory_uri() . '/css/my.css');
    
    /** 
     * Conditional load of JQuery when not in the admin screens
     */
    if( !is_admin() ){
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("https://code.jquery.com/jquery-2.1.1.min.js"), false, '');
        wp_enqueue_script('jquery');
    }

	wp_enqueue_script( 'materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js' );
    
    wp_enqueue_script( 'twitter.js', 'https://platform.twitter.com/widgets.js' );
    
    wp_enqueue_script( 're-captcha.js', 'https://www.google.com/recaptcha/api.js' );
    
	wp_enqueue_script( 'caepa-101-my.js', get_template_directory_uri() . '/js/my.js' );
    
	wp_enqueue_script( 'caepa-101-my.js', get_template_directory_uri() . '/js/my_admin.js' );
    
	wp_enqueue_script( 'caepa-101-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'caepa_101_scripts' );

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

// Unregister All Default WordPress Widgets
function unregister_default_widgets() {     
    unregister_widget('WP_Widget_Pages');     
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    //unregister_widget('WP_Widget_Search');
    //unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
    }

add_action('widgets_init', 'unregister_default_widgets', 11);

function caepa_101_deregister_styles() {    
    wp_deregister_style( 'author-avatars-shortcode' );    
    wp_deregister_style( 'author-avatars-widget' );
    wp_deregister_style( 'pods-form' );
}
add_action( 'wp_print_styles', 'caepa_101_deregister_styles', 100 );



?>
