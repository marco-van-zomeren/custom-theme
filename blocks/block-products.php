<section class="container">
  <div class="row">
    <?php
    $args = array(
      'post_type' => 'product',
      'product_cat' => block_value( 'category' )
    );
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ): $loop->the_post();

    get_template_part( 'template-parts/content/content', 'excerpt-product' );

    endwhile;
    ?>
  </div>
</section>
