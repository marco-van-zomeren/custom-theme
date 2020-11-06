<section class="overflow-hidden position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 col-xl-7 d-flex justify-content-center">
        <div class="align-self-center text-center">
          <p class="text-tertiary font-size-sm">
            <?php block_field( 'preheader' ); ?>
          </p>
          <h1 class="text-gray-800 display-5">
            <?php block_field( 'title' ); ?>
          </h1>
          <p class="mb-20 text-gray-600">
            <?php block_field( 'intro' ); ?>
          </p>
          <a href="<?php block_field( 'cta-url' ); ?>" class="btn border bw-2 border-tertiary text-uppercase text-tertiary hover:text-white hover:bg-tertiary rounded-pill mb-20 mb-md-0 animate__fadeInUp delay-3 js__fx">
          <?php block_field( 'cta-text' ); ?>
          </a> </div>
      </div>
      
      <!-- SWIPER -->
      <div class="col-12 col-lg-6 col-xl-5">
        <div class="mb-20 mb-md-0 p-0 pl-md-40">
          <div class="swiper-container" id="block-slider-small-portfolio">
            <div class="swiper-wrapper vh-50 vh-md-30 vh-lg-50 mh-500">
              <?php
              $args = array(
                'post_type' => 'jetpack-portfolio',
                'post_status' => 'publish',
              );
              $arr_posts = new WP_Query( $args );
              if ( $arr_posts->have_posts() ):
                while ( $arr_posts->have_posts() ):
                  $arr_posts->the_post();
              if ( has_post_thumbnail( $post_array->ID ) ) {
                $image_arr = wp_get_attachment_image_src( get_post_thumbnail_id( $post_array->ID ), 'featured-image_small' );
                $image_url = $image_arr[ 0 ]; // $image_url is your URL.
              }
              ?>
              <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image_xxl = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_xxl' ); ?>
              <?php $image_xl = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_xl' ); ?>
              <?php $image_l = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_l' ); ?>
              <?php $image_1x1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_1x1' ); ?>
              <div id="post-<?php the_ID(); ?>" class="swiper-slide vh-50 vh-md-30 vh-lg-50 mh-500 block block_link position-relative overflow-hidden"> <a class="block__link" href="<?php the_permalink(); ?>"></a> <img id="color-reference" class="object-fit-cover" src="<?php echo $image_xxl[0]; ?>" sizes="
                      (max-width: 420px),
                      (max-width: 1024px),
                      (max-width: 1440px)
                      (max-width: 2500px)" srcset="
                      <?php echo $image_1x1[0]; ?> 420w,
                      <?php echo $image_l[0]; ?> 1024w,
                      <?php echo $image_xl[0]; ?> 1440w,
                      <?php echo $image_xxl[0]; ?> 2500w">
                <?php endif; ?>
              </div>
              <?php
              endwhile;
              endif;

              wp_reset_query();
              ?>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next top-50%"></div>
            <div class="swiper-button-prev top-50%"></div>
          </div>
        </div>
      </div>
      <!-- --> 
    </div>
  </div>
</section>
<script type="text/javascript">
    var swiper = new Swiper('#block-slider-small-portfolio', {
        slidesPerView: 1,
        spaceBetween: 20,
        keyboard: {
            enabled: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true
    });
</script>