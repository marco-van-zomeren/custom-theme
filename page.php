<?php include("header.php"); ?>
<main class="px-20 bg-white">
	<div class="container">
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/page/content-page', get_post_format() );    
		endwhile; // End of the loop.
		?>
	</div>
</main>
<?php include("footer.php"); ?>