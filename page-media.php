<?php

/*

Template Name: Media

*/

?>

<?php

$counterone = 0;
$countertwo = 0;

?>


<?php get_header(); ?>
<section class="default-header" style="background-image: url(<?php the_field('default_header'); ?>);"></section>


<section class="music-videos">
	<div class="container">
	<section class="page-title">
		<div class="row">
			<div class="col-md-12">
				<div class="underline-wrap">
					<h2 id="videos">videos</h2>
					<div class="line">
						<hr>
					</div>
				</div>
			</div>
		</div>
	</section>

		<div class="row">
			<div class="col-md-12">
				<div class="video-wrapper">
					<video width="100%" height="100%" controls poster="<?php bloginfo('template_directory'); ?>/images/Nashville_Music_Image.png" alt="MTL featured video">
						<source src="<?php bloginfo('template_directory'); ?>/video/nashville_tennessee_2.mp4" type="video/mp4">
						<p>Your browser does not support this video file.</p>
					</video>
				</div>
			</div>
		</div>

		<!-- <div class="row"> -->

			<?php if( have_rows('youtube_gallery') ): ?>

				<?php while(  have_rows('youtube_gallery') ): the_row();

				//vars
				$link = get_sub_field('youtube_link');
				$thumbnail = get_sub_field('youtube_thumbnail');
				$song_title = get_sub_field('song_title');
				$album_title = get_sub_field('album_title');

				?>

				<?php if($counterone % 3 === 0) : echo '<div class="row photo-row">'; endif; ?>

					<div class="col-sm-4">
						<div class="youtube-gallery">
							<a class="youtube-videos fancybox.iframe" href="<?php echo $link; ?>?autoplay=1"><img class="center-block" src="<?php echo $thumbnail; ?>" alt="Mark Thomas Lambert"></a>
						</div>
						<div class="video-info">
							<h3><?php echo $song_title; ?></h3>
							<p><?php echo $album_title; ?></p>
						</div>
					</div>

				<?php $counterone++; if($counterone % 3 === 0) : echo '</div>'; endif; ?>

			<?php endwhile; ?>

		<?php endif; ?>

		<!-- </div> -->

		 <div class="row text-center">
      <div class="col-xs-12">
        <div class="button-wrap">
            <a href="https://www.youtube.com/channel/UChiB1DVDNSRu-NSMDSxSFag" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block active">VISIT YOUTUBE</button></a>
        </div>
      </div>
    </div>

	</div>
</section>


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
