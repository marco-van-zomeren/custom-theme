<div class="row w-1-1"> 
	<span class="col-12"> <a class="d-block border border-hsl-black py-5 px-20 bw-2 rounded-pill d-lg-none mb-10 d-inline-block float-left" data-toggle="collapse" href="#categories" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-bars"></i></a></span> 
</div>
<div class="row w-1-1">
  <div class="col-12">
    <ul class="nav-documentation d-lg-block p-0 m-0 text-left collapse" id="categories">
      <?php $documentationCategory = get_theme_mod( 'custom_documentation-category' ); ?>
      <?php
      $args = array(
        'child_of' => $documentationCategory,
        'show_count' => true,
        'title_li' => __( '' ),
        'hide_empty' => true, 'orderby' => 'slug',
      );
      $categories = get_categories( $args );
      foreach ( $categories as $category ) {
        echo '<li><a href="' . get_category_link( $category->term_id ) . '" class="w-1-1 d-block py-10 border-bottom">' . $category->name . '</a></li>';
      }
      ?>
    </ul>
  </div>
</div>
