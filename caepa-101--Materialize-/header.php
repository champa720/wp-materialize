<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CAEPA-101
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'caepa-101' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <div class="brand-logo">
                        <?php if ( get_header_image() ) : ?>
                        <a href="
                            <?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="
                                <?php header_image(); ?>" width="
                                <?php echo esc_attr( get_custom_header()->width ); ?>" height="
                                <?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                            </a>
                            <?php endif; // End header image check. ?>
                            <a href="
                                <?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a><!--<h2 class="site-description">
                            <?php bloginfo( 'description' ); ?></h2>-->
                        </div><!-- .site-branding -->
                    
                    <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_id' => 'main-nav',
                        'menu_class' => 'right hide-on-med-and-down',
                        'items_wrap' => '<ul id="%1s" class="%2$s">%3$s</ul>' 
                        ) ); 
                    ?>
                    
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container' => '', 
                        'menu_id' => 'mobile-nav',
                        'menu_class' => 'side-nav',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                        ) ); 
                    ?>
                    
                </div><!-- nav-wrapper -->
            </nav><!-- #site-navigation -->
        </div><!-- .navbar-fixed -->
        
        <?php if ( !is_front_page() ) { ?>
            <div class="parallax-container flow-text valign-wrapper">
                <div class="parallax grey">
                    <?php if ( has_post_thumbnail() ) {
                        // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail('full');
                        } 
                    ?>
                </div><!-- Parallax Image -->
                    <div id="title" class="container white-text">
                        <h1 id="title"><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h1>
                            <hr>
                        <span id="subtitle"><?php echo apply_filters( 'the_subtitle', get_the_subtitle( get_option( 'page_for_posts' ) ) ); ?></span>
                    </div>
            </div><!-- Header Title | Sub-Title Parallax-Container -->
        <?php } ?>
        
	</header><!-- #masthead -->

<div id="content" class="site-content row">
