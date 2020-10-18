<!-- NAV -->
<section class="nav bg-white p-lg-20 position-relative z-6">
  <div class="container p-0 position-relative">
    <nav class="bg-white h-50 h-lg-auto position-relative z-6">
      <div class="row m-0 p-0 p-lg-20">
        <div class="col-12 text-center"> 
          <!-- LOGO  --> 
          <a href="<?php echo get_bloginfo('url'); ?>">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
          echo '<img class="d-inline-block h-40 h-lg-50 mb-lg-20 position-relative top-5 top-lg-0" src="' . esc_url( $custom_logo_url ) . ';" alt="">';
          ?>
          </a> 
          <!-- --> 
        </div>
        <div class="col-12 text-center">
          <div class="position-relative d-lg-inline-block"> 
            <!-- MENU -->
            <?php
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'container' => false,
              'menu_class' => 'ml-auto mb-0 bg-white text-center align-self-center c:d-md-inline-block float-left c:mr-md-20 c:color-gray-1 c:color-md-black position-relative mr-lg-n20 collapse d-lg-block',
              'menu_id' => 'collapse',
              'add_li_class' => 'text-black c:hover:text-tertiary c:p-20 c:p-lg-0 mr-md-20 text-uppercase transition-20'
            ) )
            ?>
            <!-- --> 
            <!-- CART ICON DESKTOP -->
            <div class="d-none d-lg-inline-block float-left ml-lg-20">
              <?php
              if ( get_theme_mod( 'custom_nav-layout_cart-icon' ) == 1 ) {
                get_template_part( 'nav', 'cart-icon' );
              }
              ?>
            </div>
            <!-- --> 
            
          </div>
        </div>
      </div>
      <!-- --> 
    </nav>
    <!-- TOGGLE MOBILE MENU -->
    <button class="btn_toggle-menu d-block d-lg-none position-absolute left-0 top-0 h-50 w-50 border-0 rounded-0 z-6 bg-transparent" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse"> <span class="btn_toggle-menu__box position-relative top-4"> <span class="btn_toggle-menu__inner"></span> </span> </button>
    <!-- --> 
    <!-- CART ICON MOBILE -->
    <div class="position-absolute w-50 h-50 justify-content-center top-0 right-0 d-flex d-lg-none z-6">
      <?php
      if ( get_theme_mod( 'custom_nav-layout_cart-icon' ) == 1 ) {
        get_template_part( 'nav', 'cart-icon' );
      }
      ?>
    </div>
    <!-- --> 
  </div>
  <div class="nav__content-overlay z-4"></div>
</section>
<!-- --> 
