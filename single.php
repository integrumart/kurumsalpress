<?php
/**
 * The template for displaying all single posts
 *
 * @package KurumsalPress
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="content-wrapper">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>
                
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    
                    <div class="entry-meta">
                        <span class="posted-on">
                            <?php echo esc_html( get_the_date() ); ?>
                        </span>
                        <span class="byline">
                            <?php esc_html_e( 'by', 'kurumsalpress' ); ?> 
                            <span class="author vcard"><?php the_author(); ?></span>
                        </span>
                        <?php if ( has_category() ) : ?>
                            <span class="cat-links">
                                <?php esc_html_e( 'in', 'kurumsalpress' ); ?> 
                                <?php the_category( ', ' ); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail( 'kurumsalpress-featured' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kurumsalpress' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>

                <?php if ( has_tag() ) : ?>
                    <footer class="entry-footer">
                        <div class="tags-links">
                            <?php the_tags( '<strong>' . esc_html__( 'Tags:', 'kurumsalpress' ) . '</strong> ', ', ', '' ); ?>
                        </div>
                    </footer>
                <?php endif; ?>

            </article>

            <?php
            // Post navigation
            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Önceki:', 'kurumsalpress' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Sonraki:', 'kurumsalpress' ) . '</span> <span class="nav-title">%title</span>',
                )
            );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
