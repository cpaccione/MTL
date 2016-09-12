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

<section class="page-title">
	<div class="container">
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

		<div class="row">
			<div class="col-md-12">
				<div class="music-intro">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
					</p>
				</div>
			</div>
		</div>

	<!-- container close -->
	</div>
	<!-- page-title close -->
</section>

	<?php

		$args = array(
				'post_type' => 'albums',
				'orderby' => 'date',
				'order' => 'ASC'
				);
		$query = new WP_Query($args);

	?>

	<section class="home-music">
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
