<section class="text-center">
    <div class="row">
      <?php
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'releases'
      );
      $arr_posts = new WP_Query( $args );
      if ( $arr_posts->have_posts() ):
        while ( $arr_posts->have_posts() ):
          $arr_posts->the_post();
      if ( has_post_thumbnail( $post_array->ID ) ) {
        $image_arr = wp_get_attachment_image_src( get_post_thumbnail_id( $post_array->ID ), 'featured-image_s' );
        $image_url = $image_arr[ 0 ]; // $image_url is your URL.
      }
      ?>
      <div class="col-12 col-md-3 px-0 p-md-20">
        <div id="post-<?php the_ID(); ?>" <?php post_class( "float-left w-1-1"); ?>>
          <div class="position-relative w-1-1 mb-40"> 
			 <img class="block__image w-1-1 rounded js__equalheight" src="<?php echo $image_url ?>">
            <div class="audio d-table w-1-1 position-absolute top-0 left-0 js__equalheight" style="height: 100%">
              <?php $audio = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'audio' ) ); ?>
              <?php if ( empty( $audio ) ) : ?>
              <?php else : ?>
              <?php foreach ( $audio as $attachment_id => $attachment ) : ?>
              <div class="player d-table-cell align-middle">
                <audio controls>
                  <source src="<?php echo wp_get_attachment_url( $attachment_id, 'full' ); ?>" type="audio/mpeg">
                </audio>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <p class="mt-20"><a class="" href="<?php the_permalink(); ?>">View</a></p>
        </div>
      </div>
      <?php
      endwhile;
      endif;
      wp_reset_query();
      ?>
    </div>
</section>
