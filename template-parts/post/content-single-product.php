<div class="container">
<div class="row"> 
  
  <!-- SLIDER -->
  <section class="col-12 col-md-6 pr-20">
    <div class="swiper-container gallery-top h-400 mb-20">
      <div class="swiper-wrapper">
        <?php
        global $product;

        $attachment_ids = $product->get_gallery_attachment_ids();

        foreach ( $attachment_ids as $attachment_id ) {
          ?>
        <div class="swiper-slide" style="background-image: url('<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>'); background-size:cover; background-position: center center"> </div>
        <?php
        }
        ?>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next swiper-button-white top-50%"></div>
      <div class="swiper-button-prev swiper-button-white top-50%"></div>
    </div>
    <div class="col-12 swiper-container gallery-thumbs h-100">
      <div class="swiper-wrapper">
        <?php
        global $product;

        $attachment_ids = $product->get_gallery_attachment_ids();

        foreach ( $attachment_ids as $attachment_id ) {
          ?>
        <div class="swiper-slide" style="background-image: url('<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>'); background-size:cover; background-position: center center"> </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- CONTENT -->
  <section class="col-12 col-md-6 position-sticky top-20">
    <div class="row">
      <div class="col-12 col-md-11">
        <header>
          <h1 class="js__fx animate__fadeInUp">
            <?php the_title(); ?>
          </h1>
        </header>
        <div id="post-<?php the_ID(); ?>" <?php post_class( "col-12"); ?>>
          <?php
          if ( function_exists( 'yoast_breadcrumb' ) ) {
            yoast_breadcrumb( '<p class="breadcrumbs">', '</p>' );
          }
          ?>
          <div class="col-12"> <?php echo $product->get_price_html(); ?> </div>
		
			
<?php

defined( 'ABSPATH' ) || exit;

?>
<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p><?php esc_html_e( 'Sorry, this product is unavailable. Please choose a different combination.', 'woocommerce' ); ?></p>
</script>
			
          <?php
          echo apply_filters( 'woocommerce_loop_add_to_cart_link',
            sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
              esc_url( $product->add_to_cart_url() ),
              esc_attr( $product->id ),
              esc_attr( $product->get_sku() ),
              $product->is_purchasable() ? 'add_to_cart_button' : '',
              esc_attr( $product->product_type ),
              esc_html( $product->add_to_cart_text() )
            ),
            $product );

          ?>
          <?php if ( is_search() ) : // Only display Excerpts for Search ?>
          <div>
            <?php the_excerpt(); ?>
          </div>
          <?php else : ?>
          <div>
            <?php the_content(); ?>
          </div>
          <div>
            <?php // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
              comments_template();
            }
            ?>
          </div>
          <?php endif; ?>
          <div>
            <div class="span_6 text-center">
              <?php previous_post_link( '%link', '<i class="material-icons font-s_d relative top_3">keyboard_arrow_left</i> Previous', TRUE ); ?>
            </div>
            <div class="span_6 text-center">
              <?php next_post_link( '%link', 'Next <i class="material-icons font-s_d  relative top_3">keyboard_arrow_right</i>', TRUE ); ?>
            </div>
          </div>
        </div>
      </div>
      <aside class="d-none d-md-block col-1">
        <div class="float-right">
          <div class="block float-right w-1-1 pb-20 text-center js__share-page"> 
			  <a href="" class="w-50 h-50 lh-50 rounded-circle float-left text-black hover:bg-gray-100 share-page__on-facebook"><i class="fab fa-facebook-f"></i></a> 
			  <a href="" class="w-50 h-50 lh-50 rounded-circle float-left text-black hover:bg-gray-100 share-page__on-linkedin"><i class="fab fa-linkedin-in"></i></a> 
			  <a href="" class="w-50 h-50 lh-50 rounded-circle float-left text-black hover:bg-gray-100 share-page__on-twitter"><i class="fab fa-twitter"></i></a> 
			  <a href="whatsapp://send?text=<?php the_title();?> <?php the_permalink();?>" class="w-50 h-50 lh-50 rounded-circle float-left text-black hover:bg-gray-100 " ><i class="fab fa-whatsapp"></i></a> </div>
        </div>
      </aside>
    </div>
  </section>
</div>
<div class="row p-20 bg-dark-blue">
  <?php
  global $product;

  if ( !is_a( $product, 'WC_Product' ) ) {
    $product = wc_get_product( get_the_id() );

  }

  woocommerce_related_products( array(
    'posts_per_page' => 4,
    'columns' => 4,
    'orderby' => 'rand'
  ) );
  ?>
</div>
</div>
<script>
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    loop: true,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    loop: true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs,
    },
});
</script>