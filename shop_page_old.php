<?php 
/* 
Template Name:Shop 

*/
get_header(); ?>

<div class="container quote">
Testing
<section class="hero-header" style="background-image: url(<?php the_field('hero_header_image'); ?>);">
		<div class="hero-copy">
		<h1><?php the_field('hero_header_copy_overlay') ;?></h1>
		</div>
</section>
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