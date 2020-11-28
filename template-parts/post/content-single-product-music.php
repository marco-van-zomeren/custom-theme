<div class="container pb-40">
  <div class="row"> 
    <!-- CONTENT -->
    <section class="col-12 col-md-6 pr-20">
		  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
		  <?php the_excerpt(); ?>
		
		 <?php else : ?>
		<?php the_content(); ?>
    </section>
    <!-- WOOCOMMERCE -->
    <section class="col-12 col-md-6 position-sticky top-20">
      <div class="row">
        <div class="col-12 col-md-11">
          <header>
            <h1>
              <?php the_title(); ?>
            </h1>
          </header>
          <div id="post-<?php the_ID(); ?>" <?php post_class( "col-12"); ?>>
            <?php
            if ( function_exists( 'yoast_breadcrumb' ) ) {
              yoast_breadcrumb( '<p class="breadcrumbs">', '</p>' );
            }
            ?>
          
            <!-- THE PRODUCT -->
            <div>
              <?php
              /**
               * The template for displaying product content in the single-product.php template
               *
               * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
               *
               * HOWEVER, on occasion WooCommerce will need to update template files and you
               * (the theme developer) will need to copy the new files to your theme to
               * maintain compatibility. We try to do this as little as possible, but it does
               * happen. When this occurs the version of the template file will be bumped and
               * the readme will list any important changes.
               *
               * @see     https://docs.woocommerce.com/document/template-structure/
               * @package WooCommerce\Templates
               * @version 3.6.0
               */

              defined( 'ABSPATH' ) || exit;

              global $product;

              /**
               * Hook: woocommerce_before_single_product.
               *
               * @hooked woocommerce_output_all_notices - 10
               */
              do_action( 'woocommerce_before_single_product' );

              if ( post_password_required() ) {
                echo get_the_password_form(); // WPCS: XSS ok.
                return;
              }
              ?>
              <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
                ?>
                <div class="summary entry-summary">
                  <?php
                  /**
                   * Hook: woocommerce_single_product_summary.
                   *
                   * @hooked woocommerce_template_single_title - 5
                   * @hooked woocommerce_template_single_rating - 10
                   * @hooked woocommerce_template_single_price - 10
                   * @hooked woocommerce_template_single_excerpt - 20
                   * @hooked woocommerce_template_single_add_to_cart - 30
                   * @hooked woocommerce_template_single_meta - 40
                   * @hooked woocommerce_template_single_sharing - 50
                   * @hooked WC_Structured_Data::generate_product_data() - 60
                   */
                  do_action( 'woocommerce_single_product_summary' );
                  ?>
                </div>
                <?php
                /**
                 * Hook: woocommerce_after_single_product_summary.
                 *
                 * @hooked woocommerce_output_product_data_tabs - 10
                 * @hooked woocommerce_upsell_display - 15
                 * @hooked woocommerce_output_related_products - 20
                 */
                do_action( 'woocommerce_after_single_product_summary' );
                ?>
              </div>
              <?php do_action( 'woocommerce_after_single_product' ); ?>
            </div>
            <!-- -->
            
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
            <div class="block float-right w-1-1 pb-20 text-center js__share-page"> <a href="" class="w-50 h-50 lh-50 rounded-circle float-left text-black hover:bg-gray-100 share-page__on-facebook"><i class="fab fa-facebook-f"></i></a> <a href="" class="w-50 h-50 lh-50 rounded-circle float-left text-black hover:bg-gray-100 share-page__on-linkedin"><i class="fab fa-linkedin-in"></i></a> <a href="" class="w-50 h-50 lh-50 rounded-circle float-left text-black hover:bg-gray-100 share-page__on-twitter"><i class="fab fa-twitter"></i></a> <a href="whatsapp://send?text=<?php the_title();?> <?php the_permalink();?>" class="w-50 h-50 lh-50 rounded-circle float-left text-black hover:bg-gray-100 " ><i class="fab fa-whatsapp"></i></a> </div>
          </div>
        </aside>
      </div>
    </section>
  </div>
</div>
<!-- RELATED -->
<section class="py-40">
  <div class="container">
    <div class="text-center">
      <h2 class="display-6 mb-10 text-footer">Related</h2>
    </div>
    <div class="swiper-container" id="related-products">
      <div class="swiper-wrapper">
        <?php
        $related_cat = wp_get_object_terms( $post->ID, 'product_cat', array( 'fields' => 'ids' ) );
        $args1 = array(
          'post_type' => 'product',
          'post_status' => 'publish',
          'posts_per_page' => 5,
          'orderby' => '',
          'tax_query' => array(
            array(
              'taxonomy' => 'product_cat',
              'field' => 'id',
              'terms' => $related_cat,
            ),
          ),
          'post__not_in' => array( $post->ID ),
        );
        $related_items = new WP_Query( $args1 );
        if ( $related_items->have_posts() ):
          while ( $related_items->have_posts() ): $related_items->the_post();
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
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next top-150"></div>
      <div class="swiper-button-prev top-150"></div>
    </div>
    <div class="text-center"><br>
      <a href="/shop" class="btn border bw-2 border-tertiary text-uppercase text-tertiary hover:text-white hover:bg-tertiary rounded-pill mb-20 mb-md-0 animate__fadeInUp delay-3 animate__animated"> View all </a> </div>
  </div>
</section>
<!-- --> 
<script type="text/javascript">
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
    var swiper = new Swiper('#related-products', {
        slidesPerView: 3,
        spaceBetween: 20,
        breakpoints: {
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