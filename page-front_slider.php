<!-- HOMEPAGE SLIDER -->
<section class="bg-hsl-primary row vh-50 vh-lg-80">
  <div class="col-12">
    <div class="swiper-container" id="swiper_homepage">
      <div class="swiper-wrapper vh-50 vh-lg-80"> 
        <!-- 1 -->
        <div class="swiper-slide text-center">
          <div class="col-12 row">
            <div class="col-12 col-md-6 align-self-center justify-content-center ">
              <h2 class=> <?php echo get_theme_mod( 'slide_1_title', 'No text has been saved yet.' ); ?></h2>
              <p> <?php echo get_theme_mod( 'slide_1_text', 'No text has been saved yet.' ); ?></p>
            </div>
            <div class="col-12 col-md-6 position-relative overflow-hidden"> <img class="object-fit-cover" src="<?php echo get_theme_mod( 'slide_1_image', 'No image has been chosen yet.' ); ?>"> </div>
          </div>
        </div>
        <!-- --> 
      </div>
      <div class="swiper-button-next top-50%"></div>
      <div class="swiper-button-prev top-50%"></div>
    </div>
    <!-- Add Arrows --> 
    
  </div>
</section>
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
</script>
<!-- --> 