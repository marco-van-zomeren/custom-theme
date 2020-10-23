<?php
/*
 * Template Name: Design
 * Template Post Type: post, page, product
 */

get_header();
?>
<main class="bg-white">
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
<section class="bg-secondary pt-40">
  <div class="container">
    <div class="text-center">
      <h2 class="display-4 text-white">Related</h2>
    </div>
    <div class="py-20">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php
          $related = get_posts( array( 'category__in' => wp_get_post_categories( $post->ID ), 'numberposts' => 6, 'post__not_in' => array( $post->ID ) ) );
          if ( $related )
            foreach ( $related as $post ) {
              setup_postdata( $post );
              ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class( "swiper-slide col-12 col-md-4 block block_link position-relative"); ?>> <a class="block__link" href="<?php the_permalink(); ?>"></a>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_s' ); ?>
            <div class="block__image-container overflow-hidden">
              <div class="block__image col-12 h-300" style="background-image: url('<?php echo $image[0]; ?>'); background-position:center"> </div>
            </div>
            <?php endif; ?>
            <div class="pt-20">
              <header class="col-12 align-self-center justify-content-center">
                <h3 class="text-white text-center">
                  <?php the_title(); ?>
                </h3>
              </header>
            </div>
          </div>
          <?php } wp_reset_postdata(); ?>
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