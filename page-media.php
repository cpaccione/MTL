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
					<!-- the class "videoWrapper169" means a 16:9 aspect ration video. Another option is "videoWrapper43" for 4:3. -->
					<div class="videoWrapper videoWrapper169 js-videoWrapper">
						<!-- YouTube iframe. -->
						<!-- note the iframe src is empty by default, the url is in the data-src="" argument -->
						<!-- also note the arguments on the url, to autoplay video, remove youtube adverts/dodgy links to other videos, and set the interface language -->
						<iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/ePv_RxG6sag?autoplay=1"></iframe>
						<!-- the poster frame - in the form of a button to make it keyboard accessible -->
						<button class="videoPoster js-videoPoster" style="background-image:url(<?php bloginfo('template_directory');?>/images/Nashville_Music_Image.png);">Play video</button>
					</div>
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
