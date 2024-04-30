<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  </style>
  <?php wp_head() ?>
</head>

<body>

  <header>
    <div class="header-container">
      <div class="header-container--leftside">
        <div class="header-logo-container">
          <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="logo"></a>
        </div></a>
        <nav class="nav-container">
          <?php wp_nav_menu(
            array(
              'theme_location' => 'header-first-menu',
              'menu_class' => 'menu-principal',
              'container_class' => 'container-menu',
            )
          );
          ?>
        </nav>
      </div>
      <div class="header-container--rightside">
        <?php
        do_action('search_header');
        ?>
        <nav class="nav-secondary-menu">
          <ul>
            <li class="search-button--user"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Profile.svg" alt="icono usuario">
            </li>
            <li class="search-button--user"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Vector.svg" alt="icono pin mapa">
            </li>
            <li class="search-button--user"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Shop.svg" alt="icono usuario">
            </li>
            <li><?php
                do_action('cart-icon'); ?></li>
            <ul>
        </nav>
      </div>
    </div>
  </header>