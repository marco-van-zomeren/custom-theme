<?php get_header(); ?>
<main class="bg-white p-20">
  <div class="container-fluid">
    <div class="text-center">
      <h1>Shop</h1>
    </div>
    <section class="row h-50">
      <div class="position-relative z-1">
        <div class="tabs js__tabs">
          <div class="tabs__container">
            <?php
            $orderby = 'name';
            $order = 'asc';
            $hide_empty = false;
            $cat_args = array(
              'orderby' => $orderby,
              'order' => $order,
              'hide_empty' => true,
            );

            $product_categories = get_terms( 'product_cat', $cat_args );

            if ( !empty( $product_categories ) ) {
              echo '
            <ul class="tabs tabs__listx c:text-black c:hover:text-tertiary text-uppercase">';
              foreach ( $product_categories as $key => $category ) {
                echo '<li>';
                echo '<a href="' . get_term_link( $category ) . '" >';
                echo $category->name;
                echo '</a>';
                echo '</li>';
              }
              echo '</ul>';
            }
            ?>
            <span class="tabs__toggle-container"> <a class="tabs__toggle text-black">More<span class="icon--toggle"></span></a> </span> </div>
        </div>
        <div class="tabs__more">
          <ul class="tabs__more__list list__clone bg-white shadow-sm z-2">
          </ul>
        </div>
      </div>
    </section>
    <section class="row">
      <?php if ( have_posts() ) : ?>
      <?php
      // Start the Loop.
      while ( have_posts() ):
        the_post();

      get_template_part( 'template-parts/content/content', 'excerpt' );


      endwhile;


      // If no content, include the "No posts found" template.
      else :
        get_template_part( 'template-parts/content/content', 'none' );

      endif;
      ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
