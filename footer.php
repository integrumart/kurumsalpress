    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="footer-content">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-section">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="footer-section">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="footer-section">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( ! is_active_sidebar( 'footer-1' ) && ! is_active_sidebar( 'footer-2' ) && ! is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="footer-section">
                    <h3><?php bloginfo( 'name' ); ?></h3>
                    <p><?php bloginfo( 'description' ); ?></p>
                </div>

                <div class="footer-section">
                    <h3><?php esc_html_e( 'Hızlı Linkler', 'kurumsalpress' ); ?></h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>

                <div class="footer-section">
                    <h3><?php esc_html_e( 'İletişim', 'kurumsalpress' ); ?></h3>
                    <?php if ( get_theme_mod( 'contact_phone' ) ) : ?>
                        <p><?php esc_html_e( 'Telefon:', 'kurumsalpress' ); ?> <?php echo esc_html( get_theme_mod( 'contact_phone' ) ); ?></p>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'contact_email' ) ) : ?>
                        <p><?php esc_html_e( 'E-posta:', 'kurumsalpress' ); ?> <a href="mailto:<?php echo esc_attr( get_theme_mod( 'contact_email' ) ); ?>"><?php echo esc_html( get_theme_mod( 'contact_email' ) ); ?></a></p>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'contact_address' ) ) : ?>
                        <p><?php echo esc_html( get_theme_mod( 'contact_address' ) ); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="footer-bottom">
            <p>
                <?php
                printf(
                    /* translators: 1: Theme name, 2: Theme author */
                    esc_html__( '© %1$s %2$s. Tüm hakları saklıdır.', 'kurumsalpress' ),
                    esc_html( date( 'Y' ) ),
                    '<strong>' . esc_html( get_bloginfo( 'name' ) ) . '</strong>'
                );
                ?>
            </p>
        </div>
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
