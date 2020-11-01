<?php get_header();?>
<main class="bg-white pb-20 px-lg-20">
  <div class="container">
    <header class="row text-center">
      <h1>
        <?php single_term_title(); ?>
      </h1>
    </header>
    <section class="row"> 
	  <a class="d-block p-0 mb-10 ml-10 float-left w-auto text-black" data-toggle="collapse" href="#categories" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-chevron-down"></i> Categories</a>
		
      <div class="button-group filters-button-group postion-relative ml-n5 clear-both collapse" id="categories">
        <?php
        $terms = get_terms( 'jetpack-portfolio-type', array(
          'hide_empty' => false
        ) );

        foreach ( $terms as $term ) {
          ?>
        <button class="bg-transparent text-black font-size-xs p-5 px-20 border bw-1 rounded-pill m-5" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
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
