<?php

/*

Template Name: Contact

*/

?>


<?php get_header(); ?>

<section class="hero-header" style="background-image: url(<?php the_field('hero_header_image'); ?>);">
	<div class="hero-copy">
		<h1><?php the_field('hero_header_copy_overlay') ;?></h1>
	</div>
</section>


<section class="contact-copy">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="underline-wrap">
					<h2>EMAIL</h2>
					<div class="line">
						<hr class="orange">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3>I'd love to hear from you so leave a mesage!</h3>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>