<?php
/**
 * The template for displaying all single posts
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
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', get_post_type() );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                    // Previous/next post navigation.
                    the_post_navigation( array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kurumsalpress' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kurumsalpress' ) . '</span> <span class="nav-title">%title</span>',
                    ) );

                endwhile;
                ?>
            </main>

            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php
get_footer();
