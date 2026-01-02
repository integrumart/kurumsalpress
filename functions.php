<?php
/**
 * Kurumsal Press Theme Functions
 *
 * @package KurumsalPress
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function kurumsalpress_setup() {
    // Make theme available for translation
    load_theme_textdomain( 'kurumsalpress', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 675, true );

    // Add custom image sizes
    add_image_size( 'kurumsalpress-featured', 1200, 600, true );
    add_image_size( 'kurumsalpress-thumbnail', 400, 300, true );

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
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add support for custom header
    add_theme_support( 'custom-header', array(
        'default-image'      => '',
        'width'              => 1920,
        'height'             => 600,
        'flex-height'        => true,
        'flex-width'         => true,
        'header-text'        => true,
        'default-text-color' => 'ffffff',
    ) );

    // Add support for custom background
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
    ) );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Add support for wide alignment
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'kurumsalpress_setup' );

/**
 * Set the content width
 */
function kurumsalpress_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'kurumsalpress_content_width', 1200 );
}
add_action( 'after_setup_theme', 'kurumsalpress_content_width', 0 );

/**
 * Register widget areas
 */
function kurumsalpress_widgets_init() {
    // Sidebar Widget Area
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'kurumsalpress' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'kurumsalpress' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    // Footer Widget Area 1
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'kurumsalpress' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    // Footer Widget Area 2
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'kurumsalpress' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    // Footer Widget Area 3
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'kurumsalpress' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    // Footer Widget Area 4
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', 'kurumsalpress' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'kurumsalpress' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'kurumsalpress_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function kurumsalpress_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'kurumsalpress-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue custom JavaScript
    wp_enqueue_script( 'kurumsalpress-scripts', get_template_directory_uri() . '/js/scripts.js', array(), wp_get_theme()->get( 'Version' ), true );

    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'kurumsalpress_scripts' );

/**
 * Custom excerpt length
 */
function kurumsalpress_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'kurumsalpress_excerpt_length' );

/**
 * Custom excerpt more
 */
function kurumsalpress_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'kurumsalpress_excerpt_more' );

/**
 * Add custom body classes
 */
function kurumsalpress_body_classes( $classes ) {
    // Add class if sidebar is active
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'has-sidebar';
    }

    // Add class for single posts and pages
    if ( is_singular() ) {
        $classes[] = 'singular';
    }

    return $classes;
}
add_filter( 'body_class', 'kurumsalpress_body_classes' );

/**
 * Add custom classes to navigation menu items
 */
function kurumsalpress_nav_menu_css_class( $classes, $item, $args ) {
    if ( 'primary' === $args->theme_location ) {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'kurumsalpress_nav_menu_css_class', 10, 3 );

/**
 * Pagination
 */
function kurumsalpress_pagination() {
    if ( is_singular() ) {
        return;
    }

    global $wp_query;

    if ( $wp_query->max_num_pages <= 1 ) {
        return;
    }

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    if ( $paged >= 1 ) {
        $links[] = $paged;
    }

    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagination">' . "\n";

    if ( get_previous_posts_link() ) {
        printf( '<a href="%s">%s</a>' . "\n", get_previous_posts_page_link(), '&laquo; ' . esc_html__( 'Previous', 'kurumsalpress' ) );
    }

    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="current"' : '';
        printf( '<a href="%s"%s>%s</a>' . "\n", esc_url( get_pagenum_link( 1 ) ), $class, '1' );

        if ( ! in_array( 2, $links ) ) {
            echo '<span>...</span>' . "\n";
        }
    }

    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="current"' : '';
        printf( '<a href="%s"%s>%s</a>' . "\n", esc_url( get_pagenum_link( $link ) ), $class, $link );
    }

    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) ) {
            echo '<span>...</span>' . "\n";
        }

        $class = $paged == $max ? ' class="current"' : '';
        printf( '<a href="%s"%s>%s</a>' . "\n", esc_url( get_pagenum_link( $max ) ), $class, $max );
    }

    if ( get_next_posts_link() ) {
        printf( '<a href="%s">%s</a>' . "\n", get_next_posts_page_link(), esc_html__( 'Next', 'kurumsalpress' ) . ' &raquo;' );
    }

    echo '</div>' . "\n";
}

/**
 * Posted on date/time
 */
function kurumsalpress_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf( $time_string,
        esc_attr( get_the_date( DATE_W3C ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( DATE_W3C ) ),
        esc_html( get_the_modified_date() )
    );

    printf( '<span class="posted-on">%s</span>', $time_string );
}

/**
 * Posted by author
 */
function kurumsalpress_posted_by() {
    printf(
        '<span class="byline"><span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span></span>',
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        esc_html( get_the_author() )
    );
}

/**
 * Entry categories
 */
function kurumsalpress_entry_categories() {
    $categories_list = get_the_category_list( ', ' );
    if ( $categories_list ) {
        printf( '<span class="cat-links">%s</span>', $categories_list );
    }
}

/**
 * Entry tags
 */
function kurumsalpress_entry_tags() {
    $tags_list = get_the_tag_list( '', ', ' );
    if ( $tags_list ) {
        printf( '<span class="tags-links">%s</span>', $tags_list );
    }
}
