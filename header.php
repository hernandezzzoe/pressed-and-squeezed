<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type'); ?>; charset=?php bloginfo( 'charset' ); ?>">
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/pressed-and-squeezed/style.css"/>
  <?php wp_head(); ?>
  <title>Pressed and Squeezed</title>
  <script src="http://use.edgefonts.net/josefin-slab.js"></script>
  <script src="http://use.edgefonts.net/merriweather.js"></script>
</head>
<body <?php body_class( $class ); ?>>
  <header>
    <h1>Pressed and Squeezed</h1>
    <nav>
      <?php wp_nav_menu( array( 'menu' => 'Main Nav') )?>
      <!--<ul>
        <li>Home</li>
        <li>WordPress</li>
      </ul> -->
    </nav>
  </header>
