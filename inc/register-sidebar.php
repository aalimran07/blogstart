<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blogstart_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blogstart' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'blogstart' ),
		'before_widget' => '<section id="%1$s" class="widget col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-widget pl-xl-0 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'blogstart' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'blogstart' ),
		'before_widget' => '<section id="%1$s" class="widget col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-widget pl-xl-0 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'blogstart' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'blogstart' ),
		'before_widget' => '<section id="%1$s" class="widget col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-widget pl-xl-0 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'blogstart' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'blogstart' ),
		'before_widget' => '<section id="%1$s" class="widget col-xl-12 col-md-11 col-sm-6 ml-md-auto sidebar-widget pl-xl-0 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blogstart_widgets_init' );
