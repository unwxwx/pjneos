<?php
/**
 * functions and definitions
 * pjneos
 */

function neosEnqueueStyles()
{
    wp_enqueue_style( 'neos-font-worksans', 'https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700' );

    wp_enqueue_style(
        'neos-font-icomoon',
        get_stylesheet_directory_uri().'/assets/fonts/icomoon/style.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
            'neos-style-bootstrap',
            get_stylesheet_directory_uri().'/assets/vendor/css/bootstrap.min.css',
            array(),
            '1.0.0'
    );

    wp_enqueue_style(
        'neos-style-magnific',
        get_stylesheet_directory_uri().'/assets/vendor/css/magnific-popup.css',
        array('neos-style-bootstrap'),
        '1.0.0'
    );

    wp_enqueue_style(
        'neos-style-jqueryui',
        get_stylesheet_directory_uri().'/assets/vendor/css/jquery-ui.css',
        array('neos-style-magnific'),
        '1.0.0'
    );

    wp_enqueue_style(
        'neos-style-owlcarousel',
        get_stylesheet_directory_uri().'/assets/vendor/css/owl.carousel.min.css',
        array('neos-style-jqueryui'),
        '1.0.0'
    );

    wp_enqueue_style(
        'neos-style-owltheme',
        get_stylesheet_directory_uri().'/assets/vendor/css/owl.theme.default.min.css',
        array('neos-style-owlcarousel'),
        '1.0.0'
    );

    wp_enqueue_style(
        'neos-style-datepicker',
        get_stylesheet_directory_uri().'/assets/vendor/css/bootstrap-datepicker.css',
        array('neos-style-owltheme'),
        '1.0.0'
    );

    wp_enqueue_style(
        'neos-style-animate',
        get_stylesheet_directory_uri().'/assets/vendor/css/animate.css',
        array('neos-style-datepicker'),
        '1.0.0'
    );

    wp_enqueue_style(
        'neos-font-flaticon',
        get_stylesheet_directory_uri().'/assets/fonts/flaticon/font/flaticon.css',
        array('neos-style-animate'),
        '1.0.0'
    );

    // Theme stylesheet.
    wp_enqueue_style(
        'neos-style',
        get_stylesheet_uri(),
        array('neos-style-bootstrap', 'neos-style-animate'),
        '488'
    );


    wp_enqueue_script(
        'neos-script-jqueryui',
        get_stylesheet_directory_uri() .'/assets/vendor/js/jquery-ui.js',
        array('jquery'),
        '210',
        true
    );

    wp_enqueue_script(
        'neos-script-popper',
        get_stylesheet_directory_uri() .'/assets/vendor/js/popper.min.js',
        array('jquery','neos-script-jqueryui'),
        '210',
        true
    );

    wp_enqueue_script(
        'neos-script-bootstrap',
        get_stylesheet_directory_uri() .'/assets/vendor/js/bootstrap.min.js',
        array('jquery','neos-script-popper'),
        '210',
        true
    );

    wp_enqueue_script(
        'neos-script-carousel',
        get_stylesheet_directory_uri() .'/assets/vendor/js/owl.carousel.min.js',
        array('jquery','neos-script-bootstrap'),
        '210',
        true
    );

    wp_enqueue_script(
        'neos-script-stellar',
        get_stylesheet_directory_uri() .'/assets/vendor/js/jquery.stellar.min.js',
        array('jquery','neos-script-carousel'),
        '210',
        true
    );

    wp_enqueue_script(
        'neos-script-waypoints',
        get_stylesheet_directory_uri() .'/assets/vendor/js/jquery.waypoints.min.js',
        array('jquery','neos-script-stellar'),
        '210',
        true
    );

    wp_enqueue_script(
        'neos-script-animateNumber',
        get_stylesheet_directory_uri() .'/assets/vendor/js/jquery.animateNumber.min.js',
        array('jquery','neos-script-waypoints'),
        '210',
        true
    );

    wp_enqueue_script(
        'neos-script-aos',
        get_stylesheet_directory_uri() .'/assets/vendor/js/aos.js',
        array('jquery','neos-script-waypoints'),
        '210',
        true
    );

    wp_enqueue_script(
        'neos-script',
        get_stylesheet_directory_uri() .'/assets/js/pjneos.js',
        array('jquery', 'neos-script-aos'),
        '210',
        true
    );
        	
}
add_action('wp_enqueue_scripts', 'neosEnqueueStyles');


function neosSetup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	load_theme_textdomain( 'pjneos' );
    
    // Registering navigation menus.
	register_nav_menus( array(	
		'menu_top' 	=> __( 'Основное меню', 'pjneos' )
	) );

}
add_action( 'after_setup_theme', 'neosSetup' );


/**
 * Theme customizer.
 */
require_once plugin_dir_path(__FILE__).'inc/class_neos_customizer.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom template functions for this theme.
 */
require get_template_directory() . '/inc/neos-template-functions.php';
/**
 * Custom nav walker.
 */
require get_template_directory() . '/inc/class-wp-neos-navwalker.php';
/**
 * Comment nav walker.
 */
require get_template_directory() . '/inc/class-neos-walker-comment.php';


/**
 * Registers a widget area.
 */
function neosWidgetsInit() {

    register_sidebar( array(
        'name'          => __( 'sidebar 1', 'pjneos' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your single post sidebar.', 'pjneos' ),
        'before_widget' => '<div id="%1$s" class="sidebar-box %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-uppercase">',
        'after_title'   => '</h3>',
    ) );

	register_sidebar( array(
		'name'          => __( 'footer 1', 'pjneos' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your blog footer.', 'pjneos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s footer-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="footer-heading mb-4 text-white">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'footer 2', 'pjneos' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your blog footer.', 'pjneos' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s footer-widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="footer-heading mb-4 text-white">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'footer 3', 'pjneos' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your blog footer.', 'pjneos' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s footer-widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="footer-heading mb-4 text-white">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'neosWidgetsInit' );


/**
 * Remove field "website" from comment form
 */
add_filter( 'comment_form_default_fields', 'comment_form_default_add_my_fields' );
function comment_form_default_add_my_fields( $fields ) {
	unset( $fields['url'] );
	return $fields;
}

/**
 * Remove h2 tag from blog pagination
 */
add_filter('navigation_markup_template', 'neosNavigationTemplate', 10, 2 );
function neosNavigationTemplate( $template, $class ){
	return '
    <div class="row">
        <div class="col-12 text-center">
            <div class="custom-pagination">
                %3$s
            </div>
        </div>
    </div>  
	';
}


if ( ! function_exists( 'neosSanitizeHtml' ) ) :
/**
 * Sanitize HTML
 */
    function neosSanitizeHtml( $input ) {
		$input = force_balance_tags( $input );

		$allowed_html = array(
			'a'      => array(
				'href'  => array(),
				'title' => array(),
			),
			'br'     => array(),
			'em'     => array(),
			'img'    => array(
				'alt'    => array(),
				'src'    => array(),
				'srcset' => array(),
				'title'  => array(),
			),
			'strong' => array(),
		);
		$output = wp_kses( $input, $allowed_html );

		return $output;
	}
endif;