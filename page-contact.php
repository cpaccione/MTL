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
					<p>I'd love to hear from you! Please use the form below to send a message.</p>
				</div>
			</div>
		</div>

	</div>

</section>

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contact-wrap">
					<?php //echo do_shortcode( '[contact-form-7 id="107" title="MTL Form"]' ); ?>	
					<?php echo do_shortcode( '[contact-form-7 id="44" title="MTL Form"]' ); ?>	
					<p class="small-copy-contact">We respect your privacy and will never sell, rent or loan your contact information to any third parties.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>