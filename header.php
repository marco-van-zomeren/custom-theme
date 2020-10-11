<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class( '' ); ?> ontouchstart="">

<!-- NAV -->
<section class="nav bg-white p-lg-20 position-relative z-6">
  <div class="container p-0 position-relatives">
  <nav class="bg-white h-50 h-lg-90 position-relative z-6"> 
    
    <!-- LOGO MOBILE -->
    <div class="pl-50 postion-absolute w-1-1 h-50 d-table d-lg-none"> <a href="<?php echo get_bloginfo('url'); ?>" class="d-table-cell align-middle text-center">
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
      echo '<img class="d-inline-block h-40 position-relative" src="' . esc_url( $custom_logo_url ) . ';" alt="">';
      ?>
      </a> </div>
    <!-- --> 
    <!-- NAV DESKTOP -->
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
        <!-- COLLAPSE -->
        
        <?php
        wp_nav_menu( array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'ml-auto mb-0 bg-white text-center align-self-center c:d-md-inline-block c:mr-md-20 c:color-gray-1 c:color-md-black position-relative mr-lg-n20 collapse d-lg-block',
          'menu_id' => 'collapse',
          'add_li_class' => 'text-black c:hover:text-tertiary c:p-20 c:p-lg-0 mr-md-20 text-uppercase transition-20'
        ) )
        ?>
        
        <!-- --> 
		 <!-- CART --> 
        <a class="cart-customlocation cart w-50 h-50 w-lg-20 h-lg-1-1 position-absolute top-0 right-0 position-lg-relative ml-lg-20 text-center" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
        <svg class="cart__icon w-20 h-20 position-relative top-10 top-lg-8 text-black" version="1.1" id="Laag_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;" xml:space="preserve">
          <path d="M352,128C352,57.4,294.6,0,224,0C153.4,0,96,57.4,96,128H0v304c0,44.2,35.8,80,80,80h288c44.2,0,80-35.8,80-80V128H352z
	 M224,32c52.9,0,96,43.1,96,96H128C128,75.1,171.1,32,224,32z M416,432c0,26.5-21.5,48-48,48H80c-26.5,0-48-21.5-48-48V160h384V432z
	"/>
        </svg>
        <span class="cart__total w-30 h-30 rounded-circle bg-hsl-black text-white text-center position-absolute ml-n60 m-lg-0 top-10 top-lg-0">
        <?php
        global $woocommerce;
        $count = $woocommerce->cart->cart_contents_count;
        echo sprintf( _n( '%d product', $count, 'text domain' ) );
        ?></span> 
        </a>
		  <!-- -->
		
		</div>
    </div>
    <!-- -->
    </div>
  </nav>
  <!-- TOGGLE MOBILE MENU -->
  <button class="btn_toggle-menu d-block d-lg-none position-absolute left-0 top-0 h-50 w-50 border-0 rounded-0 z-6 bg-transparent" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse"> <span class="btn_toggle-menu__box position-relative top-4"> <span class="btn_toggle-menu__inner"></span> </span> </button>
  <!-- -->
  <div class="nav__content-overlay z-4"></div>
</section>
<!-- --> 

