<section class="h-50">
  <div class="position-relative z-1">
    <div class="tabs js__tabs">
      <div class="tabs__container">
        <ul class="tabs tabs__list c:text-gray-500 c:hover:text-tertiary text-uppercase">
          <?php
          wp_list_categories( array(
            'taxonomy' => 'product_cat',
            'product_cat' => get_theme_mod( 'custom_shop-category' ),
            'title_li' => ''
          ) );
          ?>
        </ul>
        <span class="tabs__toggle-container"> <a class="tabs__toggle text-black">MORE<span class="icon--toggle"></span></a> </span> </div>
    </div>
    <div class="tabs__more">
      <ul class="tabs__more__list list__clone bg-white shadow-sm z-2">
      </ul>
    </div>
  </div>
</section>
<section class="row">
  <?php if ( have_posts() ) : ?>
  <?php
  // Start the Loop.
  while ( have_posts() ):
    the_post();

  get_template_part( 'template-parts/content/content', 'excerpt-product' );

  endwhile;

  // If no content, include the "No posts found" template.
  else :
    get_template_part( 'template-parts/content/content', 'none' );

  endif;
  ?>
</section>
