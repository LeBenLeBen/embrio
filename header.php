<!Doctype html>
<html class="no-js">
  <head>
    <title><?php wp_title( '&middot;', true, 'right' ); ?></title>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="cleartype" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?= get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header>
      <h1><a href="<?= home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <p><?php bloginfo( 'description' ); ?></p>

      <?php wp_nav_menu(); ?>

      <?php get_search_form(); ?>
    </header>