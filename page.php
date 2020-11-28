<?php get_header();?>
<main class="bg-main">
  <div class="container">
    <?php
    while ( have_posts() ): the_post();
    get_template_part( 'template-parts/page/content-page', get_post_format() );
    endwhile;
    ?>
  </div>
</main> 
<?php get_footer(); ?>
