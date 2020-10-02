<?php include("header.php"); ?>
<main class="bg-white p-20">
  <div class="container-fluid">
    <header class="row text-center">
      <h1 class="animate__fadeInUp js__fx">
        <?php the_title(); ?>
      </h1>
    </header>
    <section class="row animate__fadeInUp delay-2 js__fx">
      <div class="col-12 position-relative z-1">
        <div class="tabs js__tabs">
          <div class="tabs__container">
            <ul class="tabs tabs__list c:text-black c:hover:text-tertiary text-uppercase">
              <?php
              wp_list_categories( array(
                'orderby' => 'id',
                'show_count' => false,
                'title_li' => __( '' ),
                'parent' => 0,
                'hide_empty' => false,
              ) );
              ?>
            </ul>
            <span class="tabs__toggle-container"> <a class="tabs__toggle text-black">More<span class="icon--toggle"></span></a> </span> </div>
        </div>
        <div class="tabs__more">
          <ul class="tabs__more__list list__clone bg-white shadow-sm z-2">
          </ul>
        </div>
      </div>
    </section>
    <section class="row justify-content-md-center">
      <div class="col-12 col-md-10">
        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
         
        );
        $arr_posts = new WP_Query( $args );
        if ( $arr_posts->have_posts() ):
          while ( $arr_posts->have_posts() ):
            $arr_posts->the_post();
        if ( has_post_thumbnail( $post_array->ID ) ) {
          $image_arr = wp_get_attachment_image_src( get_post_thumbnail_id( $post_array->ID ), 'featured-image_small' );
          $image_url = $image_arr[ 0 ]; // $image_url is your URL.
        }
        ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( "col-12 block block_link py-20 position-relative animate__fadeInUp js__fx"); ?>> <a class="block__link" href="<?php the_permalink(); ?>"></a>
          <?php if (has_post_thumbnail( $post->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image_small' ); ?>
          <div class="block__content row">
            <div class="col-12 col-md-6 block__image-container overflow-hidden">
              <div class="block__image h-300" style="background-image: url('<?php echo $image[0]; ?>'); background-position:center center; background-size:cover;"> </div>
            </div>
            <?php endif; ?>
            <div class="col-12 col-md-6 d-flex justify-content-center-left">
              <div class="align-self-center">
                <header>
                  <h3>
                    <?php the_title(); ?>
                  </h3>
                </header>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
        <?php
        endwhile;
        endif;
        ?>
      </div>
    </section>
  </div>
</main>
<?php include("footer.php"); ?>