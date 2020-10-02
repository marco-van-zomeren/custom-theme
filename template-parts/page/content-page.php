<div class="row justify-content-center pb-40">
  <div class="col-12 col-md-8">
    <header>
      <h1 class="text-center">
        <?php the_title(); ?>
      </h1>
    </header>
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div>
      <?php the_excerpt(); ?>
    </div>
    <?php else : ?>
    <div>
      <?php the_content(); ?>
    </div>
    <!-- .entry-content -->
    <?php endif; ?>
    <?php // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
    ?>
  </div>
</div>
