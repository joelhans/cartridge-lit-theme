<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Cartridge Lit
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic|Gabriela|Vollkorn:400italic,700italic,400,700|Fanwood+Text:400,400italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="nav">
<nav role="navigation">
  <a class="nav-left" href="<?php echo esc_url( home_url( '/' ) ); ?>">Cartridge Lit</a>
  <?php wp_nav_menu( array( 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
</nav>


</div>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

    <div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
