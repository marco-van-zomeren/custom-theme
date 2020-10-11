<div id="post-<?php the_ID(); ?>" <?php post_class( "col-12 col-md-4 block block_link py-20 position-relative overflow-hidden animate__fadeInUp js__fx"); ?>> <a class="block__link" href="<?php the_permalink(); ?>"></a>
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_small' ); ?>
  <div class="block__content">
    <div class="block__image-container overflow-hidden">
      <div class="block__image h-200" style="background-image: url('<?php echo $image[0]; ?>'); background-position:center center; background-size:cover;"> </div>
    </div>
    <?php endif; ?>
    <div class="pt-20">
    
        <h3>
          <?php the_title(); ?>
        </h3>
    
  
      <?php the_excerpt(); ?>
 
      <p><a href="<?php the_permalink(); ?>">Read more</a></p>
    </div>
  </div>
</div>
