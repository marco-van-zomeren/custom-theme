<a class="d-block border border-hsl-black py-5 px-20 bw-2 rounded-pill d-lg-none mb-10 d-inline-block float-left text-black" data-toggle="collapse" href="#categories" role="button" aria-expanded="false" aria-controls="collapse">Categories</a>

<ul class="nav-documentation d-lg-block p-0 m-0 text-left collapse clear-both" id="categories">
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
    echo '<li><a href="' . get_category_link( $category->term_id ) . '"class="w-1-1 d-block py-10 border-bottom text-black hover:text-tertiary">' . $category->name . '</a></li>';
  }
  ?>
</ul>
