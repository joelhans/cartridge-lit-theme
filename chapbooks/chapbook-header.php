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

<!-- <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> -->

<?php wp_head(); ?>
