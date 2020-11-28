<?php get_header();?>
<main class="bg-main pb-20 px-lg-20">
  <div class="container">
    <header class="row text-center">
      <h1>
        <?php single_term_title(); ?>
      </h1>
    </header>
    <section class="row text-center"> 
	  <a class="d-inline-block p-0 text-black d-lg-none" data-toggle="collapse" href="#categories" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-chevron-down font-size-xs position-relative bottom-1"></i> Categories</a>
		
      <div class="button-group filters-button-group postion-relative ml-n5 mt-10 mt-lg-0 clear-both d-lg-block collapse" id="categories">
        <?php
        $terms = get_terms( 'jetpack-portfolio-type', array(
          'hide_empty' => false
        ) );

        foreach ( $terms as $term ) {
          ?>
        <button class="bg-transparent border-0 rounded-0 font-weight-400 text-gray-500 fons-size-d uppercase px-0 mx-10" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
        <?php
        }
        ?>
      </div>
    </section>
    <section class="px-md-20 px-lg-0">
      <div class="row text-left grid">
        <div class="grid-sizer col-12 col-md-4"></div>
        <?php if ( have_posts() ) : ?>
        <?php
        // Start the Loop.
        while ( have_posts() ):
          the_post();

        get_template_part( 'template-parts/content/content', 'excerpt-portfolio' );

        endwhile;

        // If no content, include the "No posts found" template.
        else :
          get_template_part( 'template-parts/content/content', 'none' );
        endif;
        ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
