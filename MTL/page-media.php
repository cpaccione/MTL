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


<section class="music-videos">
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

		<div class="row">
			<div class="col-md-12">
				<div class="video-wrapper">
					<video width="100%" height="100%" controls alt="MTL featured video">
						<source src="<?php bloginfo('template_directory'); ?>/video/nashville_tennessee_2.mp4" type="video/mp4">
						<p>Your browser does not support this video file.</p>
					</video>
				</div>
			</div>
		</div>

		<div class="row">

			<?php if( have_rows('youtube_gallery') ): ?>

				<?php while(  have_rows('youtube_gallery') ): the_row(); 

				//vars
				$link = get_sub_field('youtube_link');
				$thumbnail = get_sub_field('youtube_thumbnail');
				$song_title = get_sub_field('song_title');
				$album_title = get_sub_field('album_title');

				?>

				<?php if($counter % 3 === 0) : echo '<div class="row photo-row">'; endif; ?>

					<div class="col-sm-4">
						<div class="youtube-gallery">
							<a class="youtube-videos fancybox.iframe" href="<?php echo $link; ?>?autoplay=1"><img class="center-block" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>"></a>
						</div>
						<div class="video-info">
							<h3><?php echo $song_title; ?></h3>
							<p><?php echo $album_title; ?></p>
						</div>
					</div>

				<?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>

			<?php endwhile; ?>

		<?php endif; ?>

	
		</div>

		 <div class="row text-center">
            <div class="col-xs-12">
            	<div class="youtube-cta">
            		<h5>SEE MORE VIDEOS</h5>
            	</div>
                <div class="button-wrap">
                    <a href="https://www.youtube.com/channel/UChiB1DVDNSRu-NSMDSxSFag" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block active">VISIT YOUTUBE</button></a>
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
							<a class="fancybox" href="<?php the_sub_field('photo'); ?>" data-fancybox-group="gallery" title=""><img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>"></a>
						</div>
					</div>

				<?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>
		
			<?php endwhile; ?>

		<?php endif; ?>


	</div>
</section>

<?php get_footer(); ?>