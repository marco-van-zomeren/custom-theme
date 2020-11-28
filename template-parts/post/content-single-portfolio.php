<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image_xxl = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_xxl' ); ?>
<?php $image_xl = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_xl' ); ?>
<?php $image_l = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_l' ); ?>
<?php $image_1x1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_1x1' ); ?>
<section class="vh-50 vh-md-70 text-center d-flex justify-content-center position-relative overflow-hidden"> <img src="<?php echo $image_xxl[0]; ?>" sizes="
      (max-width: 420px),
      (max-width: 1024px),
      (max-width: 1440px)
      (max-width: 2500px)" srcset="
      <?php echo $image_1x1[0]; ?> 420w,
      <?php echo $image_l[0]; ?> 1024w,
      <?php echo $image_xl[0]; ?> 1440w,
      <?php echo $image_xxl[0]; ?> 2500w" class="object-fit-cover"> </section>
<?php endif; ?>
<section class="bg-main py-40">
  <div class="container">
    <div class="row mb-20">
      <div class="col-12 col-md-6">
        <header>
          <h1 class="display-2 lh-1 animate__fadeInUp js__fx">
            <?php the_title(); ?>
          </h1>
        </header>
      </div>
      <div class="col-12 col-md-6">
        <p class="font-size-md text-gray-500 m-0">ABOUT</p>
        <div class="col-12 font-size-md">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div id="post-<?php the_ID(); ?>" <?php post_class( "col-12"); ?>>
        
          <?php the_content(); ?>
       
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row py-40">
      <div class="col-6 text-left">
        <?php
        $prev_post = get_previous_post();
        if ( $prev_post ) {
          $prev_title = strip_tags( str_replace( '"', '', $prev_post->post_title ) );
          echo "\t" . '<a rel="prev" href="' . get_permalink( $prev_post->ID ) . '" title="' . $prev_title . '" class="text-black"><svg class="arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31px" height="8.75px" viewBox="0 0 31 8.75" enable-background="new 0 0 31 8.75" xml:space="preserve"><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" x1="0.5" y1="4.5" x2="30.5" y2="4.5"/><g><path class="arrow_end" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" d="M4.25,0.5L0.642,4.107c-0.078,0.078-0.08,0.207-0.005,0.288L4.25,8.249"/></g></svg> Prev</a>' . "\n";
        }
        ?>
      </div>
      <div class="col-6 text-right">
        <?php
        $next_post = get_next_post();
        if ( $next_post ) {
          $next_title = strip_tags( str_replace( '"', '', $next_post->post_title ) );
          echo "\t" . '<a rel="next" href="' . get_permalink( $next_post->ID ) . '" title="' . $next_title . '" class="text-black">Next <svg class="arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31px" height="8.75px" viewBox="0 0 31 8.75" enable-background="new 0 0 31 8.75" xml:space="preserve"><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" x1="30.5" y1="4.5" x2="0.5" y2="4.5"/><g><path class="arrow_end" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" d="M26.75,0.5l3.608,3.608c0.078,0.078,0.08,0.207,0.005,0.288L26.75,8.249"/></g></svg></a>' . "\n";
        }
        ?>
      </div>
    </div>
  </div>
</section>
