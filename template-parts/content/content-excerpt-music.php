<div class="col-12 col-md-3">
  <div id="post-<?php the_ID(); ?>" <?php post_class( "float-left w-1-1"); ?>>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_s' ); ?>
    <div class="position-relative w-1-1 mb-40"> <img class="block__image w-1-1 rounded js__equalheight" src="<?php echo $image[0]; ?>">
      <div class="audio d-table w-1-1 position-absolute top-0 left-0 js__equalheight" style="height: 100%">
        <div class="player d-table-cell align-middle">
          <audio controls>
            <?php $audio = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'audio' ) ); ?>
            <?php foreach ( $audio as $attachment_id => $attachment ) : ?>
            <source src="<?php echo wp_get_attachment_url( $attachment_id, 'full' ); ?>" type="audio/mpeg">
            <?php endforeach; ?>
          </audio>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="text-left">
      <h2>
        <?php the_title_attribute(); ?>
      </h2>
      <p><a href="<?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]'); echo $add_to_cart;?>" class="btn border bw-2 border-tertiary text-uppercase text-tertiary hover:text-white hover:bg-tertiary rounded-pill mb-20 mb-lg-0">Buy now</a></p>
    </div>
  </div>
</div>
