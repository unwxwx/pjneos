<?php
/**
 * The template file for index page
 *
 */
?>
<?php get_header(); ?>

        <div class="site-section first-section" data-aos="fade">
            <div class="container">
                <div class="row mb-5">
                <?php
                if ( have_posts() ) :

                    while ( have_posts() ) : the_post();

                        get_template_part( 'templates/post', get_post_format() );

                    endwhile; ?>
                </div>

                <?php the_posts_pagination(); ?>

                <?php

                else :
                    _e('Nothing Found', 'pjneos') ?>
                <?php
                endif; ?>
            </div>
        </div>

<?php get_footer(); ?>