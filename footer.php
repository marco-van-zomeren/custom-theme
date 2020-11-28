<!-- SEARCH -->
<section class="bg-white position-fixed top-0 left-0 w-1-1 h-1-1 justify-content-center z-6 collapse" id="search-form">
  <div class="container">
    <div class="mt-20">
      <?php get_template_part( 'template-parts/nav/nav', 'search-form' ); ?>
    </div>
  </div>
</section>
<!-- -->

<footer class="pt-20 pt-md-40 px-0 px-md-40">
  <div class="container">
    <div class="row"> 
      <!-- FOOTER COLUMN 1 -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-1" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
          <?php
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ 'footer-menu-1' ] );
          echo $menu->name;
          ?>
          </span> </p>
        <?php
        if ( has_nav_menu( 'footer-menu-1' ) ) {
          wp_nav_menu( array(
            'theme_location' => 'footer-menu-1',
            'container' => false,
            'menu_class' => 'collapse d-md-block',
            'add_li_class' => 'py-10',
            'menu_id' => 'footer-menu-1'
          ) );
        }
        ?>
        <?php dynamic_sidebar( 'sidebar-footer-col-1' ); ?>
      </div>
      <!-- --> 
      <!-- FOOTER COLUMN 2 -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-2" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
          <?php
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ 'footer-menu-2' ] );
          echo $menu->name;
          ?>
          </span> </p>
        <?php
        if ( has_nav_menu( 'footer-menu-2' ) ) {
          wp_nav_menu( array(
            'theme_location' => 'footer-menu-2',
            'container' => false,
            'menu_class' => 'collapse d-md-block',
            'add_li_class' => 'py-10',
            'menu_id' => 'footer-menu-2'
          ) );
        }
        ?>
        <?php dynamic_sidebar( 'sidebar-footer-col-2' ); ?>
      </div>
      <!-- --> 
      <!-- FOOTER COLUMN 3 -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-3" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
          <?php

          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ 'footer-menu-3' ] );
          echo $menu->name;
          ?>
          </span> </p>
        <?php
        if ( has_nav_menu( 'footer-menu-3' ) ) {
          wp_nav_menu( array(
            'theme_location' => 'footer-menu-3',
            'container' => false,
            'menu_class' => 'collapse d-md-block',
            'add_li_class' => 'py-10',
            'menu_id' => 'footer-menu-3'
          ) );
        }
        ?>
        <?php dynamic_sidebar( 'sidebar-footer-col-3' ); ?>
      </div>
      <!-- --> 
      <!-- FOOTER COLUMN 4 -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-4" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
          <?php
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ 'footer-menu-4' ] );
          echo $menu->name;
          ?>
          </span> </p>
        <?php
        if ( has_nav_menu( 'footer-menu-4' ) ) {
          wp_nav_menu( array(
            'theme_location' => 'footer-menu-4',
            'container' => false,
            'menu_class' => 'collapse d-md-block',
            'add_li_class' => 'py-10',
            'menu_id' => 'footer-menu-4'
          ) );
        }
        ?>
        <?php dynamic_sidebar( 'sidebar-footer-col-4' ); ?>
      </div>
      <!-- --> 
    </div>
    <?php dynamic_sidebar( 'sidebar-footer' ); ?>
  </div>
</footer>
<?php dynamic_sidebar( 'sidebar-cookies' ); ?>
<?php wp_footer(); ?>
<script>
    // AUDIO PLAYER
    GreenAudioPlayer.init({
        selector: '.player', // inits Green Audio Player on each audio container that has class "player"
        stopOthersOnPlay: true
    });
	// ISOTOPE
	var $grid = jQuery('.grid').isotope({
	  itemSelector: '.grid-item'
	});
	jQuery('.filters-button-group').on( 'click', 'button', function() {
	  var filterValue = jQuery( this ).attr('data-filter');
	  filterValue = filterValue;
	  $grid.isotope({ filter: filterValue });
	});
	jQuery('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = jQuery( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
		$buttonGroup.find('.current').removeClass('current');
		jQuery( this ).addClass('current');
	  });
	});
</script>
</body></html>