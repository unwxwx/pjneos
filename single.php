<?php
/**
 * The template file for single page
 */
 ?>
<?php get_header(); ?>
    <div class="site-section first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content">
                <?php
                if ( have_posts() ) :

                    while ( have_posts() ) : the_post();

                        get_template_part( 'templates/post-single' );

                    endwhile;?>

                    <?php

                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                else: ?>
                    <?php _e('Nothing Found', 'pjneos') ?>
                    <div class="page-empty-widgets"><?php get_search_form(); ?></div><?php

                endif; ?>
                </div>
                <div class="col-md-4 sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>