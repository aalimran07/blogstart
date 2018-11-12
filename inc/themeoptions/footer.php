<?php
/**
 * Footer Theme Options
 */

$wp_customize->add_section( 'footer_content', array(
	'priority'       => 2,
	'panel'          => 'general_settings',
	'title'          => __( 'Copyright', 'blogstart' ),
	'description'    => __( 'Customize Copyright Text', 'blogstart' ),
	'capability'     => 'edit_theme_options',
) );

$wp_customize->add_setting( 'copyright_content', array(
	'default'              => '<p> Copyright 2018 All rights reserved. </p>',
	'transport'            => 'refresh',
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control( 'copyright_content', array(
	'label'       => __( 'Label', 'blogstart' ),
	'description' => __( 'Description', 'blogstart' ),
	'section'     => 'footer_content',
	'type'        => 'textarea', 
) );


