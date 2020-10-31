
<section class="row">
<div class="col-12 col-lg-2"> 
  <!-- TOGGLE --> 
  <a class="d-block border border-hsl-black py-5 px-20 bw-2 rounded-pill d-lg-none mb-10 d-inline-block float-left text-black" data-toggle="collapse" href="#sidebar" role="button" aria-expanded="false" aria-controls="collapse">Filter</a> 
  <!-- --> 
  <!-- SIDEBAR -->
  <ul class="clear-both d-lg-block collapse c:mb-20" id="sidebar">
    <?php dynamic_sidebar( 'sidebar-3' ); ?>
  </ul>
  <!-- --> 
</div>
<div class="col-12 col-lg-10">
<section class="row">
  <?php if ( have_posts() ) : ?>
  <?php
  // Start the Loop.
  while ( have_posts() ):
    the_post();

  get_template_part( 'template-parts/content/content', 'excerpt-product' );

  endwhile;

  // If no content, include the "No posts found" template.
  else :
    get_template_part( 'template-parts/content/content', 'none' );

  endif;
  ?>
  </div>
  </div>
</section>
