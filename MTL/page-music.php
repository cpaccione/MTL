<?php

/*

Template Name: Music

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
				<h2>MUSIC</h2>
				<div class="line">
					<hr class="orange">
				</div>
			</div>
		</div>
	</div>

	<?php if( have_rows('album_section') ): ?>

		<?php while( have_rows('album_section') ): the_row();  ?>

	<div class="row">
		<div class="col-md-6">
			<img src="<?php the_sub_field('album_cover'); ?>">
			<h3><?php the_sub_field('album_title'); ?></h3>
		</div>
		

		<div class="col-md-6">

			<?php if( have_rows('song_list') ): ?>
				<?php while( have_rows('song_list') ): the_row(); ?>


			<hr class="grey">
			<div class="song-row">
				
				<div class="row">
					<div class="col-md-10">

						<audio id="yourAudio" src="<?php //the_sub_field('song_upload'); ?>" preload="none"></audio>

<!-- <a href="" onclick="this.firstChild.play()"><audio id="audioControl" src="<?php the_sub_field('song_upload'); ?>"></audio><i class="fa fa-play"></i></a> -->

						<!-- <a href="#" id="audioControl"><i class="fa fa-play"></i></button></a> -->

						<audio id="myAudio"></audio>

						<div class="mp3Player" data-src="<?php the_sub_field('song_upload'); ?>" data-pos="0">
						    <!-- <button class="btnPlayPause button">►||</button> -->
						    <a href="#" class="btnPlayPause button"><i class="fa fa-play"></i></a>
<!-- 						    <button class="btnMute button">MUTE</button>
						    <span class="infoLabel">Audio #1</span> -->
						    <?php the_sub_field('song_title'); ?>
						</div>

							

					</div>

					<div class="col-md-2">
						<a href="#" class="expand-lyrics">LYRICS</a>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="lyrics">
								<?php the_sub_field('song_lyrics'); ?>
							</div>
						</div>
					</div>

				</div>
			</div>

				<?php endwhile; ?>
			<?php endif; ?>


		</div>
	</div>


	<?php endwhile; ?>
<?php endif; ?>

</div>

</section>

<?php get_footer(); ?>