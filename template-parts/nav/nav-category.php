<section class="col-12 row w-1-1 mw-1200 m-auto px-20 h-50 position-relative z_2">
  <div class="col-12 row">
    <div class="col-12 position-relative z-1">
      <div class="tabs js__tabs">
        <div class="tabs__container">
          <ul class="tabs tabs__list c:text-gray-500 c:hover:text-tertiary text-uppercase">
          <?php
		  $blogCategory =  get_theme_mod( 'custom_blog-category');
			
          wp_list_categories( array(
			'child_of' => $blogCategory,
            'show_count' => false,
            'title_li' => __( '' ),
            'hide_empty' => true,
          ) );
          ?>
          </ul>
          <span class="tabs__toggle-container"> <a class="tabs__toggle text-black">More<span class="icon--toggle"></span></a></span></div>
      </div>
      <div class="tabs__more">
        <ul class="tabs__more__list list__clone bg-white shadow-sm z-2">
        </ul>
      </div>
    </div>
  </div>
</section>
