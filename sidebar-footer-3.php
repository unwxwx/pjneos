<?php
/**
 * The template for the sidebar containing the main widget area
 */
?> 
<?php if ( is_active_sidebar( 'footer-3' )  ) : ?>
    <div class="">
        <?php dynamic_sidebar( 'footer-3' ); ?>
    </div>
<?php endif; ?>