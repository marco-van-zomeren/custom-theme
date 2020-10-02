<?php get_header();?>
<main class="bg-white p-20">
<div class="container">
<header class="row text-center">
  <h1>
    <?php single_term_title(); ?>
  </h1>
</header>
<section class="row text-center">
	<?php include("nav-category.php"); ?>
</section>
<section class="row text-left p-0 px-40">
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
</section>
</div>
</main>
<?php get_footer(); ?>
