<?php /* Template Name: Page front */ ?>
<?php include("header.php"); ?>

<!-- HEADER LAYOUT -->
<?php if( get_theme_mod( 'custom_header', 'spotlight' ) == 'spotlight' ) : ?>
<?php include("page-front_spotlight.php"); ?>
<?php elseif( get_theme_mod( 'custom_header', 'slider' ) == 'slider' ) : ?>
<?php include("page-front_slider.php"); ?>
<?php endif ?>
<!-- --> 

<!-- CUSTOM CONTENT -->
<?php the_content(); ?>
<!-- -->

<?php include("footer.php"); ?>
<script>
var swiper = new Swiper('#swiper_homepage', {
    slidesPerView: 1,
    spaceBetween: 20,
    keyboard: {
        enabled: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    loop: true
});
</script>