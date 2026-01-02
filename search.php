<?php
/**
 * The template for displaying search results pages
 *
 * @package KurumsalPress
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="content-wrapper">
        
        <header class="page-header">
            <h1 class="page-title">
                <?php
                printf(
                    /* translators: %s: search query */
                    esc_html__( 'Arama Sonuçları: %s', 'kurumsalpress' ),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>

            <div class="post-grid">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail-wrapper" style="overflow: hidden;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'kurumsalpress-featured', array( 'class' => 'post-thumbnail' ) ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
                                <span class="post-type"><?php echo esc_html( get_post_type() ); ?></span>
                            </div>
                            
                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="read-more">
                                <?php esc_html_e( 'Devamını Oku', 'kurumsalpress' ); ?> →
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;

                the_posts_navigation();
                ?>
            </div>

        <?php else : ?>

            <div class="no-results">
                <h2><?php esc_html_e( 'Sonuç Bulunamadı', 'kurumsalpress' ); ?></h2>
                <p><?php esc_html_e( 'Üzgünüz, aramanızla eşleşen sonuç bulunamadı. Lütfen farklı anahtar kelimelerle tekrar deneyin.', 'kurumsalpress' ); ?></p>
                
                <div class="search-form-wrapper" style="max-width: 600px; margin: 2rem auto;">
                    <?php get_search_form(); ?>
                </div>
            </div>

        <?php endif; ?>
        
    </div>
</main>

<?php
get_footer();
