<?php
/**
 * The template file for single post
 *
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class("neos-post"); ?>>
    <p class="lead"><?php the_title(); ?></p>
    <p><?php neosPostThumbnail(); ?></p>

    <?php the_content( sprintf(
        __( 'Read More', 'pjneos' ),
        get_the_title()
    ) ); ?>
    <div class="pt-5">
        <p><?php neosPostCategories(); ?> <?php neosPostTags(); ?></p>
    </div>
</div>