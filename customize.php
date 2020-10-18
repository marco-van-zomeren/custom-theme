<?php
// CUSTOMIZER
function custom_customizer( $wp_customize ) {

  $wp_customize->add_section( 'custom_colors', array(
    'title' => __( 'Colors', 'custom-theme' ),
    'priority' => 100,
  ) );

  // Colors
  // Color primary
  $wp_customize->add_setting( 'custom_primary-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_primary-color',
    array(
      'label' => __( 'Primary color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_primary-color'
    )
  ) );
  // Color secondary
  $wp_customize->add_setting( 'custom_secondary-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_secondary-color',
    array(
      'label' => __( 'Secondary color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_secondary-color'
    )
  ) );
  // Color tertiary
  $wp_customize->add_setting( 'custom_tertiary-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_tertiary-color',
    array(
      'label' => __( 'Tertiary color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_tertiary-color'
    )
  ) );
  // Color nav text
  $wp_customize->add_setting( 'custom_nav-text-color', array(
    'default' => 'var(--theme-color-primary)',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_nav-text-color',
    array(
      'label' => __( 'Nav text color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_nav-text-color'
    )
  ) );
  // Color nav :hover
  $wp_customize->add_setting( 'custom_nav-hover-color', array(
    'default' => 'var(--theme-color-tertiary)',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_nav-hover-color',
    array(
      'label' => __( 'Nav text :hover color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_nav-hover-color'
    )
  ) );
  // Color footer background
  $wp_customize->add_setting( 'custom_footer-background-color', array(
    'default' => 'var(--theme-color-secondary)',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_footer-background-color',
    array(
      'label' => __( 'Footer background color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_footer-background-color'
    )
  ) );
  // Color footer text
  $wp_customize->add_setting( 'custom_footer-text-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_footer-text-color',
    array(
      'label' => __( 'Footer text color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_footer-text-color'
    )
  ) );

  // Nav layout
  $wp_customize->add_section( 'custom_nav-layout', array(
    'title' => __( 'Navigation layout', 'custom' ),
    'priority' => 101,
  ) );

  $wp_customize->add_setting( 'custom_nav-layout' );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_nav-layout',
      array(
        'label' => __( 'Navigation layout', 'custom-theme' ),
        'section' => 'custom_nav-layout',
        'settings' => 'custom_nav-layout',
        'type' => 'radio',
        'choices' => array(
          'default' => __( 'Default' ),
          'position-absolute' => __( 'Position absolute' ),
          'logo-center' => __( 'Logo center' )
        )
      )
    )
  );

  $wp_customize->add_setting( 'custom_nav-layout_cart-icon', array(
    'default' => 1
  ) );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_nav-layout_cart-icon',
      array(
        'label' => __( 'Display cart icon', 'custom-theme' ),
        'section' => 'custom_nav-layout',
        'settings' => 'custom_nav-layout_cart-icon',
        'type' => 'checkbox',
      )
    )
  );

  // Shop layout
  $wp_customize->add_section( 'custom_shop-layout', array(
    'title' => __( 'Shop layout', 'custom' ),
    'priority' => 102,
  ) );

  $wp_customize->add_setting( 'custom_shop-layout' );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_shop-layout',
      array(
        'label' => __( 'Shop layout', 'custom-theme' ),
        'section' => 'custom_shop-layout',
        'settings' => 'custom_shop-layout',
        'type' => 'radio',
        'choices' => array(
          'default' => __( 'Default' ),
          'sidebar-left' => __( 'Sidebar left' )
        )
      )
    )
  );

}
add_action( 'customize_register', 'custom_customizer' );

// Generate custom theme options
function generate_theme_option_css() {
  $themeColorPrimary = get_theme_mod( 'custom_primary-color' );
  $themeColorSecondary = get_theme_mod( 'custom_secondary-color' );
  $navTextColor = get_theme_mod( 'custom_nav-text-color' );
  $footerBackgroundColor = get_theme_mod( 'custom_footer-background-color' );
  $footerTextColor = get_theme_mod( 'custom_footer-text-color' );
  ?>
<style type="text/css" id="custom-theme-settings">
:root {
--theme-color-primary: <?php echo $themeColorPrimary;
?>;
--theme-color-secondary: <?php echo $themeColorSecondary;
?>;
--nav-text-color: <?php echo $navTextColor;
?>;
--footer-background-color: <?php echo $footerBackgroundColor;
?>;
--footer-text-color: <?php echo $footerTextColor;
?>;
}
</style>
<?php
}
add_action( 'wp_head', 'generate_theme_option_css' );
