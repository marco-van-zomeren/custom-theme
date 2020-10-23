<section class="position-relative mb-10 z-2">
  <div class="tabs js__tabs">
    <div class="tabs__container">
      <ul class="tabs tabs__list c:text-black c:hover:text-tertiary text-uppercase">
        <?php
        wp_list_categories( array(
          'show_count' => false,
          'child_of' => block_value( 'category-id' ),
          'title_li' => __( '' ),
          'hide_empty' => true,
		  'order' => 'ASC'
        ) );
        ?>
      </ul>
      <span class="tabs__toggle-container"> <a class="tabs__toggle text-black">MORE<span class="icon--toggle"></span></a></span>
	  </div>
  </div>
  <div class="tabs__more">
    <ul class="tabs__more__list list__clone bg-white shadow-sm z-2">
    </ul>
  </div>
</section>