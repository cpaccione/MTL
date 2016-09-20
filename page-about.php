<?php

/*

Template Name: About

*/

?>

<?php get_header(); ?>

<!-- default header -->
<section class="default-header" style="background-image: url(<?php the_field('default_header'); ?>);"></section>

<!-- page title section -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="underline-wrap">
					<h2>about</h2>
					<div class="line">
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- mtl styles -->
<section class="about-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="about-intro-wrap">
					<p>
						3/6 beatles + 2/6 elvis + 1/6 johnny cash =
					</p>
					<h2>mark thomas lambert sound</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- about mtl -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="about-me-wrap">
				<p>
					I’m a never too late Baby Boomer, writing Baby Boomer era rock/pop music for Baby Boomers. My songs are most influenced by The Beatles, Elvis and Johnny Cash. I still don’t read or write notes but I pen the words and create the melodies and then surround myself with professional musicians and technicians. I still work full time as a commercial real estate developer but enjoy finding time to work on the next song.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- mtl young/old photo -->
<section class="photos">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<figure class="figure">
					<img class="figure-img center-block" src="<?php bloginfo('template_directory'); ?>/images/about-photo-past.jpg" alt="Mark Thomas Lamber - MTL">
					<figcaption class="figure-caption text-sm-left">Muskegan, MI - 19XX</figcaption>
				</figure>
			</div>
			<div class="col-sm-6">
				<figure class="figure">
					<img class="figure-img center-block" src="<?php bloginfo('template_directory'); ?>/images/about-photo-present.jpg" alt="Mark Thomas Lambert - MTL">
					<figcaption class="figure-caption text-sm-left">Nashville, TN - 2015</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>

<!-- about learn more section -->
<section class="about-learn-more">

	<!-- page title section -->
	<section class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="underline-wrap">
						<h2>learn more</h2>
						<div class="line">
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- pdf container -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="pdf-wrap">
					<ul class="pdf-list">
						<li><img src="<?php bloginfo('template_directory'); ?>/images/pdf_placeholder.jpg" alt="PDF" />
							<p>
								About MTL PDF
							</p>
							<p>
								<a href="#">DOWNLOAD NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
							</p>
						</li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/pdf_placeholder.jpg" alt="PDF" />
							<p>
								Press Kit
							</p>
							<p>
								<a href="#">DOWNLOAD NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
							</p>
						</li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/pdf_placeholder.jpg" alt="PDF" />
							<p>
								Press Release
							</p>
							<p>
								<a href="#">DOWNLOAD NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
