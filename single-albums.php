<?php get_header(); ?>

<?php

$counter = 0;

?>

<section class="store-header"></section>

<div class="container">

<div class="row">
  <div class="album-detail">
  <div class="col-md-6">
    <?php
    //vars
    $albumCover = get_field('album_cover');

    ?>
    <img src="<?php echo $albumCover['url']; ?>" alt="<?php echo $albumCover['alt']; ?>">
    <h3><?php the_field('album_title'); ?></h3>

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
                    <a href="#" class="btnPlayPause button"><i class="fa fa-play"></i></a>
                    <?php the_sub_field('song_title'); ?>
                </div>
              </div>

              <div class="col-md-2">
                <a href="#" class="expand-lyrics">LYRICS</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="lyrics">
                  <?php the_sub_field('song_lyrics'); ?>
                </div>
              </div>
            </div>

          </div>

            <hr class="grey">
          <?php //$i++; ?>
        <?php endwhile; ?>
      <?php  endif; ?>
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
</div>
<!-- </section> -->
<!-- music section end -->


<?php get_footer(); ?>
