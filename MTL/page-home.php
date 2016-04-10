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
				<div class="underline-wrap">
					<span class="underline">
						<h2>MTL</h2>
					</span>
				</div>
			</div>
		</div>
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
                    <a href="#"><button type="button" class="btn btn-primary btn-lg btn-block active">LISTEN NOW</button></a>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="underline-wrap">
					<span class="underline">
						<h2>NEWS</h2>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>




<?php get_footer(); ?>