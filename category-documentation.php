<?php get_header();?>
<main class="bg-main">
  <div class="container">
    <header class="row text-center">
      <h1>
        <?php single_term_title(); ?>
      </h1>
    </header>
    <section class="row">
      <div class="col-12 col-md-3 text-center">
        <?php get_template_part( 'template-parts/nav/nav', 'documentation'); ?>
      </div>
      <div class="col-12 col-md-9">
        <div class="row">
          <?php if ( have_posts() ) : ?>
          <?php
          // Start the Loop.
          while ( have_posts() ):
            the_post();

          get_template_part( 'template-parts/content/content', 'excerpt' );

          endwhile;

          // If no content, include the "No posts found" template.
          else :
            get_template_part( 'template-parts/content/content', 'none' );

          endif;
          ?>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
