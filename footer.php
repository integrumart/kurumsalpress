    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
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
        </div><!-- .footer-widgets -->

        <div class="site-info">
            <div class="container">
                <p>
                    <?php
                    printf(
                        /* translators: 1: Theme name, 2: Theme author */
                        esc_html__( '%1$s by %2$s', 'kurumsalpress' ),
                        '<a href="https://github.com/integrumart/kurumsalpress">KurumsalPress</a>',
                        '<a href="https://integrumart.com">IntegrumArt</a>'
                    );
                    ?>
                    &nbsp;|&nbsp;
                    <?php
                    printf(
                        /* translators: %s: WordPress */
                        esc_html__( 'Powered by %s', 'kurumsalpress' ),
                        '<a href="https://wordpress.org/">WordPress</a>'
                    );
                    ?>
                </p>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
