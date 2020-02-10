<?php
/**
 * Template for displaying search forms 
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <span class="icon fa fa-search"></span>
    <input
            type="text"
            id="<?php echo $unique_id; ?>"
            class="form-control"
            placeholder="<?php _e('Type a keyword and hit enter', 'pjneos') ?>"
            value="<?php echo get_search_query(); ?>"
            name="s" />
</form>