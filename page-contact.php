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

<section class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="underline-wrap">
					<h2>sign up to receive my newsletter</h2>
					<div class="line">
						<hr>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
					<style type="text/css">
						  #mc_embed_signup {
						    background: #A6CBF0;
						    clear:left;
						    font-size:: 14px;
						    font-family: 'Roboto', sans-serif;
						    width: 100%;
						  }

						  #mc_embed_signup input.email {
						    font-family: 'Roboto', sans-serif;
						    height: 44px;
						  }

						  #mc_embed_signup .button {
						    font-family: 'Roboto', sans-serif;
						    background-color: transparent;
						    border: 1px solid #ffffff;
						    height: 44px;
						    font-size: 1.125rem;
						  }

						  #mc_embed_signup .button:hover {
						    background-color: #2C4E86;
						  }
					/*	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}*/
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>

					<div id="mc_embed_signup">
						<form action="//markthomaslambert.us15.list-manage.com/subscribe/post?u=af6afaec5ca4509b0e0c26bb0&amp;id=d890dd7f95" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_af6afaec5ca4509b0e0c26bb0_d890dd7f95" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
					</div>
				<!--End mc_embed_signup-->
			</div>
		</div>

		<!-- Newsletter legal copy -->
		<div class="row">
			<div class="col-sm-12">
				<div class="newsletter-legal">
					<small>We respect your privacy and will never sell, rent or loan your contact information to any third parties</small>	
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
