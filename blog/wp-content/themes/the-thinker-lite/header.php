<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Thinker
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<div id="headertop">
    <div class="page hfeed site">
        <nav id="site-navigation" class="navigation-main" role="navigation">
            <h1 class="menu-toggle anarielgenericon"><?php _e( 'Menu', 'thinker' ); ?></h1>
            <div class="screen-reader-text skip-link">
                <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'thinker' ); ?>"><?php _e( 'Skip to content', 'thinker' ); ?></a>
            </div><!-- .screen-reader-text skip-link -->
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #site-navigation -->
    </div><!-- .page --> 
</div><!-- #headertop -->
<?php $header_image = get_header_image();
if ( ! empty( $header_image ) ) { ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="header-image-link"> <img class="headerimage" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /> </a>
<?php } ?>
<header id="masthead" class="site-header" role="banner">
    <div class="page hfeed site">
		<?php if ( get_theme_mod( 'thinker_logo' ) ) : ?>
            <div class="site-logo"> 
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'thinker_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
            </div><!-- .site-logo -->
	    <?php else : ?>
            <div class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div><!-- .site-branding -->
		<?php endif; ?>
    </div><!-- .page -->
</header><!-- #masthead --> 