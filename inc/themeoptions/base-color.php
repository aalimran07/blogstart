<?php
/**
 * Theme Base Color Options
 */

add_action( 'customize_register', 'blogstart_customize_register_for_color' );

function blogstart_customize_register_for_color($wp_customize){

	 $wp_customize->add_setting( 'base_color', array(
      'default'   => '#5cca8d',
      'transport' => 'refresh',
      'sanitize_callback'		=> 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'base_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Base Color', 'blogstart' ),
    ) ) );

}