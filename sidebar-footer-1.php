<?php
/**
 * The template for the sidebar containing the main widget area
 */
?> 
<?php if ( is_active_sidebar( 'footer-1' )  ) : ?>
    <div class="">
        <?php dynamic_sidebar( 'footer-1' ); ?>
    </div>
<?php endif; ?>