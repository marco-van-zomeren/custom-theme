<div id="post-<?php the_ID(); ?>" <?php post_class( "col-12 col-md-4 block block_link py-20 position-relative overflow-hidden animate__fadeInUp js__fx"); ?>>
    <a class="block__link" href="<?php the_permalink(); ?>"></a>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_small' ); ?>
    <div class="block__image-container overflow-hidden grid">
        <div class="block__image h-200 h-md-300 relative col-12" style="background-image: url('<?php echo $image[0]; ?>'); background-position:center;">
        </div>
    </div>
    <?php endif; ?>
    <div class="py-20">
        <div class="col-12 align-self-center justify-content-center">
            <h3 class="font-weight-700 mb-10">
                <?php the_title(); ?>
            </h3>
        </div>	
		<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
        <p><?php echo wc_price( $price ); ?></p>
    </div>
</div>
