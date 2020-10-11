<header class="w-1-1 align-self-center justify-content-center position-relative overflow-hidden">
  <h1 class="text-center px-20 animate__fadeInUp js__fx">
    <?php the_title(); ?>
  </h1>
</header>
<section class="row">
  <aside class="col-3 d-none d-md-block">
    <div class="position-sticky top-20 pl-20 z-1">
      <div class="d-block w-1-1 pb-20 js__share-page"> <a href="" class="d-block w-50 h-50 lh-50 text-center rounded-circle text-black hover:bg-gray-100 share-page__on-facebook"><i class="fab fa-facebook-f"></i></a> <a href="" class="d-block w-50 h-50 lh-50 text-center rounded-circle text-black hover:bg-gray-100 share-page__on-linkedin"><i class="fab fa-linkedin-in"></i></a> <a href="" class="d-block w-50 h-50 lh-50 text-center rounded-circle text-black hover:bg-gray-100 share-page__on-twitter"><i class="fab fa-twitter"></i></a> <a href="whatsapp://send?text=<?php the_title();?> <?php the_permalink();?>" class="d-block w-50 h-50 lh-50 text-center rounded-circle text-black hover:bg-gray-100" > <i class="fab fa-whatsapp text-black"></i></a> </div>
    </div>
  </aside>
  <article id="post-<?php the_ID(); ?>" <?php post_class( "col-12 col-md-6"); ?>>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image_large = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_large' ); ?>
    <?php $image_small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_small' ); ?>
    <div class="mb-10 rounded overflow-hidden">
      <picture class="w-1-1 rounded">
        <source media="(max-width: 420px)" srcset="<?php echo $image_small[0]; ?>">
        <source srcset="<?php echo $image_large[0]; ?>">
        <img id="color-reference" class="w-1-1 rounded_sm" src="<?php echo $image_large[0]; ?>"> </picture>
    </div>
    <?php endif; ?>
    <?php
    if ( function_exists( 'yoast_breadcrumb' ) ) {
      yoast_breadcrumb( '<p class="breadcrumbs">', '</p>' );
    }
    ?>
    <span class="font-size-sm text-gray-500 d-block w-1-1 my-20"><?php echo getPostViews(get_the_ID()); ?></span>
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div>
      <?php the_excerpt(); ?>
    </div>
    <?php else : ?>
    <div>
      <?php the_content(); ?>
    </div>

    <?php endif; ?>
    <!-- NEXT / PREV POST -->
    <div class="row py-20">
      <div class="col-6 text-left">
        <?php
        previous_post_link( '%link', '<svg class="arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31px" height="8.75px" viewBox="0 0 31 8.75" enable-background="new 0 0 31 8.75" xml:space="preserve"><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" x1="0.5" y1="4.5" x2="30.5" y2="4.5"/><g><path class="arrow_end" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" d="M4.25,0.5L0.642,4.107c-0.078,0.078-0.08,0.207-0.005,0.288L4.25,8.249"/></g></svg>
						&nbsp; Previous', TRUE );
        ?>
      </div>
      <div class="col-6 text-right">
        <?php next_post_link( '%link', 'Next &nbsp;<svg class="arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31px" height="8.75px" viewBox="0 0 31 8.75" enable-background="new 0 0 31 8.75" xml:space="preserve"><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" x1="30.5" y1="4.5" x2="0.5" y2="4.5"/><g><path class="arrow_end" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" d="M26.75,0.5l3.608,3.608c0.078,0.078,0.08,0.207,0.005,0.288L26.75,8.249"/></g></svg>', TRUE ); ?>
      </div>
    </div>
    <!-- --> 
    <!-- COMMENTS -->
    <div class="row mb-20">
        <?php
        if ( comments_open() || get_comments_number() ):
          comments_template();
        endif;
        ?>
    </div>
    <!-- --> 
  </article>
</section>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/colorthief.js"></script>