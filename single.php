<?php get_header();?>
<main class="bg-main">
  <article class="container">
    <?php
    while ( have_posts() ): the_post();
    get_template_part( 'template-parts/post/content-single', get_post_format() );
    setPostViews( get_the_ID() );
    endwhile;
    ?>
  </article>
</main>
<!-- SHARE PAGE -->
<section class="bg-main text-center p-20">
  <?php get_template_part( 'template-parts/share/share', 'page-horizontal'); ?>
</section>
<!-- -->
<!-- RELATED POSTS -->
<section class="bg-main py-20 px-10 px-md-30">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="mb-20">Related</h2>
      </div>
      <div class="col-12">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php
            $related = get_posts( array( 'category__in' => wp_get_post_categories( $post->ID ), 'numberposts' => 6, 'post__not_in' => array( $post->ID ) ) );
            if ( $related )
              foreach ( $related as $post ) {
                setup_postdata( $post );
                ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class( "swiper-slide block block_link position-relative rounded"); ?>> <a class="block__link" href="<?php the_permalink(); ?>"></a>
              <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_s' ); ?>
              <div class="block__image-container overflow-hidden">
                <div class="block__image col-12 h-200" style="background-image: url('<?php echo $image[0]; ?>')"> </div>
              </div>
              <?php endif; ?>
              <div class="pt-20">
                <header class="align-self-center justify-content-center">
                  <h3 class="mb-10">
                    <?php the_title(); ?>
                  </h3>
                </header>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Read more</a></p>
              </div>
            </div>
            <?php } wp_reset_postdata(); ?>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next top-100"></div>
          <div class="swiper-button-prev top-100"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- -->
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