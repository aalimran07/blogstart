<?php
/**
 * Featured Section
 */
$wp_customize->add_section( 'featured_settings', array(
	'priority'       => 2,
	'panel'          => 'general_settings',
	'title'          => __( 'Featured Section', 'blogstart' ),
	'description'    => __( 'Customize your home page featured layout', 'blogstart' ),
	'capability'     => 'edit_theme_options',
) );

$wp_customize->add_setting( 'featured_settings', array(
	'transport'            => 'refresh',
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_attr',
	'default'     => 'disable',
) );

$wp_customize->add_control( 'featured_settings', array(
	'label'       => __( 'Featured Layout', 'blogstart' ),
	'description' => __( 'if you would like to enable featured layout select enable and for hide select Disable', 'blogstart' ),
	'section'     => 'featured_settings',
	'type'        => 'radio',
	'choices'  => array(
		'enable'  => 'Enable',
		'disable' => 'Disable',
	),
) );
$wp_customize->add_section( 'featured_slider', array(
	'priority'       => 2,
	'panel'          => 'general_settings',
	'title'          => __( 'Featured Slider', 'blogstart' ),
	'description'    => __( 'Customize your home page featured slider', 'blogstart' ),
	'capability'     => 'edit_theme_options',
) );
$wp_customize->add_setting( 'featured_slider', array(
	'transport'            => 'refresh',
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_attr',
	'default'     => 'disable',
) );

$wp_customize->add_control( 'featured_slider', array(
	'label'       => __( 'Featured Slider', 'blogstart' ),
	'description' => __( 'if you would like to enable featured layout select enable and for hide select Disable', 'blogstart' ),
	'section'     => 'featured_slider',
	'type'        => 'radio',
	'choices'  => array(
		'enable'  => 'Enable',
		'disable' => 'Disable',
	),
) );

