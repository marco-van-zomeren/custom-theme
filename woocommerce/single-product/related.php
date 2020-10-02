<?php

if ( !defined( 'ABSPATH' ) ) {
  exit;
}

if ( $related_products ): ?>
<div class="col-12">
  <?php
  $heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

  if ( $heading ):
    ?>
  <h2 class="mb text-white">Related</h2>
  <?php endif; ?>
  <?php woocommerce_product_loop_start(); ?>
  <?php foreach ( $related_products as $related_product ) : ?>
  <?php
  $post_object = get_post( $related_product->get_id() );

  setup_postdata( $GLOBALS[ 'post' ] = & $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

  ?>
  <div class="grid w-1-1 xs-sm:px-20">
    <div id="post-<?php the_ID(); ?>" <?php post_class( "col-12 col-md_4 xs-sm:p-0 block block_link relative md-xl:px-20 js__fx animate__fadeInUp"); ?>> <a class="block__link" href="<?php the_permalink(); ?>"></a>
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
      <div class="block__image-container overflow-hidden grid">
        <div class="block__image h_200 relative col-12" style="background-image: url('<?php echo $image[0]; ?>'); background-position:center;"> </div>
      </div>
      <?php endif; ?>
      <div class="py-20">
        <header class="col-12 align-self-center justify-content-center">
          <h3 class="font-w_700 mb_md text-white">
            <?php the_title(); ?>
          </h3>
        </header>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php woocommerce_product_loop_end(); ?>
</section>
<?php
endif;

wp_reset_postdata();
