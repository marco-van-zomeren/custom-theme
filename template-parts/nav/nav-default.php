<section class="nav bg-white p-lg-20 position-relative z-6">
  <div class="container p-0 position-relative">
    <nav class="h-50 h-lg-90 position-relative z-6"> 
      <!-- LOGO MOBILE -->
      <div class="pl-50 postion-absolute w-1-1 h-50 d-table d-lg-none"> <a href="<?php echo get_bloginfo('url'); ?>" class="d-table-cell align-middle text-center">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
        echo '<img class="d-inline-block h-40 position-relative" src="' . esc_url( $custom_logo_url ) . ';" alt="">';
        ?>
        </a> </div>
      <!-- --> 
      <!-- NAV -->
      <div class="row m-0 p-0 p-lg-20">
        <div class="col-12 col-lg-2 p-0"> 
          <!-- LOGO DESKTOP --> 
          <a href="<?php echo get_bloginfo('url'); ?>" class="d-table-cell align-middle text-center">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
          echo '<img class="d-none d-lg-block h-50 position-relative left-5" src="' . esc_url( $custom_logo_url ) . ';" alt="">';
          ?>
          </a> 
          <!-- --> 
        </div>
        <div class="col-12 col-lg-10 p-0 d-flex justify-content-center text-lg-right"> 
          <!-- MENU -->
          <?php get_template_part( 'template-parts/nav/nav', 'menu' ); ?>
          <!-- --> 
          <!-- ACCOUNT -->
          <?php
          if ( get_theme_mod( 'custom_nav-layout_account-icon' ) == 1 ) {
            get_template_part( 'template-parts/nav/nav', 'account-icon' );
          }
          ?>
          <!-- --> 
          <!-- CART -->
          <div class="h-50 lh-50 d-flex justify-content-center ml-20 position-absolute top-0 right-0 position-lg-relative">
            <?php
            if ( get_theme_mod( 'custom_nav-layout_cart-icon' ) == 1 ) {
              get_template_part( 'template-parts/nav/nav', 'cart-icon' );
            }
            ?>
          </div>
          <!-- --> 
        </div>
      </div>
      <!-- --> 
      
    </nav>
  </div>
  <!-- TOGGLE MOBILE MENU -->
  <button class="btn_toggle-menu d-block d-lg-none position-absolute left-0 top-0 h-50 w-50 border-0 rounded-0 z-6 bg-transparent" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse"> <span class="btn_toggle-menu__box position-relative top-4"> <span class="btn_toggle-menu__inner"></span> </span> </button>
  <!-- -->
  <div class="nav__content-overlay z-4"></div>
</section>
