<?php

/*

Template Name: Contact

*/

?>


<?php get_header(); ?>
<section class="default-header" style="background-image: url(<?php the_field('default_header'); ?>);"></section>

<section class="contact-copy">

	<div class="container">

	<section class="page-title">
		<div class="row">
			<div class="col-md-12">
				<div class="underline-wrap">
					<h2>contact</h2>
					<div class="line">
						<hr>
					</div>
				</div>
			</div>
		</div>
	</section>

		<div class="row">
			<div class="col-md-12">
				<div class="subhead">
					<p>I'd love to hear from you so leave a mesage!</p>
				</div>
			</div>
		</div>

	</div>

</section>

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo do_shortcode( '[contact-form-7 id="44" title="MTL Form"]' ); ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>