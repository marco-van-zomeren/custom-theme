<?php
/*
Template Name: Archives
*/
get_header();
?>
<main class="bg-white">
  <div class="container">
    <section class="row">
      <div class="col-12">
        <div class="p-0 px-md-40">
          <header class="text-center">
            <h1>Results</h1>
          </header>
          <div class="float-left w-1-1 pb-20">
            <label for="search">Search</label>
            <input type="text" name="s" id="search" placeholder="Hey, tell me what you are looking for :)" value="<?php the_search_query(); ?>" />
          </div>
        </div>
      </div>
    </section>
    <section class="row">
      <?php
	  if ( have_posts() ) : 
      
	  while ( have_posts() ):
      the_post();

      get_template_part( 'template-parts/content/content', 'excerpt' );

      endwhile;

      else :
        get_template_part( 'template-parts/content/content', 'none' );

      endif;
      ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
