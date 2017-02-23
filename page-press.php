<?php

/*

Template Name: Press

*/

?>


<?php get_header(); ?>

	<section class="default-header" style="background-image: url(<?php the_field('default_header'); ?>);"></section>

		<section class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="underline-wrap">
							<h2>press</h2>
							<div class="line">
								<hr>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="press-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="press-copy">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="press-docs">
			<div class="container">
				<div class="row">
					<ul>
						<li>
							<p class="title">Press Release</p>
							<p class="subhead">Lorem ipsum, can include year</p>
							<a class="button" href="<?php bloginfo('template_directory'); ?>/docs/press_release.pdf" download="Press Release">DOWNLOAD</a>
						</li>
						<li>
							<p class="title">Press Kit</p>
							<p class="subhead">Lorem Ipsum, can include year</p>
							<a class="button" href="<?php bloginfo('template_directory'); ?>/docs/press_kit.pdf" download="Press Kit">DOWNLOAD</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="press-bg"></section>

<?php get_footer(); ?>
