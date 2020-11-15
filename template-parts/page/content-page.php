<div class="row justify-content-center pb-40">
  <div class="col-12 col-md-6">
    <header>
      <h1 class="text-center">
        <?php the_title(); ?>
      </h1>
    </header>
    <?php
    if ( is_search() ):
      the_excerpt();

    else :

      the_content();

    endif;

    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
    ?>
  </div>
</div>
