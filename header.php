<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="container">
    <nav id="main-nav">
      <a href="<?php echo home_url('/'); ?>">
        <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png">
      </a>
      <?php 
        wp_nav_menu(
          array(
            'theme_location'    => 'primary',
            'menu_class'        => 'is-current'
          )
        );
      ?>

      <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="search-input" type="text" name="s" placeholder="Search...">
        <!-- <button class="search-button" type="submit"><i class="fa fa-search"></i></button> -->
      </form>

      <button class="btn-danger"><a href="#">Login</a></button>
      
      <button class="btn-dark"><a href="#">Logout</a></button>
    </nav>
  </div> 
</header>