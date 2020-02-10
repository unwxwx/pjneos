<?php
if ( ! function_exists( 'neosHeaderImage' ) ) {
    /**
     */
    function neosHeaderImage() {
        if (!empty(get_theme_mod( Neos_Customizer::OPT_HEADER_IMAGE ))):
            echo get_theme_mod( Neos_Customizer::OPT_HEADER_IMAGE );
        endif;
    }
}

if ( ! function_exists( 'neosHeaderTitle' ) ) {
    /**
     */
    function neosHeaderTitle() {
        if (!empty(get_theme_mod( Neos_Customizer::OPT_HEADER_TITLE ))): ?>
            <h1 class="text-uppercase"><?php echo get_theme_mod( Neos_Customizer::OPT_HEADER_TITLE ); ?></h1> <?php
        endif;
    }
}

if ( ! function_exists( 'neosHeaderSubtitle' ) ) {
    /**
     */
    function neosHeaderSubtitle() {
        if (!empty(get_theme_mod( Neos_Customizer::OPT_HEADER_SUBTITLE ))):
             echo get_theme_mod( Neos_Customizer::OPT_HEADER_SUBTITLE );
        endif;
    }
}

if ( ! function_exists( 'neosFooterTitle' ) ) {
    /**
     */
    function neosFooterTitle() {
        if (!empty(get_theme_mod( Neos_Customizer::OPT_FOOTER_TITLE ))):
            echo get_theme_mod( Neos_Customizer::OPT_FOOTER_TITLE );
        endif;
    }
}

if ( ! function_exists( 'neosFooterText' ) ) {
    /**
     */
    function neosFooterText() {
        if (!empty(get_theme_mod( Neos_Customizer::OPT_LINK_TEXT ))):
            echo get_theme_mod( Neos_Customizer::OPT_LINK_TEXT );
        endif;
    }
}

if ( ! function_exists( 'neosFooterLink' ) ) {
    /**
     */
    function neosFooterLink() {
        if (!empty(get_theme_mod( Neos_Customizer::OPT_LINK_URL ))):
            echo get_theme_mod( Neos_Customizer::OPT_LINK_URL );
        endif;
    }
}