<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
    <header class="site-header">
        <?php if ( get_theme_mod( 'show_header_top', true ) ) : ?>
        <div class="header-top">
            <div class="container">
                <div class="header-info">
                    <?php if ( get_theme_mod( 'header_email' ) ) : ?>
                        <span>✉ <a href="mailto:<?php echo esc_attr( get_theme_mod( 'header_email' ) ); ?>"><?php echo esc_html( get_theme_mod( 'header_email' ) ); ?></a></span>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'header_phone' ) ) : ?>
                        <span>✆ <a href="tel:<?php echo esc_attr( get_theme_mod( 'header_phone' ) ); ?>"><?php echo esc_html( get_theme_mod( 'header_phone' ) ); ?></a></span>
                    <?php endif; ?>
                </div>
                <div class="header-contact">
                    <?php
                    $social_links = array(
                        'facebook'  => get_theme_mod( 'social_facebook' ),
                        'twitter'   => get_theme_mod( 'social_twitter' ),
                        'linkedin'  => get_theme_mod( 'social_linkedin' ),
                        'instagram' => get_theme_mod( 'social_instagram' ),
                    );
                    
                    foreach ( $social_links as $network => $url ) :
                        if ( $url ) :
                    ?>
                        <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>">
                            <?php echo esc_html( ucfirst( $network ) ); ?>
                        </a>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="header-main">
            <div class="container">
                <div class="site-branding">
                    <?php
                    if ( has_custom_logo() ) :
                        the_custom_logo();
                    else :
                    ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        <?php
                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) :
                        ?>
                            <p class="site-description"><?php echo $description; ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <nav class="main-navigation" id="site-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </nav>

                <button class="menu-toggle" id="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                    ☰ Menü
                </button>
            </div>
        </div>
    </header>

    <?php if ( is_front_page() && ! is_paged() ) : ?>
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>
                    <?php 
                    echo esc_html( get_theme_mod( 'hero_title', 'Kurumsal Çözümleriniz İçin Güvenilir Partner' ) ); 
                    ?>
                </h1>
                <p>
                    <?php 
                    echo esc_html( get_theme_mod( 'hero_description', 'Modern ve profesyonel yaklaşımımızla işletmenizi dijital dünyada güçlendiriyoruz.' ) ); 
                    ?>
                </p>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url( get_theme_mod( 'hero_button_url', '#services' ) ); ?>" class="btn btn-primary">
                        <?php echo esc_html( get_theme_mod( 'hero_button_text', 'Hizmetlerimiz' ) ); ?>
                    </a>
                    <a href="<?php echo esc_url( get_theme_mod( 'hero_button_2_url', '#contact' ) ); ?>" class="btn btn-secondary">
                        <?php echo esc_html( get_theme_mod( 'hero_button_2_text', 'İletişim' ) ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <div class="container">
            <div class="section-title">
                <h2><?php echo esc_html( get_theme_mod( 'services_title', 'Hizmetlerimiz' ) ); ?></h2>
                <p><?php echo esc_html( get_theme_mod( 'services_description', 'İşletmeniz için kapsamlı dijital çözümler sunuyoruz.' ) ); ?></p>
            </div>
            <div class="services-grid">
                <?php
                for ( $i = 1; $i <= 6; $i++ ) :
                    $service_title = get_theme_mod( "service_{$i}_title", '' );
                    $service_description = get_theme_mod( "service_{$i}_description", '' );
                    $service_icon = get_theme_mod( "service_{$i}_icon", '🎯' );
                    
                    if ( $service_title ) :
                ?>
                <div class="service-card">
                    <div class="service-icon"><?php echo esc_html( $service_icon ); ?></div>
                    <h3><?php echo esc_html( $service_title ); ?></h3>
                    <p><?php echo esc_html( $service_description ); ?></p>
                </div>
                <?php 
                    endif;
                endfor; 
                
                // Default services if none configured
                if ( ! get_theme_mod( 'service_1_title' ) ) :
                ?>
                <div class="service-card">
                    <div class="service-icon">🎯</div>
                    <h3>Web Tasarım</h3>
                    <p>Modern ve kullanıcı dostu web siteleri tasarlıyoruz. Responsive tasarımlarla tüm cihazlarda mükemmel görünüm.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🚀</div>
                    <h3>Dijital Pazarlama</h3>
                    <p>SEO, sosyal medya yönetimi ve dijital reklam kampanyalarıyla işletmenizi büyütüyoruz.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">💼</div>
                    <h3>Kurumsal Danışmanlık</h3>
                    <p>İş süreçlerinizi optimize ediyor, dijital dönüşüm yolculuğunuzda yanınızdayız.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3>Mobil Uygulama</h3>
                    <p>iOS ve Android platformları için özelleştirilmiş mobil uygulamalar geliştiriyoruz.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h3>Güvenlik</h3>
                    <p>Web sitenizin ve verilerinizin güvenliğini en üst düzeyde sağlıyoruz.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">⚡</div>
                    <h3>Performans</h3>
                    <p>Hızlı yükleme süreleri ve optimum performans için web sitenizi optimize ediyoruz.</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
