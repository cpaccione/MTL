<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>
    <script>

    </script>
  </head>

  <body <?php body_class(); ?>>

    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url') ;?>">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
          <style type="text/css">
          	.st0{fill:#A6CBF0;}
          	.st1{fill:#2C4E86;}
          </style>
          <g>
          	<circle class="st0" cx="25" cy="25" r="23.9"/>
          	<g>
          		<path class="st1" d="M20.4,24.6c0-1.8-0.5-2.8-1.5-3.4c-0.7-0.5-1.8-0.2-2.2-0.1c-1.4,0.3-2,1.9-2.6,4.1c-0.1-1.3-0.2-2.2-0.4-2.8
          			c-0.3-0.9-1-1-1.2-1c-0.4,0-1.2,0.4-1.9,1.4c0-0.1-0.2-0.9-1-1.2c-0.3-0.1-1.1-0.3-1.4,0.2c-1,2.3-1.3,4.9-4.2,7.2
          			c-0.3,0.3-0.5,0.3-0.2,0.6c0.4,0.4,0.7,0.3,0.8,0.3c0.7-0.4,3-1.6,4.7-4.7c-0.5,3.8-1.8,8-2.6,9.3c-0.1,0.1-0.1,0.4,0.1,0.8
          			c0,0,0.4,0.7,0.8,0.6c0,0,0,0,0,0c0.9-0.1,1.9-2.8,3.7-8.8c0.3-1,0.6-2,0.8-2.7c0.1,1.3,0.1,3.5,0,5.4c-0.1,3.9,0,4.6,0.2,4.8l0,0
          			l0,0c0.4,0.2,1,0.3,1.4,0.1c0.2-0.1,0.3-0.2,0.3-0.4c0.3-1.7,0.6-3.2,0.9-4.5c0.9-4.5,1.3-6.9,2.2-7l0,0c0.3-0.1,0.5,0,0.7,0.1
          			c1.3,1.2,0.3,7.5-0.2,10.2c-0.1,0.5-0.1,0.9-0.2,1.2c0,0.1,0,0.4,0.4,0.6c0.2,0.1,0.5,0.1,0.8,0.1c0.2,0,0.5-0.1,0.6-0.3
          			C20.2,33.8,20.5,28.5,20.4,24.6z"/>
          		<path class="st1" d="M47.3,23.1c-0.6-0.4-8.5,0.6-8.5,0.6l3.4-9.7c0.2-0.4,0.1-0.9-0.2-1.2c-0.4-0.4-0.9-1-1.2-1.1
          			c-0.4-0.2-0.7-0.2-0.9,0c-5.1,5.4-10.3,7.8-12.6,8.9c0.2-1.6,0.1-2.7,0-3.5c0.8-0.1,1.5-0.2,2.2-0.2c0.1,0,0.3-0.1,0.4-0.3
          			c0.2-0.5,0.3-1.8,0-2.2c-0.1-0.1-0.2-0.2-0.4-0.2c-6.9,1.3-10.5,5-10.5,5.1c-0.3,0.4-0.1,1.1,0.3,1.4c0.2,0.2,0.4,0,0.8-0.3
          			c0.7-0.5,2.7-2,5.1-2.8c0.6,2.6-0.3,6.6-5,16.6c-0.2,0.5,0.6,1.4,0.9,1.5c0.2,0.1,0.4,0,0.5-0.1c2.9-5.2,4.7-10.6,5.4-13.7
          			c1.1-0.2,5.6-1.2,12.9-7.5c-0.1,0.2-0.2,0.7-0.2,0.7l-3.3,8.8c0,0-5.1,1.6-7.3,2.9c-2.6,1.5-4.1,3.3-4.4,5.2
          			c-0.2,1.3-0.2,2.2,0.8,3.2c1.7,1.9,10.8,3.1,12.8-10c4.4-0.8,5.2-0.7,8-1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.2-0.7
          			C47.4,23.3,47.4,23.2,47.3,23.1z M36.4,25.4C34.9,32.3,31,34.5,29,34c-1.2-0.3-1.7-1-1.5-2.4C27.9,28.6,32.4,26.6,36.4,25.4z"/>
          	</g>
          </g>
          </svg>
          <!-- <h1>Mark Thomas Lambert</h1> -->
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav navbar-right',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
