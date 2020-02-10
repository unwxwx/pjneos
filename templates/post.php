<?php
/**
 * The template file for single post
 *
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-6 col-lg-4 mb-5"); ?>>
    <div class="media-image">
        <a href="<?php the_permalink(); ?>">
            <?php neosPostThumbnail(); ?>
        </a>
        <div class="media-image-body">
            <?php if ( is_single() || is_page() ) : ?>
                <h2 class="font-secondary text-uppercase"><?php the_title(); ?></h2>
            <?php else : ?>
                <h2 class="font-secondary text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php endif; ?>

            <span class="d-block mb-3"><?php neonPostedBy(); ?> &mdash; <?php neosEntryDate(); ?></span>

            <?php the_content( sprintf(
                __( 'Read More', 'pjneos' ),
                get_the_title()
            ) ); ?>
        </div>
    </div>
</div>