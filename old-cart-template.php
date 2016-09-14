<?php
/*
Template Name:Cart

*/
get_header(); ?>
<section class="store-header"></section>
<div class="container">
  <div class="col-md-12">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>

      <?php endwhile; else: ?>

          <h1>Oh no!</h1>
          <p>No content is appearing on this page!</p>

      <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
