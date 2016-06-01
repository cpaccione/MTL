<?php

/*

Template Name: Media

*/

?>


<?php get_header(); ?>

<section class="hero-header" style="background-image: url(<?php the_field('hero_header_image'); ?>);">
	<div class="hero-copy">
		<h1><?php the_field('hero_header_copy_overlay') ;?></h1>
	</div>
</section>


<section class="music">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="underline-wrap">
					<h2 id="videos">VIDEOS</h2>
					<div class="line">
						<hr class="orange">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="music">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="underline-wrap">
					<h2 id="photos">PHOTOS</h2>
					<div class="line">
						<hr class="orange">
					</div>
				</div>
			</div>
		</div>

		<?php if( have_rows('photo_section') ): ?>

			<?php while( have_rows('photo_section') ): the_row(); 


			// $photo = get_sub_field('photo');
			$thumbnail = get_sub_field('thumbnail');


			?>

				<?php if($counter % 3 === 0) : echo '<div class="row photo-row">'; endif; ?>

					<div class="col-sm-4">
						<div class="photo-wrap">
							<a class="fancybox" href="<?php the_sub_field('photo'); ?>" data-fancybox-group="gallery" title="Lorem Ipsum"><img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>"></a>
						</div>
					</div>

				<?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>
		
			<?php endwhile; ?>

		<?php endif; ?>


	</div>
</section>

<?php get_footer(); ?>