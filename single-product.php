<?php get_header();?>
<main class="bg-white p-20">
  <?php
  /* Start the Loop */
  while ( have_posts() ): the_post();
  get_template_part( 'template-parts/post/content-single-product', get_post_format() );
  endwhile; // End of the loop.
  ?>
</main>
<section class="text-center p-20">
  <?php include("share-page-horizontal.php"); ?>
</section>
<?php get_footer(); ?>