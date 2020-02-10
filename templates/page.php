<?php
/**
 * The template file for page
 *
 */
?>
<div id="page-<?php the_ID(); ?>" <?php post_class("neos-post"); ?>>
    <p class="lead"><?php the_title(); ?></p>
    <p><?php neosPostThumbnail(); ?></p>

    <?php the_content( sprintf(
        __( 'Read More', 'pjneos' ),
        get_the_title()
    ) ); ?>
</div>