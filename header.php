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
<section class="row">
  <nav class="cols-12 bg-white d-block h-50 h-md-auto z-6"> 
    <!-- LOGO MOBILE -->
    <div class="pl-50 postion-absolute w-1-1 h-50 d-table d-md-none"> <a href="<?php echo get_bloginfo('url'); ?>" class="d-table-cell align-middle text-center">
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
      echo '<img class="d-inline-block mh-40 mh-md-60 position-relative" src="' . esc_url( $custom_logo_url ) . ';" alt="">';
      ?>
      </a> </div>
    <!-- --> 
    <!-- NAV DESKTOP -->
    <div class="p-md-20 mx-md-10">
      <div class="row">
        <div class="col-12 col-md-4 p-0 px-md-20"> 
          <!-- LOGO DESKTOP --> 
          <a href="<?php echo get_bloginfo('url'); ?>" class="d-table-cell align-middle text-center">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
          echo '<img class="d-none d-md-block h-50 position-relative" src="' . esc_url( $custom_logo_url ) . ';" alt="">';
          ?>
          </a> 
          <!-- --> 
        </div>
        <div class="col-12 col-md-8 bg-white text-md-right d-flex justify-content-center"> 
          <!-- COLLAPSE -->
          
          <?php
          wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => 'm-0 bg-white text-center align-self-center position-lg-absolute right-10 c:d-md-inline-block c:mr-md-20 c:color-gray-1 c:color-md-black collapse d-lg-block',
            'menu_id' => 'collapse',
            'add_li_class' => 'text-black c:hover:text-tertiary c:p-20 c:p-lg-0 mr-md-20 text-uppercase transition-20'
          ) )
          ?>
          
          <!-- --> 
        </div>
      </div>
    </div>
  </nav>
  <!-- TOGGLE MOBILE MENU -->
  <button class="btn_toggle-menu d-block d-md-none position-absolute right-0 top-0 h-50 w-50 rounded-0 z-6" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
	  <span class="btn_toggle-menu__box position-relative top-4">
		  <span class="btn_toggle-menu__inner"></span>
	  </span> 
  </button>
  <!-- -->
  <div class="nav__content-overlay z_4"></div>
</section>
<!-- --> 

