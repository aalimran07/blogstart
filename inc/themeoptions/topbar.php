<?php
/**
 * Footer Theme Options
 */
$wp_customize->add_section( 'topbar_content', array(
	'priority'       => 1,
	'panel'          => 'general_settings',
	'title'          => __( 'Social Link', 'blogstart' ),
	'description'    => __( 'Type link of your social profile. if you would not like to show them. then keep input empty', 'blogstart' ),
	'capability'     => 'edit_theme_options',
) );
$wp_customize->add_setting( 'facebook', array(
	'default'              => 'https://facebook.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'facebook', array(
	'label'       => __( 'Facebook Link', 'blogstart' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );

$wp_customize->add_setting( 'twitter', array(
	'default'              => 'https://twitter.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'twitter', array(
	'label'       => __( 'twitter Link', 'blogstart' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );
$wp_customize->add_setting( 'pinterest', array(
	'default'              => 'https://pinterest.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'pinterest', array(
	'label'       => __( 'pinterest Link', 'blogstart' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );
$wp_customize->add_setting( 'googleplus', array(
	'default'              => 'https://google.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'googleplus', array(
	'label'       => __( 'Google plus Link', 'blogstart' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );
$wp_customize->add_setting( 'youtube', array(
	'default'              => 'https://youtube.com',
	'transport'            => 'refresh', // Options: refresh or postMessage.
	'capability'           => 'edit_theme_options',
	'sanitize_callback'		=> 'esc_url_raw'
) );
// Control: Name.
$wp_customize->add_control( 'youtube', array(
	'label'       => __( 'youtube Link', 'blogstart' ),
	'section'     => 'topbar_content',
	'type'        => 'url',
) );