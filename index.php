<?php
/**
 * The main template file
 *
 * @package KurumsalPress
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="content-wrapper">
        
        <?php if ( is_front_page() && ! is_home() ) : ?>
            
            <!-- Services Section -->
            <?php
            $services_query = new WP_Query( array(
                'post_type'      => 'service',
                'posts_per_page' => 6,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );

            if ( $services_query->have_posts() ) :
                ?>
                <section class="services-section py-4">
                    <div class="section-title">
                        <h2><?php esc_html_e( 'Hizmetlerimiz', 'kurumsalpress' ); ?></h2>
                    </div>
                    
                    <div class="card-grid">
                        <?php
                        while ( $services_query->have_posts() ) :
                            $services_query->the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
                                <div class="card-icon">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                                    <?php else : ?>
                                        ⚡
                                    <?php endif; ?>
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), 20, '...' ) ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    <?php esc_html_e( 'Daha Fazla', 'kurumsalpress' ); ?> →
                                </a>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </section>
                <?php
            endif;
            ?>

            <!-- Blog Posts Section -->
            <section class="blog-section py-4">
                <div class="section-title">
                    <h2><?php esc_html_e( 'Son Haberler', 'kurumsalpress' ); ?></h2>
                </div>
                
                <div class="post-grid">
                    <?php
                    $blog_query = new WP_Query( array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ) );

                    if ( $blog_query->have_posts() ) :
                        while ( $blog_query->have_posts() ) :
                            $blog_query->the_post();
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
                                        <span class="post-author"><?php esc_html_e( 'by', 'kurumsalpress' ); ?> <?php the_author(); ?></span>
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
                        wp_reset_postdata();
                    else :
                        ?>
                        <p><?php esc_html_e( 'Henüz içerik bulunmamaktadır.', 'kurumsalpress' ); ?></p>
                        <?php
                    endif;
                    ?>
                </div>
            </section>

        <?php else : ?>
            
            <!-- Standard Blog/Archive Display -->
            <?php
            if ( have_posts() ) :
                ?>
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
                                    <span class="post-author"><?php esc_html_e( 'by', 'kurumsalpress' ); ?> <?php the_author(); ?></span>
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
                <?php
            else :
                ?>
                <div class="no-results">
                    <h2><?php esc_html_e( 'İçerik Bulunamadı', 'kurumsalpress' ); ?></h2>
                    <p><?php esc_html_e( 'Üzgünüz, aradığınız içerik bulunamadı.', 'kurumsalpress' ); ?></p>
                </div>
                <?php
            endif;
            ?>
            
        <?php endif; ?>
        
    </div>
</main><!-- #primary -->

<?php
get_footer();
