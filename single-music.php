<?php
/*
 * Template Name: Music
 * Template Post Type: post
 */

get_header();
?>
<main class="bg-white">
	<div class="container">
	  <?php
	  /* Start the Loop */
	  while ( have_posts() ): the_post();
	  get_template_part( 'template-parts/post/content-single', get_post_format() );

	  setPostViews( get_the_ID() );

	  endwhile; // End of the loop.
	  ?>
	</div>
</main>
<aside class="col-12 text-center p-20">
    <?php  get_template_part( 'template-parts/share', 'share-page-horizontal.php'); ?>
</aside>
<section class="bg-dark-blue container">
  <div class="p-0 p-md-40">
    <div class="text-center mb-20">
      <h2 class="text-white">Related</h2>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
        $related = get_posts( array( 'category__in' => wp_get_post_categories( $post->ID ), 'numberposts' => 6, 'post__not_in' => array( $post->ID ) ) );
        if ( $related )
          foreach ( $related as $post ) {
            setup_postdata( $post );
            ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( "swiper-slide text-center"); ?>>
          <div class="position-relative w-1-1 mb-40">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_s' ); ?>
            <img class="block__image relative w-1-1 rounded js__equalheight" src="<?php echo $image[0]; ?>">
            <?php endif; ?>
            <div class="audio d-table w-1-1 position-absolute top-0 left-0 js__equalheight" style="height: 100%">
              <?php $audio = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'audio' ) ); ?>
              <?php if ( empty( $audio ) ) : ?>
              <?php else : ?>
              <?php foreach ( $audio as $attachment_id => $attachment ) : ?>
              <div class="player d-table-cell align-middle">
                <audio controls>
                  <source src="<?php echo wp_get_attachment_url( $attachment_id, 'full' ); ?>" type="audio/mpeg">
                </audio>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <p class="mt-20"><a class="" href="<?php the_permalink(); ?>">View</a></p>
        </div>
        <?php } wp_reset_postdata(); ?>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next" style="top: 37%;"></div>
      <div class="swiper-button-prev" style="top: 37%;"></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/audioplayer.js"></script> 
<script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 40,
        breakpoints: {
            767: {
                slidesPerView: 1,
                spaceBetween: 20
            }
        },
        keyboard: {
            enabled: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true,
    });

    // AUDIO PLAYER
    GreenAudioPlayer.init({
        selector: '.player', 
        stopOthersOnPlay: true
    });
</script>