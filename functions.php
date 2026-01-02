<?php
/**
 * KurumsalPress Theme Functions
 *
 * @package KurumsalPress
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function kurumsalpress_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 628, true );

    // Add custom image sizes
    add_image_size( 'kurumsalpress-featured', 1200, 600, true );
    add_image_size( 'kurumsalpress-thumb', 400, 300, true );

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
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add support for custom background
    add_theme_support( 'custom-background', array(
        'default-color' => 'f8fafc',
    ) );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Add support for wide and full alignment
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'kurumsalpress_setup' );

/**
 * Set the content width in pixels
 */
function kurumsalpress_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'kurumsalpress_content_width', 1200 );
}
add_action( 'after_setup_theme', 'kurumsalpress_content_width', 0 );

/**
 * Register widget areas
 */
function kurumsalpress_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'kurumsalpress' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'kurumsalpress' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'kurumsalpress' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'kurumsalpress' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'kurumsalpress' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'kurumsalpress_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function kurumsalpress_scripts() {
    // Main stylesheet
    wp_enqueue_style( 'kurumsalpress-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Custom JavaScript
    wp_enqueue_script( 'kurumsalpress-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'kurumsalpress_scripts' );

/**
 * Custom excerpt length
 */
function kurumsalpress_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'kurumsalpress_excerpt_length', 999 );

/**
 * Custom excerpt more
 */
function kurumsalpress_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'kurumsalpress_excerpt_more' );

/**
 * Add custom classes to body
 */
function kurumsalpress_body_classes( $classes ) {
    // Add a class for the page
    if ( is_singular() ) {
        $classes[] = 'singular';
    }

    // Add a class if there is a custom header
    if ( has_header_image() ) {
        $classes[] = 'has-header-image';
    }

    // Add a class if there is a custom logo
    if ( has_custom_logo() ) {
        $classes[] = 'has-custom-logo';
    }

    return $classes;
}
add_filter( 'body_class', 'kurumsalpress_body_classes' );

/**
 * Customizer additions
 */
function kurumsalpress_customize_register( $wp_customize ) {
    // Hero section settings
    $wp_customize->add_section( 'kurumsalpress_hero', array(
        'title'    => esc_html__( 'Hero Section', 'kurumsalpress' ),
        'priority' => 30,
    ) );

    // Hero title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => esc_html__( 'Modern Kurumsal Çözümler', 'kurumsalpress' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'hero_title', array(
        'label'   => esc_html__( 'Hero Title', 'kurumsalpress' ),
        'section' => 'kurumsalpress_hero',
        'type'    => 'text',
    ) );

    // Hero description
    $wp_customize->add_setting( 'hero_description', array(
        'default'           => esc_html__( 'İşletmenizi dijital dünyada öne çıkaracak profesyonel çözümler sunuyoruz.', 'kurumsalpress' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'hero_description', array(
        'label'   => esc_html__( 'Hero Description', 'kurumsalpress' ),
        'section' => 'kurumsalpress_hero',
        'type'    => 'textarea',
    ) );

    // Hero button text
    $wp_customize->add_setting( 'hero_button_text', array(
        'default'           => esc_html__( 'Hemen Başlayın', 'kurumsalpress' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'hero_button_text', array(
        'label'   => esc_html__( 'Hero Button Text', 'kurumsalpress' ),
        'section' => 'kurumsalpress_hero',
        'type'    => 'text',
    ) );

    // Hero button URL
    $wp_customize->add_setting( 'hero_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'hero_button_url', array(
        'label'   => esc_html__( 'Hero Button URL', 'kurumsalpress' ),
        'section' => 'kurumsalpress_hero',
        'type'    => 'url',
    ) );

    // Contact information
    $wp_customize->add_section( 'kurumsalpress_contact', array(
        'title'    => esc_html__( 'Contact Information', 'kurumsalpress' ),
        'priority' => 35,
    ) );

    // Phone
    $wp_customize->add_setting( 'contact_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'contact_phone', array(
        'label'   => esc_html__( 'Phone', 'kurumsalpress' ),
        'section' => 'kurumsalpress_contact',
        'type'    => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'contact_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( 'contact_email', array(
        'label'   => esc_html__( 'Email', 'kurumsalpress' ),
        'section' => 'kurumsalpress_contact',
        'type'    => 'email',
    ) );

    // Address
    $wp_customize->add_setting( 'contact_address', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'contact_address', array(
        'label'   => esc_html__( 'Address', 'kurumsalpress' ),
        'section' => 'kurumsalpress_contact',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'kurumsalpress_customize_register' );

/**
 * Register Custom Post Type - Services
 */
function kurumsalpress_register_services() {
    $labels = array(
        'name'               => esc_html__( 'Services', 'kurumsalpress' ),
        'singular_name'      => esc_html__( 'Service', 'kurumsalpress' ),
        'menu_name'          => esc_html__( 'Services', 'kurumsalpress' ),
        'add_new'            => esc_html__( 'Add New', 'kurumsalpress' ),
        'add_new_item'       => esc_html__( 'Add New Service', 'kurumsalpress' ),
        'edit_item'          => esc_html__( 'Edit Service', 'kurumsalpress' ),
        'new_item'           => esc_html__( 'New Service', 'kurumsalpress' ),
        'view_item'          => esc_html__( 'View Service', 'kurumsalpress' ),
        'search_items'       => esc_html__( 'Search Services', 'kurumsalpress' ),
        'not_found'          => esc_html__( 'No services found', 'kurumsalpress' ),
        'not_found_in_trash' => esc_html__( 'No services found in Trash', 'kurumsalpress' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'service', $args );
}
add_action( 'init', 'kurumsalpress_register_services' );

/**
 * Register Custom Post Type - Team Members
 */
function kurumsalpress_register_team() {
    $labels = array(
        'name'               => esc_html__( 'Team', 'kurumsalpress' ),
        'singular_name'      => esc_html__( 'Team Member', 'kurumsalpress' ),
        'menu_name'          => esc_html__( 'Team', 'kurumsalpress' ),
        'add_new'            => esc_html__( 'Add New', 'kurumsalpress' ),
        'add_new_item'       => esc_html__( 'Add New Team Member', 'kurumsalpress' ),
        'edit_item'          => esc_html__( 'Edit Team Member', 'kurumsalpress' ),
        'new_item'           => esc_html__( 'New Team Member', 'kurumsalpress' ),
        'view_item'          => esc_html__( 'View Team Member', 'kurumsalpress' ),
        'search_items'       => esc_html__( 'Search Team', 'kurumsalpress' ),
        'not_found'          => esc_html__( 'No team members found', 'kurumsalpress' ),
        'not_found_in_trash' => esc_html__( 'No team members found in Trash', 'kurumsalpress' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'team', $args );
}
add_action( 'init', 'kurumsalpress_register_team' );
