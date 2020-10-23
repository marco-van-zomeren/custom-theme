<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class( '' ); ?> ontouchstart="">

<!-- NAV LAYOUT -->
  <?php
  if ( get_theme_mod( 'custom_nav-layout', 'default' ) == 'default' ):
    get_template_part( 'template-parts/nav/nav', 'default' );
  elseif ( get_theme_mod( 'custom_nav-layout', 'position-absolute' ) == 'position-absolute' ):
    get_template_part( 'template-parts/nav/nav', 'position-absolute' );
  elseif ( get_theme_mod( 'custom_nav-layout', 'logo-center' ) == 'logo-center' ):
    get_template_part( 'template-parts/nav/nav', 'logo-center' );
  endif ?>
<!-- --> 

