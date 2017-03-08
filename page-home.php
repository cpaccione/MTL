<?php

/*

Template Name: Home Page

*/

?>

<?php

$counter = 0;

?>


<?php get_header(); ?>

<section class="home-hero" style="background-image: url(<?php the_field('home_hero'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="hero-copy">
					<h1>WELCOME</h1>
					<h2>I AM A BABY BOOMER MAKING BABY BOOMER MUSIC</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="intro-copy">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="intro-copy-wrap">
					<p><?php the_field('intro_copy'); ?></p>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-12">
				<div class="button-wrap">
					<a href="/about/"><button type="button" class="btn btn-primary btn-lg btn-block active">LEARN MORE</button></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-music">
	<div class="container">

		<section class="page-title">
			<div class="row">
				<div class="col-md-12">
					<div class="underline-wrap">
						<h2>music</h2>
						<div class="line">
							<hr>
						</div>
					</div>
				</div>
			</div>
		</section>

			<?php

				$args = array(
						'post_type' => 'albums',
						'orderby' => 'date',
						'order' => 'ASC'
						);
				$query = new WP_Query($args);

			?>


			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<?php if($counter % 3 === 0) : echo '<div class="row music-row">'; endif; ?>

					<div class="col-sm-4">
						<?php
						//vars
						$albumCover = get_field('album_cover');

						?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $albumCover['url']; ?>" alt="<?php echo $albumCover['alt']; ?>"></a>
						<p>
							<?php echo $albumCover['caption']; ?>
						</p>
						<p>
							<a href="<?php the_permalink(); ?>">HEAR ALBUM <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</p>
					</div>

				<?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>

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
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="//markthomaslambert.us15.list-manage.com/subscribe/post?u=af6afaec5ca4509b0e0c26bb0&amp;id=3330f8fd2f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					<!-- <label for="mce-EMAIL"></label> -->
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_af6afaec5ca4509b0e0c26bb0_3330f8fd2f" tabindex="-1" value=""></div>
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
