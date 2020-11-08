<div id="post-<?php the_ID(); ?>" class="col-12 col-md-4 block block_link py-20 overflow-hidden grid-item <?php $terms = get_the_terms( $post->ID, 'jetpack-portfolio-type' );
  if(!empty($terms)){
    foreach($terms as $value){
        echo $value->slug . " ";
    }
  } ?>"> <a class="block__link" href="<?php the_permalink(); ?>"></a>
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_small' ); ?>
  <div class="block__content">
    <div class="block__image-container overflow-hidden">
      <div class="block__title position-absolute top-0 left-0 w-1-1 h-1-1 bg-hsl-black bg-alpha-50 d-flex justify-content-center z-3">
        <span class="font-size-xxl font-weight-700 text-center text-white p-20 align-self-center">
          <?php the_title(); ?>
        </span>
      </div>
      <div class="block__image h-300" style="background-image: url('<?php echo $image[0]; ?>'); background-position:center center; background-size:cover;"> </div>
    </div>
    <?php endif; ?>
  </div>
</div>
