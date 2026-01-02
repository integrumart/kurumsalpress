<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package KurumsalPress
 */

get_header();
?>

<!-- Hero Section (Showy Area) -->
<section class="hero-section">
    <div class="hero-content">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p>
            <?php 
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) {
                echo esc_html( $description );
            } else {
                esc_html_e( 'Professional corporate WordPress theme for modern businesses', 'kurumsalpress' );
            }
            ?>
        </p>
        <a href="#main-content" class="hero-button">
            <?php esc_html_e( 'Explore More', 'kurumsalpress' ); ?>
        </a>
    </div>
</section>

<!-- Main Content Area -->
<main id="main-content" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :

            // Check if we're on the blog home page
            if ( is_home() && ! is_front_page() ) :
                ?>
                <header class="page-header">
                    <h2 class="page-title"><?php esc_html_e( 'Latest Posts', 'kurumsalpress' ); ?></h2>
                </header>
                <?php
            endif;

            // Start the Loop
            while ( have_posts() ) :
                the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;
                        ?>

                        <?php if ( 'post' === get_post_type() ) : ?>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    <?php
                                    printf(
                                        /* translators: %s: post date */
                                        esc_html__( 'Posted on %s', 'kurumsalpress' ),
                                        '<time class="entry-date published" datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' .
                                        esc_html( get_the_date() ) . '</time>'
                                    );
                                    ?>
                                </span>
                                <span class="byline">
                                    <?php
                                    printf(
                                        /* translators: %s: post author */
                                        esc_html__( ' by %s', 'kurumsalpress' ),
                                        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' .
                                        esc_html( get_the_author() ) . '</a></span>'
                                    );
                                    ?>
                                </span>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </header><!-- .entry-header -->

                    <?php if ( has_post_thumbnail() && ! is_singular() ) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        </div><!-- .post-thumbnail -->
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php
                        if ( is_singular() ) :
                            the_content();
                            
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kurumsalpress' ),
                                'after'  => '</div>',
                            ) );
                        else :
                            the_excerpt();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="more-link">
                                <?php esc_html_e( 'Read More', 'kurumsalpress' ); ?> &rarr;
                            </a>
                            <?php
                        endif;
                        ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->

                <?php
            endwhile;

            // Pagination
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => sprintf( '%s %s', '«', esc_html__( 'Previous', 'kurumsalpress' ) ),
                'next_text' => sprintf( '%s %s', esc_html__( 'Next', 'kurumsalpress' ), '»' ),
            ) );

        else :
            ?>
            
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'kurumsalpress' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
                        <p>
                            <?php
                            printf(
                                /* translators: %s: link to create new post */
                                wp_kses(
                                    __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'kurumsalpress' ),
                                    array(
                                        'a' => array(
                                            'href' => array(),
                                        ),
                                    )
                                ),
                                esc_url( admin_url( 'post-new.php' ) )
                            );
                            ?>
                        </p>
                    <?php elseif ( is_search() ) : ?>
                        <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'kurumsalpress' ); ?></p>
                        <?php get_search_form(); ?>
                    <?php else : ?>
                        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'kurumsalpress' ); ?></p>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                </div><!-- .page-content -->
            </section><!-- .no-results -->

            <?php
        endif;
        ?>
    </div><!-- .container -->
</main><!-- #main-content -->

<?php
get_footer();
