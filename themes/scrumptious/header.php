<?php
/**
* Header template for the theme
*
* Displays all of the <head> section and up till <div id="page-content">
*
*/
?><!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body>

  <header class="centered-navigation" role="banner">
    <div class="centered-navigation-wrapper">
      <a href="javascript:void(0)" class="mobile-logo">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="Logo image">
      </a>
      <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
      <nav role="navigation">
        <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
          <li class="nav-link"><a href="javascript:void(0)">Products</a></li>
          <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
          <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
          <li class="nav-link logo">
            <a href="javascript:void(0)" class="logo">
              <img src="<?php bloginfo('template_url'); ?>/images/scrumptious-logo.png" alt="Logo image">
            </a>
          </li>
          <li class="nav-link"><a href="javascript:void(0)">Testimonials</a></li>
          <li class="nav-link more"><a href="javascript:void(0)">More</a>
            <ul class="submenu">
              <li><a href="javascript:void(0)">Submenu Item</a></li>
              <li><a href="javascript:void(0)">Another Item</a></li>
              <li class="more"><a href="javascript:void(0)">Item with submenu</a>
                <ul class="submenu">
                  <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
                  <li><a href="javascript:void(0)">Another Item</a></li>
                </ul>
              </li>
              <li class="more"><a href="javascript:void(0)">Another submenu</a>
                <ul class="submenu">
                  <li><a href="javascript:void(0)">Sub-submenu</a></li>
                  <li><a href="javascript:void(0)">An Item</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-link"><a href="javascript:void(0)">Sign up</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="page-content">