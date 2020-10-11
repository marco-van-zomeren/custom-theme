<?php
// CUSTOMIZER
function custom_customizer( $wp_customize ) {
  // Custom header
  $wp_customize->add_section( 'custom_header', array(
    'title' => __( 'Header layout', 'custom' ),
    'priority' => 100,
  ) );

  $wp_customize->add_setting( 'custom_header' );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_header',
      array(
        'label' => __( 'Header layout', 'header_layout' ),
        'section' => 'custom_header',
        'settings' => 'custom_header',
        'type' => 'radio',
        'choices' => array(
          'spotlight' => __( 'Spotlight image with h1' ),
          'slider' => __( 'Slider big - 3 large Slides' ),
		  'slider-small' => __( 'Slider small - preheader, intro and a slider with posts from the homepage category' )
        )
      )
    )
  );

  // Preheader
  $wp_customize->add_setting( 'spotlight_preheader', array(
    'default' => 'Preaheader text'
  ) );	
  $wp_customize->add_control( 'spotlight_preheader', array(
    'label' => 'Preheader',
    'section' => 'custom_header',
    'type' => 'text',
  ) );	
	
  // Spotlight title	
  $wp_customize->add_setting( 'spotlight_title', array(
    'default' => 'Hello world'
  ) );
  $wp_customize->add_control( 'spotlight_title', array(
    'label' => 'h1',
    'section' => 'custom_header',
    'type' => 'text',
  ) );	
	
 // Spotlight image	
  $wp_customize->add_setting( 'spotlight_image' );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'spotlight_image',
      array(
        'label' => 'Spotlight image',
        'section' => 'custom_header',
        'settings' => 'spotlight_image'
      )
    )
  );
	
  // Intro tekst
  $wp_customize->add_setting( 'spotlight_intro', array(
    'default' => 'Intro text'
  ) );	
  $wp_customize->add_control( 'spotlight_intro', array(
    'label' => 'Intro text',
    'section' => 'custom_header',
    'type' => 'text',
  ) );	
	
  // Spotlight CTA URL
  $wp_customize->add_setting( 'spotlight_cta-url', array(
    'default' => '/'
  ) );	
  $wp_customize->add_control( 'spotlight_cta-url', array(
    'label' => 'CTA URL',
    'section' => 'custom_header',
    'type' => 'text',
  ) );	
	
 // Spotlight CTA
  $wp_customize->add_setting( 'spotlight_cta', array(
    'default' => 'Call to action'
  ) );	
  $wp_customize->add_control( 'spotlight_cta', array(
    'label' => 'CTA Text',
    'section' => 'custom_header',
    'type' => 'text',
  ) );	
		
  // SLIDE 1
  $wp_customize->add_setting( 'slide_1_image' );
  $wp_customize->add_setting( 'slide_1_title', array(
    'default' => 'Unique buying reason one'
  ) );
  $wp_customize->add_setting( 'slide_1_text', array(
    'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
  ) );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'slide_1_image',
      array(
        'label' => 'Slide 1 image',
        'section' => 'custom_header',
        'settings' => 'slide_1_image'
      )
    )
  );
  $wp_customize->add_control( 'slide_1_title', array(
    'label' => 'Slide 1 title',
    'section' => 'custom_header',
    'type' => 'text',
  ) );
  $wp_customize->add_control( 'slide_1_text', array(
    'label' => 'Slide 1 text',
    'section' => 'custom_header',
    'type' => 'textarea',
  ) );

  // SLIDE 2
  $wp_customize->add_setting( 'slide_2_image' );
  $wp_customize->add_setting( 'slide_2_title', array(
    'default' => 'Unique buying reason one'
  ) );
  $wp_customize->add_setting( 'slide_2_text', array(
    'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
  ) );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'slide_2_image',
      array(
        'label' => 'Slide 2 image',
        'section' => 'custom_header',
        'settings' => 'slide_2_image'
      )
    )
  );
  $wp_customize->add_control( 'slide_2_title', array(
    'label' => 'Slide 2 title',
    'section' => 'custom_header',
    'type' => 'text',
  ) );
  $wp_customize->add_control( 'slide_2_text', array(
    'label' => 'Slide 2 text',
    'section' => 'custom_header',
    'type' => 'textarea',
  ) );

  // SIDE 3
  $wp_customize->add_setting( 'slide_3_image' );
  $wp_customize->add_setting( 'slide_3_title', array(
    'default' => 'Unique buying reason one'
  ) );
  $wp_customize->add_setting( 'slide_3_text', array(
    'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
  ) );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'slide_3_image',
      array(
        'label' => 'Slide 3 Image',
        'section' => 'custom_header',
        'settings' => 'slide_3_image'
      )
    )
  );
  $wp_customize->add_control( 'slide_3_title', array(
    'label' => 'Slide 3 title',
    'section' => 'custom_header',
    'type' => 'text',
  ) );
  $wp_customize->add_control( 'slide_3_text', array(
    'label' => 'Slide 3 text',
    'section' => 'custom_header',
    'type' => 'textarea',
  ) );

  // Shop layout
  $wp_customize->add_section( 'custom_shop-layout', array(
    'title' => __( 'Shop layout', 'custom' ),
    'priority' => 101,
  ) );

  $wp_customize->add_setting( 'custom_shop-layout' );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_shop-layout',
      array(
        'label' => __( 'Shop layout', 'shop_layout' ),
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

  // Footer layout
  $wp_customize->add_section( 'custom_footer', array(
    'title' => __( 'Footer layout', 'custom' ),
    'priority' => 103,
  ) );

  $wp_customize->add_setting( 'custom_footer-background-color' );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_footer-background-color',
      array(
        'label' => __( 'Footer class', 'footer_layout' ),
        'section' => 'custom_footer',
        'settings' => 'custom_footer-background-color',
        'type' => 'text'
      )
    )
  );
}
add_action( 'customize_register', 'custom_customizer' );