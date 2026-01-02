<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package KurumsalPress
 */

get_header();
?>

<div class="site-content content-area">
    <div class="container">
        <div class="content-wrapper">
            <main class="main-content">
                <section class="error-404 not-found">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php esc_html_e( '404 - Page Not Found', 'kurumsalpress' ); ?></h1>
                    </header>

                    <div class="entry-content">
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'kurumsalpress' ); ?></p>

                        <?php
                        get_search_form();

                        the_widget( 'WP_Widget_Recent_Posts' );
                        ?>

                        <div class="widget widget_categories">
                            <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'kurumsalpress' ); ?></h2>
                            <ul>
                                <?php
                                wp_list_categories( array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                ) );
                                ?>
                            </ul>
                        </div>

                        <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
                    </div>
                </section>
            </main>

            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php
get_footer();
