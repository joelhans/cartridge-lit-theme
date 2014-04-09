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

<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/favicon-32x32.png" sizes="32x32">

<link href='http://fonts.googleapis.com/css?family=Ubuntu:500,500italic,400italic|Vollkorn:400italic,400|Roboto+Slab' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header id="header" class="site-header" role="banner">
  <div class="container">

    <div class="title">    

      <img class="header-logo" src="<?php bloginfo( 'template_directory' ); ?>/img/cartridge_lit_logo.png" />
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

    </div>
    
    <!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->

  </div>
</header>

<div class="nav">
  <nav role="navigation">
    <div class="nav-left"> 
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" >About</a>
      <a href="<?php echo esc_url( home_url( '/submissions/' ) ); ?>" rel="home">Submissions</a>
      <a href="<?php echo esc_url( home_url( '/the-airship/' ) ); ?>">The Airship (blog)</a>
      <a href="<?php echo esc_url( home_url( '/masthead/' ) ); ?>">Masthead</a>
    </div>
  </nav>
</div>

<div id="page" class="hfeed site">
