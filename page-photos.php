<?php

/*

Template Name: Photos

*/

?>

<?php

$countertwo = 0;


?>

<?php get_header(); ?>

<section class="default-header" style="background-image: url(<?php the_field('hero_image'); ?>);"></section>

<section class="music">
	<div class="container">
		<section class="page-title">
		<div class="row">
			<div class="col-md-12">
				<div class="underline-wrap">
					<h2 id="photos">photos</h2>
					<div class="line">
						<hr>
					</div>
				</div>
			</div>
		</div>
	</section>

		<?php if( have_rows('photo_section') ): ?>

			<?php while( have_rows('photo_section') ): the_row();

			// vars
			$photo = get_sub_field('photo');
			$thumbnail = get_sub_field('thumbnail');


			?>

				<?php if($countertwo % 3 === 0) : echo '<div class="row photo-row">'; endif; ?>

					<div class="col-sm-4">
						<div class="photo-wrap">
							<a href="<?php echo $photo['url']; ?>" data-lightbox="MTL" data-title="<a href='<?php the_sub_field('hires'); ?>' target='_blank'>HIGH RES</a> OR <a href='<?php the_sub_field('lowres'); ?>' target='_blank'>LOW RES</a>"><img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>"></a>
						</div>
					</div>

				<?php $countertwo++; if($countertwo % 3 === 0) : echo '</div>'; endif; ?>

			<?php endwhile; ?>

		<?php endif; ?>


	</div>
</section>


<?php get_footer(); ?>
