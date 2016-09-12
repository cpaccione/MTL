<?php

/*

Template Name: Music

*/

?>


<?php get_header(); ?>
<section class="default-header" style="background-image: url(<?php the_field('default_header'); ?>);"></section>

<section class="page-title">
	<div class="container">
			<div class="row">
		<div class="col-md-12">
			<div class="underline-wrap">
				<h2>music</h2>
				<div class="line">
					<hr class="orange">
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="music-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="music-intro-wrap">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
				</div>
			</div>
		</div>
	</div>
</section>



	<?php if( have_rows('album_section') ): ?>

		<?php while( have_rows('album_section') ): the_row();  ?>

<section class="music <?php if ($i % 2 == 0) : ?>music-white<?php endif; ?>"> <!-- music section start -->

<div class="container">

	<div class="row">
	<h3 class="scroll-target"><span id="<?php the_sub_field('smooth_scroll'); ?>"></span>scroll target</h3>
		<div class="col-md-6">
			<img src="<?php the_sub_field('album_cover'); ?>">
			<h3><?php the_sub_field('album_title'); ?></h3>

			<?php if( have_rows('link_list') ): ?>
				<?php while( have_rows('link_list') ): the_row(); ?>

					<p><?php the_sub_field('link_title');?> <a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('link_cta'); ?></a></p>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
		

		<div class="col-md-6">
			<hr class="grey">
			<?php if( have_rows('song_list') ): ?>
				<?php while( have_rows('song_list') ): the_row(); ?>
			
						<div class="song-row">
							<div class="row">

								<div class="col-md-10">
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

							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="lyrics <?php the_sub_field('lyrics_background_color'); ?>">
										<?php the_sub_field('song_lyrics'); ?>
									</div>
								</div>
							</div>
							
						</div>

						<hr class="grey">
					<?php $i++; ?>				
				<?php endwhile; ?>
			<?php  endif; ?>
		</div>

	</div>
</div>
</section> <!-- music section end -->
	<?php endwhile; ?>
<?php endif; ?>





<?php get_footer(); ?>