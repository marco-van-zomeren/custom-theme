<?php get_header(); ?>
<main class="bg-white">
  <div class="container py-20 py-lg-0">
    <div class="text-center">
      <h1>Shop</h1>
    </div>
    <section class="h-50">
      <div class="position-relative z-1">
        <div class="tabs js__tabs">
          <div class="tabs__container">
            <ul class="tabs tabs__list c:text-black c:hover:text-tertiary text-uppercase">
              <?php
              wp_list_categories( array(
                'taxonomy' => 'product_cat',
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
    
    <!-- SHOP LAYOUT -->
    <?php
    if ( get_theme_mod( 'custom_shop-layout', 'default' ) == 'default' ):
      get_template_part( 'template-parts/shop/shop', 'layout-default' );
    elseif ( get_theme_mod( 'custom_shop-layout', 'sidebar-left' ) == 'sidebar-left' ):
      get_template_part( 'template-parts/shop/shop', 'layout-sidebar-left' );
    endif ?>
    <!-- --> 
  </div>
</main>
<?php get_footer(); ?>
