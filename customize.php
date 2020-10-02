<?php
// CUSTOMIZER
function custom_customizer( $wp_customize ) {
    // CONTENT OPTIONS
	$wp_customize->add_section( 'custom_content_options_section' , array(
		'title'      => __( 'Content Options', 'custom' ),
		'priority'   => 100,
	) );
	$wp_customize->add_setting( 'custom_page_comment_toggle', array( 
		'default' => 1 
	) );
	$wp_customize->add_control( 'custom_page_comment_toggle', array(
		'label'     => __( 'Show comments on pages?', 'custom' ),
		'section'   => 'custom_content_options_section',
		'priority'  => 1,
		'type'      => 'checkbox'
	) );
       
    // 3 UBRS
    $wp_customize->add_section( 'custom_ubrs', array(
        'title' => __( '3 UBRS', 'custom' ),
        'priority' => 102,
    ) );
    
    // TEXT UBR 1
    $wp_customize->add_setting( 'ubr_1_image' );
    $wp_customize->add_setting( 'ubr_1_title', array(
      'default' => 'Unique buying reason one'
    ) );
    $wp_customize->add_setting( 'ubr_1_text', array(
      'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
    ) );    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ubr_1_image',
            array(
                'label' => '1 Image',
                'section' => 'custom_ubrs',
                'settings' => 'ubr_1_image'
            )
        )
    );
    $wp_customize->add_control('ubr_1_title', array(
        'label' => '1 Title',
        'section' => 'custom_ubrs',
        'type' => 'text',
    ) ); 
    $wp_customize->add_control('ubr_1_text', array(
        'label' => '1 Text',
        'section' => 'custom_ubrs',
        'type' => 'textarea',
    ) );  
    
    // TEXT UBR 2
    $wp_customize->add_setting( 'ubr_2_image' );
    $wp_customize->add_setting( 'ubr_2_title', array(
      'default' => 'Unique buying reason one'
    ) );
    $wp_customize->add_setting( 'ubr_2_text', array(
      'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
    ) );  
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ubr_2_image',
            array(
                'label' => '2 Image',
                'section' => 'custom_ubrs',
                'settings' => 'ubr_2_image'
            )
        )
    );
    $wp_customize->add_control('ubr_2_title', array(
        'label' => '2 Title',
        'section' => 'custom_ubrs',
        'type' => 'text',
    ) ); 
    $wp_customize->add_control('ubr_2_text', array(
        'label' => '2 Text',
        'section' => 'custom_ubrs',
        'type' => 'textarea',
    ) ); 
    
    // TEXT UBR 3
    $wp_customize->add_setting( 'ubr_3_image' );
    $wp_customize->add_setting( 'ubr_3_title', array(
      'default' => 'Unique buying reason one'
    ) );
    $wp_customize->add_setting( 'ubr_3_text', array(
      'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
    ) );   
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ubr_3_image',
            array(
                'label' => '3 Image',
                'section' => 'custom_ubrs',
                'settings' => 'ubr_3_image'
            )
        )
    );
    $wp_customize->add_control('ubr_3_title', array(
        'label' => '3 Title',
        'section' => 'custom_ubrs',
        'type' => 'text',
    ) ); 
    $wp_customize->add_control('ubr_3_text', array(
        'label' => '3 Text',
        'section' => 'custom_ubrs',
        'type' => 'textarea',
    ) );  
}
add_action( 'customize_register', 'custom_customizer' );
