<?php

/*

Template Name: Music

*/

?>

<?php

$counter = 0;

?>


<?php get_header(); ?>
<section class="default-header" style="background-image: url(<?php the_field('default_header'); ?>);"></section>
	<div class="container">

		<section class="page-title">
				<div class="row">
					<div class="col-md-12">
						<div class="underline-wrap">
							<h2>music</h2>
								<div class="line">
									<hr>
								</div>
						</div>
					</div>
				</div>
		<!-- page-title close -->
		</section>

		<div class="row">
			<div class="col-md-12">
				<div class="music-intro">
					<p>
						I like to write songs about love, emotions, relationships, life and life's lessons that are foot tapping and tell a story — sometimes with a serious element and other times just intended to be fun. Depending on the song, I believe my music can fall in the pop- rock, soft rock, or country categories. My primary music influences come from The Beatles, Elvis Presley and Johnny Cash (showing my age), however, there are several other artists on my playlist that I enjoy listening to. I feel that my songs are primarily directed to my Baby Boomer generation. I see them as a second chance to relive the genre of music we grew up with.
					</p>
				</div>
			</div>
		</div>

	<!-- container close -->
	</div>


	<?php

		$args = array(
				'post_type' => 'albums',
				'orderby' => 'date',
				'order' => 'ASC'
				);
		$query = new WP_Query($args);

	?>

	<section class="single-music">
		<div class="container">

	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<?php if($counter % 3 === 0) : echo '<div class="row">'; endif; ?>

			<div class="col-sm-4">
				<?php
				//vars
				$albumCover = get_field('album_cover');

				?>
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $albumCover['url']; ?>" alt="<?php echo $albumCover['alt']; ?>"></a>
				<p>
					<?php echo $albumCover['caption']; ?>
				</p>
				<p>
					<a href="<?php the_permalink(); ?>">HEAR ALBUM <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</p>
			</div>

		<?php $counter++; if($counter % 3 === 0) : echo '</div>'; endif; ?>
	<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>
	</section>


<?php get_footer(); ?>
