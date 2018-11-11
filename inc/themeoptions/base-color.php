<?php
/**
 * Theme Base Color Options
 */

add_action( 'customize_register', 'blogstart_customize_register_for_color' );

function blogstart_customize_register_for_color($wp_customize){

	 $wp_customize->add_setting( 'base_text_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'		=> 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'base_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Base Text Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'base_background_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'base_background_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Base Background Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'base_border_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'base_border_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Base Border Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'heading_tags_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_tags_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Heading Tags Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'topbar_background_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'topbar_background_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Topbar Background Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'topbar_text_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'topbar_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Topbar text Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'footer_background_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Footer Background Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'footer_text_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Footer Background Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'copyright_background_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_background_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Copyright Background Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'copyright_text_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Copyright Text Color', 'blogstart' ),
    ) ) );

    $wp_customize->add_setting( 'copyright_text_color', array(
      'default'   => '',
      'transport' => 'refresh',
      'sanitize_callback'   => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Copyright Text Color', 'blogstart' ),
    ) ) );


}