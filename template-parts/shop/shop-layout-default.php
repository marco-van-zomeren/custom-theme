<section class="row">
  <?php if ( have_posts() ) : ?>
  <?php
  // Start the Loop.
  while ( have_posts() ):
    the_post();

  get_template_part( 'template-parts/content/content', 'excerpt_product' );

  endwhile;

  // If no content, include the "No posts found" template.
  else :
    get_template_part( 'template-parts/content/content', 'none' );

  endif;
  ?>
</section>
