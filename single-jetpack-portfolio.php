<?php
/*
 * Template Name: Portfolio
 * Template Post Type: post, page, product
 */

get_header();
?>
<main class="bg-main">
  <?php
  /* Start the Loop */
  while ( have_posts() ): the_post();
  get_template_part( 'template-parts/post/content-single-portfolio', get_post_format() );

  endwhile; // End of the loop.
  ?>
</main>
<aside class="text-center p-20">
  <?php get_template_part( 'template-parts/share/share', 'page-horizontal'); ?>
</aside>
<section class="pt-40">
  <div class="container">
    <div class="text-center">
      <h2 class="display-4">Related</h2>
    </div>
    <div class="py-20">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php

          $related = get_posts( array( 'category__in' => wp_get_post_categories( $post->ID ), 'numberposts' => 5, 'post_type' => 'jetpack-portfolio', 'post__not_in' => array( $post->ID ) ) );
          if ( $related )
            foreach ( $related as $post ) {
              setup_postdata( $post );
              ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class( "swiper-slide block block_link pb-20 position-relative overflow-hidden"); ?>> <a class="block__link" href="<?php the_permalink(); ?>"></a>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_small' ); ?>
            <div class="block__content">
              <div class="block__image-container position-relative overflow-hidden">
                <div class="block__image h-200 h-md-300" style="background-image: url('<?php echo $image[0]; ?>'); background-position:center center; background-size:cover;"> </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php
          }
          wp_reset_postdata();
          ?>
          
          <!-- end custom related loop, isa --> 
          
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next top-150"></div>
        <div class="swiper-button-prev top-150"></div>
      </div>
    </div>
    <div class="text-center"> <a href="/portfolio" class="btn border bw-2 border-tertiary text-uppercase text-tertiary hover:text-white hover:bg-tertiary rounded-pill mb-20 mb-md-0">View all</a> </div>
  </div>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 320px

            420: {
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
</script>