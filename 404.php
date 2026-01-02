<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package KurumsalPress
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="content-wrapper">
        
        <section class="error-404 not-found" style="text-align: center; padding: 4rem 2rem;">
            
            <div style="font-size: 8rem; font-weight: 700; background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 1rem;">
                404
            </div>
            
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Sayfa Bulunamadı', 'kurumsalpress' ); ?></h1>
            </header>

            <div class="page-content" style="max-width: 600px; margin: 2rem auto;">
                <p><?php esc_html_e( 'Aradığınız sayfa mevcut değil. Silinmiş, taşınmış veya hiç var olmamış olabilir.', 'kurumsalpress' ); ?></p>

                <div class="search-form-wrapper" style="margin: 2rem 0;">
                    <?php get_search_form(); ?>
                </div>

                <div style="margin-top: 2rem;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                        <?php esc_html_e( 'Ana Sayfaya Dön', 'kurumsalpress' ); ?>
                    </a>
                </div>
            </div>
            
        </section>

    </div>
</main>

<?php
get_footer();
