<?php get_header();?>
<main class="bg-white p-20">
  <div class="container">
    <header class="row text-center">
      <h1>
        <?php single_term_title(); ?>
      </h1>
    </header>
    <section class="row text-center">
      <div class="button-group filters-button-group">
        <?php
        $terms = get_terms( 'jetpack-portfolio-type', array(
          'hide_empty' => false
        ) );

        foreach ( $terms as $term ) {
          ?>
        <button data-filter=".<?php echo $term->name; ?>"><?php echo $term->name; ?></button>
        <?php
        }
        ?>
      </div>
    </section>
    <section class="px-20 ">
      <div class="row text-left grid">
        <div class="grid-sizer col-12 col-md-4"></div>
        <?php if ( have_posts() ) : ?>
        <?php
        // Start the Loop.
        while ( have_posts() ):
          the_post();

        get_template_part( 'template-parts/content/content', 'excerpt-portfolio' );

        endwhile;

        // If no content, include the "No posts found" template.
        else :
          get_template_part( 'template-parts/content/content', 'none' );
        endif;
        ?>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
