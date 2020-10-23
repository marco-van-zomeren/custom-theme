<div class="row">
  <?php
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => block_value( 'category' ),
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $arr_posts = new WP_Query( $args );
  if ( $arr_posts->have_posts() ):
    while ( $arr_posts->have_posts() ):
      $arr_posts->the_post();
  if ( has_post_thumbnail( $post_array->ID ) ) {
    $image_arr = wp_get_attachment_image_src( get_post_thumbnail_id( $post_array->ID ), 'featured-image_small' );
    $image_url = $image_arr[ 0 ]; // $image_url is your URL.
  }

  get_template_part( 'template-parts/content/content', block_value( 'excerpt-type' ) );
  ?>
  <?php
  endwhile;
  endif;
  ?>
  <?php wp_reset_postdata(); ?>
</div>
