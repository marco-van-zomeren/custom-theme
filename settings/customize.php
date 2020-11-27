<?php
// LOGO
function theme_prefix_setup() {
  add_theme_support( 'custom-logo', array(
    'flex-width' => true,
    'flex-height' => true
  ) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// CUSTOMIZER
function custom_customizer( $wp_customize ) {
  // Typography
  $wp_customize->add_section( 'custom_typography', array(
    'title' => __( 'Typography', 'custom-theme' ),
    'priority' => 100,
  ) );
  $wp_customize->add_setting( 'custom_font' );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_font',
      array(
        'label' => __( 'Font family', 'custom-theme' ),
        'section' => 'custom_typography',
        'settings' => 'custom_font',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_setting( 'custom_font-headings' );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_font-headings',
      array(
        'label' => __( 'Font headings (h1,h2,h3)', 'custom-theme' ),
        'section' => 'custom_typography',
        'settings' => 'custom_font-headings',
        'type' => 'text'
      )
    )
  );
 $wp_customize->add_setting( 'custom_font-weight-headings' );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_font-weight-headings',
      array(
        'label' => __( 'Font weight headings (h1,h2,h3)', 'custom-theme' ),
        'section' => 'custom_typography',
        'settings' => 'custom_font-weight-headings',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_setting( 'custom_font-body' );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_font-body',
      array(
        'label' => __( 'Font body', 'custom-theme' ),
        'section' => 'custom_typography',
        'settings' => 'custom_font-body',
        'type' => 'text'
      )
    )
  );
  // Colors
  $wp_customize->add_section( 'custom_colors', array(
    'title' => __( 'Colors', 'custom-theme' ),
    'priority' => 101,
  ) );
  // Color body
  $wp_customize->add_setting( 'custom_body-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_body-color',
    array(
      'label' => __( 'Body color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_body-color'
    )
  ) );
  // Color link
  $wp_customize->add_setting( 'custom_link-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_link-color',
    array(
      'label' => __( 'Link color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_link-color'
    )
  ) );
  // Color highlight
  $wp_customize->add_setting( 'custom_highlight-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_highlight-color',
    array(
      'label' => __( 'Highlight color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_highlight-color'
    )
  ) );
  // Color primary button
  $wp_customize->add_setting( 'custom_primary-button-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_primary-button-color',
    array(
      'label' => __( 'Primary button color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_primary-button-color'
    )
  ) );	
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
  // Color nav
  $wp_customize->add_setting( 'custom_nav-background-color' );
  $wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'custom_nav-background-color',
    array(
      'label' => __( 'Nav background color', 'custom-theme' ),
      'section' => 'custom_colors',
      'settings' => 'custom_nav-background-color'
    )
  ) );
  // Color nav text
  $wp_customize->add_setting( 'custom_nav-text-color' );
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
  $wp_customize->add_setting( 'custom_nav-hover-color' );
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
  $wp_customize->add_setting( 'custom_footer-background-color' );
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

  // Blog setting
  $wp_customize->add_section( 'custom_blog', array(
    'title' => __( 'Blog settings', 'custom-theme' ),
    'priority' => 102,
  ) );
  $wp_customize->add_setting( 'custom_blog-category' );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_blog-category',
      array(
        'label' => __( 'Blog category', 'custom-theme' ),
        'section' => 'custom_blog',
        'settings' => 'custom_blog-category',
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_setting( 'custom_documentation-category' );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_documentation-category',
      array(
        'label' => __( 'Documentation category', 'custom-theme' ),
        'section' => 'custom_blog',
        'settings' => 'custom_documentation-category',
        'type' => 'text'
      )
    )
  );

  // Nav layout
  $wp_customize->add_section( 'custom_nav-layout', array(
    'title' => __( 'Navigation layout', 'custom' ),
    'priority' => 103,
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

  // Search icon
  $wp_customize->add_setting( 'custom_nav-layout_search-icon', array(
    'default' => 1,
    'sanitize_callback' => 'esc_attr', // Sanitize input
  ) );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_nav-layout_search-icon',
      array(
        'label' => __( 'Display search icon', 'custom-theme' ),
        'section' => 'custom_nav-layout',
        'settings' => 'custom_nav-layout_search-icon',
        'type' => 'checkbox',
      )
    )
  );

  // Account icon
  $wp_customize->add_setting( 'custom_nav-layout_account-icon', array(
    'default' => 1,
    'sanitize_callback' => 'esc_attr', // Sanitize input
  ) );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_nav-layout_account-icon',
      array(
        'label' => __( 'Display account icon', 'custom-theme' ),
        'section' => 'custom_nav-layout',
        'settings' => 'custom_nav-layout_account-icon',
        'type' => 'checkbox',
      )
    )
  );

  // Cart icon
  $wp_customize->add_setting( 'custom_nav-layout_cart-icon', array(
    'default' => 1,
    'sanitize_callback' => 'esc_attr', // Sanitize input
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
    'priority' => 104,
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
  $wp_customize->add_setting( 'custom_shop-category' );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_shop-category',
      array(
        'label' => __( 'Shop primary category', 'custom-theme' ),
        'section' => 'custom_shop-layout',
        'settings' => 'custom_shop-category',
        'type' => 'text'
      )
    )
  );

}
add_action( 'customize_register', 'custom_customizer' );

// Generate custom theme options
function generate_theme_option_css() {
  $fontFamily = get_theme_mod( 'custom_font' );
  $fontBody = get_theme_mod( 'custom_font-body' );
  $fontHeadings = get_theme_mod( 'custom_font-headings' );
  $fontWeightHeadings = get_theme_mod( 'custom_font-weight-headings' );
  $colorBody = get_theme_mod( 'custom_body-color' );
  $colorLink = get_theme_mod( 'custom_link-color' );
  $colorHighlight = get_theme_mod( 'custom_highlight-color' );
  $colorButtonPrimary = get_theme_mod( 'custom_primary-button-color' );
  $colorPrimary = get_theme_mod( 'custom_primary-color' );
  $colorSecondary = get_theme_mod( 'custom_secondary-color' );
  $colorTertiary = get_theme_mod( 'custom_tertiary-color' );
  $navBackgroundColor = get_theme_mod( 'custom_nav-background-color' );
  $navTextColor = get_theme_mod( 'custom_nav-text-color' );
  $navHoverColor = get_theme_mod( 'custom_nav-hover-color' );
  $footerBackgroundColor = get_theme_mod( 'custom_footer-background-color' );
  $footerTextColor = get_theme_mod( 'custom_footer-text-color' );
  ?>
<style type="text/css" id="custom-theme-settings">
@import url('<?php echo $fontFamily;?>');
body {
font-family: <?php echo $fontBody;
?>
}
h1, h2, h3 {
font-family: <?php echo $fontHeadings; ?>;
font-weight: <?php echo $fontWeightHeadings; ?>!important;
}
:root {
--color-body: <?php echo $colorBody;
?>;
--color-link: <?php echo $colorLink;
?>;
--color-highlight: <?php echo $colorHighlight;
?>;
--color-btn-primary: <?php echo $colorButtonPrimary;
?>;
--color-primary: <?php echo $colorPrimary;
?>;
--color-secondary: <?php echo $colorSecondary;
?>;
--color-tertiary: <?php echo $colorTertiary;
?>;
--nav-background-color: <?php echo $navBackgroundColor;
?>;
--nav-text-color: <?php echo $navTextColor;
?>;
--nav-hover-color: <?php echo $navHoverColor;
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
