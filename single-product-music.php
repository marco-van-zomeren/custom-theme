<?php
/*
 * Template Name: Music
 * Template Post Type: post, page, product
 */

get_header();
?>
<main class="bg-main">
  <?php
  /* Start the Loop */
  while ( have_posts() ): the_post();
  get_template_part( 'template-parts/post/content-single-product-music', get_post_format() );
  endwhile; // End of the loop.
  ?>
</main>
<section class="text-center p-20">
  <?php get_template_part( 'template-parts/share/share','page-horizontal'); ?>
</section>
<?php get_footer(); ?>