<?php

/*

Template Name: Home Page

*/

?>


<?php get_header(); ?>

<section class="hero-header" style="background-image: url(<?php the_field('hero_header_image'); ?>);">
	<div class="hero-copy">
		<h1><?php the_field('hero_header_copy_overlay') ;?></h1>
	</div>
</section>

<section class="intro-copy">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>MTL</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p><?php the_field('intro_copy'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button>Listen Now</button>
			</div>
		</div>
	</div>
</section>

<section class="news">
	<div></div>
	<div></div>
	<div></div>
</section>




<?php get_footer(); ?>