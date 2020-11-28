<?php get_header(); ?>
<main class="bg-main pb-20 px-lg-20">
  <div class="container">
    <div class="text-center">
      <h1>Shop</h1>
    </div>
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
