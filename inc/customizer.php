<?php
/**
 * blogstart Theme Customizer
 *
 * @package blogstart
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blogstart_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'blogstart_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'blogstart_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'blogstart_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function blogstart_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function blogstart_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blogstart_customize_preview_js() {
	wp_enqueue_script( 'blogstart-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'blogstart_customize_preview_js' );


/**
 * Topbar Customizer
 */

// Customize function.
if ( ! function_exists( 'blogstart_customize_name_panel_section' ) ) {
	add_action( 'customize_register', 'blogstart_customize_name_panel_section' );
	function blogstart_customize_name_panel_section( $wp_customize ) {
		$wp_customize->add_panel( 'general_settings', array(
			'priority'       => 50,
			'title'          => __( 'Blogstart Settings', 'blogstart' ),
			'description'    => __( 'Customize Website Topbar Area', 'blogstart' ),
			'capability'     => 'edit_theme_options',
		) );
		/*
		 * Topbar Options 
		 */
		require get_template_directory() . '/inc/themeoptions/topbar.php';
		/*
		 * Footer Options 
		 */
		require get_template_directory() . '/inc/themeoptions/footer.php';
		/*
		 * Featured Section
		 */
		require get_template_directory() . '/inc/themeoptions/featured.php';
	}
}

