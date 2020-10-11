<?php /* Template Name: Page front */ ?>
<?php include("header.php"); ?>

<!-- HEADER LAYOUT -->
<?php if( get_theme_mod( 'custom_header', 'spotlight' ) == 'spotlight' ) : ?>
<?php include("page-front_spotlight.php"); ?>
<?php elseif( get_theme_mod( 'custom_header', 'slider' ) == 'slider' ) : ?>
<?php include("page-front_slider.php"); ?>
<?php elseif( get_theme_mod( 'custom_header', 'sliders-small' ) == 'slider-small' ) : ?>
<?php include("page-front_slider-small.php"); ?>
<?php endif ?>
<!-- --> 

<!-- CUSTOM CONTENT -->
<?php the_content(); ?>
<!-- -->

<?php include("footer.php"); ?>
