<?php
/**
 * Enqueue scripts and styles.
 */
function blogstart_scripts() {
	wp_enqueue_style( 'blogstart-style', get_stylesheet_uri() );
	wp_enqueue_style( 'droid', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,400i');
	wp_enqueue_style( 'playfair', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i');
	wp_enqueue_style( 'bootstrap', get_theme_file_uri('assets/stylesheets/vendor/resources/bootstrap.min.css') );
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('assets/stylesheets/vendor/resources/font-awesome.min.css') );
	wp_enqueue_style( 'cssmenumaker', get_theme_file_uri('assets/stylesheets/vendor/resources/cssmenumaker.css') );
	wp_enqueue_style( 'animate', get_theme_file_uri('assets/stylesheets/vendor/resources/animate.min.css') );
	wp_enqueue_style( 'blogstart-componenet', get_theme_file_uri('assets/stylesheets/vendor/resources/component.css') );
	wp_enqueue_style( 'countryselect', get_theme_file_uri('assets/stylesheets/vendor/resources/countrySelect.min.css') );
	wp_enqueue_style( 'fancybox', get_theme_file_uri('assets/stylesheets/vendor/resources/jquery.fancybox.min.css') );
	wp_enqueue_style( 'owl-carousel', get_theme_file_uri('assets/stylesheets/vendor/resources/owl.carousel.min.css') );
	wp_enqueue_style( 'blogstart', get_theme_file_uri('assets/stylesheets/vendor/resources/normalize.css') );
	wp_enqueue_style('blogstart-mian', get_theme_file_uri( '/assets/stylesheets/main.css' ));
	wp_enqueue_script( 'blogstart-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'blogstart-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'blogstart-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'blogstart-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blogstart_scripts' );

function blogstart_admin_enqueue_scripts()
{
    wp_enqueue_style('blogstart-admin-custom', get_template_directory_uri() . '/assets/admin/custom.css');
    wp_enqueue_media();
    wp_enqueue_script('blogstart-admin-custom', get_template_directory_uri() . '/assets/admin/custom.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'blogstart_admin_enqueue_scripts');