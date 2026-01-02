<?php
/**
 * KurumsalPress Theme Functions
 *
 * @package KurumsalPress
 * @author IntegrumArt
 * @version 1.0.0
 */

// Prevent direct file access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function kurumsalpress_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 630, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'kurumsalpress' ),
        'footer'  => esc_html__( 'Footer Menu', 'kurumsalpress' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'kurumsalpress_setup' );

/**
 * Enqueue scripts and styles
 */
function kurumsalpress_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 
        'kurumsalpress-style', 
        get_stylesheet_uri(), 
        array(), 
        wp_get_theme()->get( 'Version' )
    );

    // Enqueue navigation script (if needed in future)
    wp_enqueue_script( 
        'kurumsalpress-navigation', 
        get_template_directory_uri() . '/js/navigation.js', 
        array(), 
        wp_get_theme()->get( 'Version' ), 
        true 
    );

    // Add comment reply script for threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'kurumsalpress_scripts' );

/**
 * Register widget areas
 */
function kurumsalpress_widgets_init() {
    // Footer Widget Areas
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 1', 'kurumsalpress' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 2', 'kurumsalpress' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 3', 'kurumsalpress' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'kurumsalpress_widgets_init' );

/**
 * Set content width
 */
function kurumsalpress_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'kurumsalpress_content_width', 1200 );
}
add_action( 'after_setup_theme', 'kurumsalpress_content_width', 0 );
