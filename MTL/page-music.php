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
				<span class="underline">
					<h2>MUSIC</h2>
				</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<div class="song-row">
			<div class="row">
				<div class="col-md-10">
					<audio id="yourAudio"
						<source src="<?php bloginfo('template_directory');?>/audio/01_Im_Insecure_Immature_Inefficient.mp3" preload="none">
						</source>
					</audio>
					<a href="#" id="audioControl"><i class="fa fa-play"></i></a>
					I'm Insecure Immature Inefficient Inconsistent
				</div>
				<div class="col-md-2">
			
					<a href="#" class="expand-lyrics">Lyrics</a>

				</div>
			</div>
			<div class="row">
				<div class="lyrics">
					CRAZY CRAZY CRAZY

					You’re makin’ me crazy
					You’re drivin’ me insane
					Why can’t you try to be
					A little more humane

					One moment you’re happy
					The next moment you’re sad
					Turn around you’re good
					Next you’re feelin’ bad

					You’re makin’ me crazy
					You’re drivin’ me insane
					Why can’t you try to be
					A little more humane
				</div>
			</div>
			</div>
			<div class="row">
				<div class="song-row">
					<a href="#" class="expand-lyrics">Lyrics</a>
					<div class="lyrics">
						CRAZY CRAZY CRAZY

						You’re makin’ me crazy
						You’re drivin’ me insane
						Why can’t you try to be
						A little more humane

						One moment you’re happy
						The next moment you’re sad
						Turn around you’re good
						Next you’re feelin’ bad

						You’re makin’ me crazy
						You’re drivin’ me insane
						Why can’t you try to be
						A little more humane
					</div>
				</div>
			</div>


		</div>
	</div>

</div>

</section>

<?php get_footer(); ?>