    <footer class="site-footer">
        <div class="container">
            <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
            <div class="footer-widgets">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <div class="site-info">
                <p>
                    &copy; <?php echo date( 'Y' ); ?> 
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php
                    if ( get_theme_mod( 'footer_text' ) ) {
                        echo ' - ' . esc_html( get_theme_mod( 'footer_text' ) );
                    } else {
                        echo ' - ' . esc_html__( 'Tüm hakları saklıdır.', 'kurumsalpress' );
                    }
                    ?>
                </p>
                <p>
                    <?php
                    printf(
                        /* translators: %s: Theme name */
                        esc_html__( 'Powered by %s', 'kurumsalpress' ),
                        '<a href="https://github.com/integrumart/kurumsalpress" target="_blank" rel="noopener noreferrer">Kurumsal Press</a>'
                    );
                    ?>
                </p>
            </div>
        </div>
    </footer>
</div><!-- .wrapper -->

<?php wp_footer(); ?>

</body>
</html>
