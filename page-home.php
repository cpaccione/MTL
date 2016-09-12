<?php

/*

Template Name: Home Page

*/

?>

<?php

$counter = 0;

?>


<?php get_header(); ?>

<section class="home-hero" style="background-image: url(<?php the_field('home_hero'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="hero-copy">
					<h1>WELCOME</h1>
					<h2>I AM A BABY BOOMER MAKING BABY BOOMER MUSIC FOR BABY BOOMERS</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="intro-copy">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="intro-copy-wrap">
					<p><?php the_field('intro_copy'); ?></p>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-12">
				<div class="button-wrap">
					<a href="/music"><button type="button" class="btn btn-primary btn-lg btn-block active">LEARN MORE</button></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-music">
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

			<?php

				$args = array(
						'post_type' => 'albums',
						'orderby' => 'date',
						'order' => 'ASC'
						);
				$query = new WP_Query($args);

			?>


			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<?php if($counter % 3 === 0) : echo '<div class="row music-row">'; endif; ?>

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
