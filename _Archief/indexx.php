<?php /* Template Name: Page front */ ?>
<?php get_header();?>
<!-- HOMEPAGE SLIDER -->
<section class="vh-50 vh-lg-80">
    <div class="swiper-container" id="swiper_homepage">
      <div class="swiper-wrapper vh-50 vh-lg-80">      
        <!-- 1 -->
        <div class="swiper-slide text-center">
          <div class="col-12 row">
            <div class="col-12 col-md-6 align-self-center justify-content-center ">
              <h2 class=> <?php echo get_theme_mod( 'ubr_1_title', 'No text has been saved yet.' ); ?></h2>
              <p> <?php echo get_theme_mod( 'ubr_1_text', 'No text has been saved yet.' ); ?></p>
            </div>
            <div class="col-12 col-md-6 position-relative overflow-hidden"> <img class="object-fit-cover" src="<?php echo get_theme_mod( 'ubr_1_image', 'No image has been chosen yet.' ); ?>"> </div>
          </div>
        </div>
        <!-- --> 
      </div>
      <div class="swiper-button-next top-50%"></div>
      <div class="swiper-button-prev top-50%"></div>
    </div>
    <!-- Add Arrows --> 
</section>
<!-- --> 

<!-- MOST RECENT PRODUCTS -->
<section class="p-20">
  <div class="px-20">
    <div class="text-center">
      <h2 class="animate__fadeInUp js__fx">Products</h2>
    </div>
    <div class="row">
      <?php
      $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ): $loop->the_post();
      global $product;
      ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class( "col-12 col-md-4 block block_link position-relative md-overflow-hidden animate__fadeInUp js__fx"); ?>> <a class="block__link" href="<?php the_permalink(); ?>"></a>
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
        <div class="block__image-container overflow-hidden">
          <div class="block__image h-200 position-relative" style="background-image: url('<?php echo $image[0]; ?>'); background-position:center;"> </div>
        </div>
        <?php endif; ?>
        <div class="py-20">
          <header class="align-self-center justify-content-center">
            <h3 class="font-weight-700 mb-10">
              <?php the_title(); ?>
            </h3>
          </header>
        </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</section>
<!-- --> 
<!-- CUSTOM CONTENT -->

<?php the_content(); ?>

<!-- -->

<?php get_footer(); ?>
<script>
    var swiper = new Swiper('#swiper_homepage', {
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
	
	var swiper = new Swiper('#swiper_reviews', {
        slidesPerView: 3,
        spaceBetween: 20,
		pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
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

	$(window).bind("load resize",function(e){
    var width = 0;
        $('.swiper-pagination-bullet').each(function() {
        width += $(this).outerWidth( true );
	});
		var nudge = width + 40
		$('.swiper-navigation .swiper-button-prev').css('left', 'calc(50% - ' + nudge + 'px)');
		$('.swiper-navigation .swiper-button-next').css('right', 'calc(50% - ' + nudge + 'px)');
	});
</script>