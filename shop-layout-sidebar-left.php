
<section class="row">
  <div class="col-12 col-lg-2">
	<ul>
    <?php dynamic_sidebar( 'sidebar-3' ); ?>
	</ul> 
  </div>
  <div class="col-12 col-lg-10">
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
		  </div>
  </div>
</section>
