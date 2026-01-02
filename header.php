<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kurumsalpress' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                    <?php
                }
                ?>
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'kurumsalpress' ); ?>">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'kurumsalpress' ); ?></span>
                    ☰
                </button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav>
        </div>
    </header>

    <?php if ( is_front_page() && ! is_home() ) : ?>
        <section class="hero-section">
            <div class="hero-content">
                <h1><?php echo esc_html( get_theme_mod( 'hero_title', __( 'Modern Kurumsal Çözümler', 'kurumsalpress' ) ) ); ?></h1>
                <p><?php echo esc_html( get_theme_mod( 'hero_description', __( 'İşletmenizi dijital dünyada öne çıkaracak profesyonel çözümler sunuyoruz.', 'kurumsalpress' ) ) ); ?></p>
                <div class="hero-buttons">
                    <?php
                    $button_text = get_theme_mod( 'hero_button_text', __( 'Hemen Başlayın', 'kurumsalpress' ) );
                    $button_url  = get_theme_mod( 'hero_button_url', '#' );
                    if ( $button_text ) :
                        ?>
                        <a href="<?php echo esc_url( $button_url ); ?>" class="btn btn-primary"><?php echo esc_html( $button_text ); ?></a>
                        <a href="#content" class="btn btn-secondary"><?php esc_html_e( 'Daha Fazla', 'kurumsalpress' ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <div id="content" class="site-content">
