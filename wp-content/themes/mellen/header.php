<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tyler
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
	<header>
        <nav>
            <ul class="main-menu">
                <li class="home"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="about"><a href="<?php echo site_url(); ?>/about">About</a></li>
                <li class="portfolio"><a href="<?php echo site_url(); ?>/portfolio">Portfolio</a></li>
                <li class="news"><a href="<?php echo site_url(); ?>/news">News</a></li>
                <li class="contact"><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
            </ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<img src="<?php bloginfo('template_directory'); ?>/images/brand.png" role="banner" class="banner"/>