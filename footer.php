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
          </span>
		  </p>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-menu-1',
          'container' => false,
          'menu_class' => 'collapse d-md-block',
          'add_li_class' => 'py-10',
          'menu_id' => 'footer-menu-1'
        ) )
        ?>
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
          </span>
		  </p>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-menu-2',
          'container' => false,
          'menu_class' => 'collapse d-md-block',
          'add_li_class' => 'py-10',
          'menu_id' => 'footer-menu-2'
        ) )
        ?>
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
          </span>
		  </p>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-menu-3',
          'container' => false,
          'menu_class' => 'collapse d-md-block',
          'add_li_class' => 'py-10',
          'menu_id' => 'footer-menu-3'
        ) )
        ?>
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
          </span>
		  </p>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-menu-4',
          'container' => false,
          'menu_class' => 'collapse d-md-block',
          'add_li_class' => 'py-10',
          'menu_id' => 'footer-menu-4'
        ) )
        ?>
      </div>
      <!-- --> 
    </div>
    <?php dynamic_sidebar( 'sidebar-4' ); ?>
  </div>
</footer>
<?php wp_footer(); ?>
<script>
    // AUDIO PLAYER
    GreenAudioPlayer.init({
        selector: '.player', // inits Green Audio Player on each audio container that has class "player"
        stopOthersOnPlay: true
    });
	// ISOTOPE
	var $grid = jQuery('.grid').isotope({
	  itemSelector: '.grid-item',

	});
	jQuery('.filters-button-group').on( 'click', 'button', function() {
	  var filterValue = jQuery( this ).attr('data-filter');
	  filterValue = filterValue;
	  $grid.isotope({ filter: filterValue });
	});
	jQuery('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = jQuery( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
		$buttonGroup.find('.is-checked').removeClass('is-checked');
		jQuery( this ).addClass('is-checked');
	  });
	});
</script>
</body>
</html>