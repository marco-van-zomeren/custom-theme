<footer class="p-0 p-md-40">
  <div class="container">
    <div class="row"> 
      <!-- FOOTER COLUMN 1 -->
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
      <!-- FOOTER COLUMN 2 -->
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
	  <!-- FOOTER COLUMN 3 -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-3" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
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
          'menu_id' => 'footer-menu-3'
        ) )
        ?>
      </div>
      <!-- --> 
	  <!-- FOOTER COLUMN 4 -->
      <div class="col-12 col-md-3">
        <p class="font-weight-700 text-transform-uppercase d-table" data-toggle="collapse" data-target="#footer-menu-4" aria-expanded="false" aria-controls="collapse"> <i class="material-icons d-table-cell align-middle d-block d-md-none position-relative left-n5 transition-20"> keyboard_arrow_down </i> <span class="d-table-cell align-middle">
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
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>