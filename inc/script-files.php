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
	wp_enqueue_style( 'blogstart-normalize', get_theme_file_uri('assets/stylesheets/vendor/resources/normalize.css') );
	wp_enqueue_style('blogstart-mian', get_theme_file_uri( '/assets/stylesheets/main.css' ));
	$custom_css = '.posted-date{
			background-color: '.get_theme_mod('base_background_color').';
			color: '.get_theme_mod('base_text_color').';
		}
		.widget-title:before {
			background-color: '.get_theme_mod('base_background_color').';
		}
		h1, h2, h3, h4, h5, h6 {
			color: '.get_theme_mod('heading_tags_color').';
		}
		.widget_search button{
			background-color: '.get_theme_mod('base_background_color').';
			color: '.get_theme_mod('base_text_color').';
		}
		.main-header .main-nav{
			background-color: '.get_theme_mod('navbar_background_color').';
		}
		#cssmenu>ul>li>a{
			color: '.get_theme_mod('menu_color').';
		}
		#cssmenu>ul>li:hover>a{
			color: '.get_theme_mod('menu_hover_color').';
		}
		.double-line:before, .double-line:after{
			background-color: '.get_theme_mod('base_background_color').';
		}
		.banner-post .big-post .big-post-text:before{
			border-color: '.get_theme_mod('base_background_color').';
		}
		.main-header .header-top{
			background-color: '.get_theme_mod('topbar_background_color').';
			color: '.get_theme_mod('topbar_text_color').';
		}
		.main-header .header-top a{
			color: '.get_theme_mod('topbar_text_color').';
		}
		.footer.footer-bottom{
			background-color: '.get_theme_mod('copyright_background_color').';
			color: '.get_theme_mod('copyright_text_color').';
		}
		.footer.footer .footer-top{
			background-color: '.get_theme_mod('footer_background_color').';
			color: '.get_theme_mod('footer_text_color').';
		}
		.footer.footer-bottom a{
			color: '.get_theme_mod('copyright_text_color').';
		}
		#scrollup, .blog-area .single-blog.quotes-post i{
			background-color: '.get_theme_mod('base_background_color').';
			color: '.get_theme_mod('base_text_color').';
		}
		.main-header .header-top .icons a{
			color: '.get_theme_mod('topbar_text_color').';
		}
		.main-header .header-top .icons a:hover i{
			color: '.get_theme_mod('topbar_text_hover_color').';
		}
		mark.catagory, mark.admin, .required_icon a{
			color: '.get_theme_mod('base_text_color').';
		}
		.featured-text mark{
			background-color: '.get_theme_mod('base_background_color').';
			color: '.get_theme_mod('base_text_color').';
		}
		.blog-area .single-blog.quotes-post, blockquote{
			border-color: '.get_theme_mod('base_text_color').';
		}
		';
	wp_add_inline_style( 'blogstart-mian', $custom_css );
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