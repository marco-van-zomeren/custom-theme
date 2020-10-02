<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="font-w_700">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?>
            </a>
        </h1>
    </header>

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
        <?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ),
					'after'  => '</div>',
				)
			);
			?>
    </div>
    <!-- .entry-content -->
    <?php endif; ?>

</div>