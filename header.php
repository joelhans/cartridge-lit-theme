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

<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicon-32x32.png" sizes="32x32">

<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/stylesheets/build/style.min.css" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Ubuntu:300,500,500italic|Crimson+Text:400,400italic,600italic,600" rel="stylesheet" type="text/css">

<!-- <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> -->
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/javascripts/build/script.min.js"></script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-stellar-background-ratio="1.1">

<header id="header" class="site-header" role="banner">
  <div class="container">
    <img class="header-bg" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/header_chrono.png" />

    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

    <nav class="colophon">
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" >About</a>
      <a href="<?php echo esc_url( home_url( '/submissions/' ) ); ?>" rel="home">Submissions</a>
      <a href="<?php echo esc_url( home_url( '/contributors/' ) ); ?>" rel="home">Contributors</a>
      <a href="<?php echo esc_url( home_url( '/masthead/' ) ); ?>">Masthead</a>
    </nav>

    <nav class="categories">
      <a class="nav-fiction" href="<?php echo esc_url( get_category_link( get_cat_ID( 'Fiction' ) ) ) ?>">Fiction</a>
      <a class="nav-poetry" href="<?php echo esc_url( get_category_link( get_cat_ID( 'Poetry' ) ) ) ?>">Poetry</a>
      <a class="nav-non-fiction" href="<?php echo esc_url( get_category_link( get_cat_ID( 'Non-Fiction' ) ) ) ?>">Non-fiction</a>
      <a href="<?php echo esc_url( home_url( '/issues/' ) ); ?>">Issues</a>
      <a href="<?php echo esc_url( home_url( '/chapbooks/' ) ); ?>">Chapbooks</a>
      <a href="<?php echo esc_url( home_url( '/the-airship/' ) ); ?>">The Airship (blog)</a>
    </nav>

  </div>
</header>
<div class="header-border"></div>

<div id="page" class="hfeed site">
