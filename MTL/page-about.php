<?php

/*

Template Name: About

*/

?>


<?php get_header(); ?>

<section class="hero-header" style="background-image: url(<?php the_field('hero_header_image'); ?>);">
	<div class="hero-copy">
		<h1><?php the_field('hero_header_copy_overlay') ;?></h1>
	</div>
</section>



<?php get_footer(); ?>