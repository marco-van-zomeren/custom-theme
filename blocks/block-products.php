<section class="container">
  <div class="row">
    <?php
    $args = array(
      'post_type' => 'product',
      'product_cat' => block_value( 'category' )
    );
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ): $loop->the_post();

	  $test = block_value( 'excerpt-type' );
	  get_template_part( 'template-parts/content/content', block_value( 'excerpt-type' ) );

    endwhile;
    ?>
  </div>
</section>
<?php
wp_reset_query();
?>
