<?php
/**
 * The header for our theme
 *
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<?php if ( is_front_page() ) : ?>
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?> </title>
<?php elseif ( is_404() ) : ?>
    <title>404 - <?php bloginfo( 'name' ); ?></title>
<?php else : ?>
    <title><?php the_title(); ?> - <?php bloginfo( 'name' ); ?></title>
<?php endif; ?>

<?php wp_head(); ?>
</head>


<body id="page-top" <?php body_class(); ?>>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap js-site-navbar bg-white">

        <div class="container">
            <div class="site-navbar bg-light">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h2 class="mb-0 site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-weight-bold text-uppercase"><?php bloginfo( 'name' ); ?></a></h2>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                                <?php
                                if ( has_nav_menu( 'menu_top' ) ) {
                                    wp_nav_menu( array(
                                        'theme_location'  => 'menu_top',
                                        'menu'            => '',
                                        'container'       => '',
                                        'menu_class'      => 'site-menu js-clone-nav d-none d-lg-block',
                                        'depth'           => 2,
                                        'walker'          => new WP_Neos_Navwalker(),
                                    ) );
                                }
                                ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-blocks-cover inner-page overlay" style="background-image: url(<?php neosHeaderImage(); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5 text-center" data-aos="fade">
                <?php neosHeaderTitle(); ?>
                <span class="caption d-block text-white"><?php neosHeaderSubtitle(); ?></span>
            </div>
        </div>
    </div>

    <div class="slant-1"></div>
