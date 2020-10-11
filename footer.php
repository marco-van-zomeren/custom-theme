<footer class="<?php echo get_theme_mod( 'custom_footer-background-color', 'bg-white' );?> p-20 p-md-40">
  <div class="container">
    <div class="row"> 
      <!-- FOOTER COLUMN -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-1" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
          <?php
          $locations = get_nav_menu_locations(); //get all menu locations
          $menu = wp_get_nav_menu_object( $locations[ 'footer-menu-1' ] ); //get the menu object

          echo $menu->name; // name of the menu
          ?>
          </span> </p>
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
      <!-- FOOTER COLUMN -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-2" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
          <?php
          $locations = get_nav_menu_locations(); //get all menu locations
          $menu = wp_get_nav_menu_object( $locations[ 'footer-menu-2' ] ); //get the menu object

          echo $menu->name; // name of the menu
          ?>
          </span> </p>
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
	  <!-- FOOTER COLUMN -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-2" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
          <?php
          $locations = get_nav_menu_locations(); //get all menu locations
          $menu = wp_get_nav_menu_object( $locations[ 'footer-menu-2' ] ); //get the menu object

          echo $menu->name; // name of the menu
          ?>
          </span> </p>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-menu-3',
          'container' => false,
          'menu_class' => 'collapse d-md-block',
          'add_li_class' => 'py-10',
          'menu_id' => 'footer-menu-2'
        ) )
        ?>
      </div>
      <!-- --> 
	  <!-- FOOTER COLUMN -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-2" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
          <?php
          $locations = get_nav_menu_locations(); //get all menu locations
          $menu = wp_get_nav_menu_object( $locations[ 'footer-menu-4' ] ); //get the menu object

          echo $menu->name; // name of the menu
          ?>
          </span> </p>
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
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body></html>