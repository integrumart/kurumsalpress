<?php
/**
 * The main template file
 *
 * @package KurumsalPress
 */

get_header();
?>

<div class="site-content content-area">
    <div class="container">
        <div class="content-wrapper">
            <main class="main-content">
                <?php
                if ( have_posts() ) :

                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', get_post_type() );
                    endwhile;

                    // Pagination
                    kurumsalpress_pagination();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
            </main>

            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php
get_footer();
