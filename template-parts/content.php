<?php
/**
 * Template part for displaying posts
 *
 * @package KurumsalPress
 */
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
            <span><?php kurumsalpress_posted_on(); ?></span>
            <span><?php kurumsalpress_posted_by(); ?></span>
            <?php if ( ! is_singular() ) : ?>
                <span><?php kurumsalpress_entry_categories(); ?></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </header>

    <?php if ( has_post_thumbnail() && ! is_singular() ) : ?>
    <div class="entry-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'kurumsalpress-featured' ); ?>
        </a>
    </div>
    <?php endif; ?>

    <?php if ( has_post_thumbnail() && is_singular() ) : ?>
    <div class="entry-thumbnail">
        <?php the_post_thumbnail( 'kurumsalpress-featured' ); ?>
    </div>
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
    </div>

    <?php if ( is_singular() ) : ?>
    <footer class="entry-footer">
        <?php
        kurumsalpress_entry_categories();
        kurumsalpress_entry_tags();
        ?>
    </footer>
    <?php endif; ?>
</article>
