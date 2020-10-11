<section class="container">
  <div class="row">
    <?php
    // Setup your custom query
    $args = array( 'post_type' => 'product');
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ): $loop->the_post();

    get_template_part( 'template-parts/content/content', 'excerpt_product' );

    endwhile;
    ?>
  </div>
</section>