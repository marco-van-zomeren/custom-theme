<?php get_header();?>
<main class="bg-white py-20 px-0 px-md-40">
<div class="container">
<header class="row text-center">
  <h1>
    <?php single_term_title(); ?>
  </h1>
</header>
<section class="row text-center">
	<?php get_template_part( 'template-parts/nav/nav', 'category'); ?>
</section>
<section class="row text-left">
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
