<?php get_header();?>
<?php
if ( get_theme_mod( 'custom_nav-layout', 'default' ) == 'default' ): ?>
<main class="bg-white">
<?php
elseif ( get_theme_mod( 'custom_nav-layout', 'position-absolute' ) == 'position-absolute' ): ?>
<main class="bg-white pt-80">
<?
elseif ( get_theme_mod( 'custom_nav-layout', 'logo-center' ) == 'logo-center' ): ?>
<main class="bg-white">
  <?php
  endif ?>
  <div class="container">
    <?php
    while ( have_posts() ): the_post();
    get_template_part( 'template-parts/page/content-page', get_post_format() );
    endwhile;
    ?>
  </div>
</main>
<?php get_footer(); ?>
