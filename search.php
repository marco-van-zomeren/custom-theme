<?php
/*
Template Name: Archives
*/
get_header();
?>
<main class="bg-main">
  <div class="container">
    <section class="row">
      <div class="col-12">
        <header class="text-center">
          <h1>Results</h1>
        </header>
        <form action="/" method="get" class="float-left d-table w-1-1 pb-20">
          <div class="d-table-cell align-middle pr-20">
            <label for="search">Search</label>
            <input type="text" name="s" id="search" placeholder="Hey, tell me what you are looking for :)" value="<?php the_search_query(); ?>" />
          </div>
          <div class="d-table-cell align-middle w-50">
            <input type="submit" value="Search" class="position-relative top-5">
          </div>
        </form>
      </div>
    </section>
    <section class="row">
      <?php
      if ( have_posts() ):

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
