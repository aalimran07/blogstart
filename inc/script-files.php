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
			background-color: '.get_theme_mod('base_color').';
		}
		.widget-title:before, .double-line:before, .double-line:after {
			background-color: '.get_theme_mod('base_color').';
		}
		.widget_search button{
			background-color: '.get_theme_mod('base_color').';
		}
		
		.footer.footer-bottom a, .banner-post .big-post .big-post-text a.read-more:hover{
			color: '.get_theme_mod('base_color').';
		}
		#scrollup, .blog-area .single-blog.quotes-post i{
			background-color: '.get_theme_mod('base_color').';
		}
		.main-header .header-top .icons a i{
			color: '.get_theme_mod('base_color').';
		}
		mark.catagory, mark.admin, .required_icon a, .popular-post li .post-info span, .middle-sidebar .sidebar-widget ul li a:hover, #cssmenu>ul>li:hover>a, .banner-post .banner-sidebar .sub-post .sub-post-text .read-more:hover, .catagory-area .catagory .read-more:hover, #cssmenu ul ul li:hover>a, #cssmenu ul ul li a:hover, .card-list .card-footer .tags a:hover, nav.blog-pagination li a:hover, .share-icons i:hover, .icon-list i:hover{
			color: '.get_theme_mod('base_color').';
		}
		.popular-post li:hover .post-info h3, .read-more:hover{
			color: '.get_theme_mod('base_color').' !important;
		}
		.featured-text mark, .middle-sidebar .sidebar-widget .latest-post.owl-carousel .owl-dots .owl-dot, .middle-content .blog-details-area .comments-area form button.submit{
			background-color: '.get_theme_mod('base_color').';
		}
		.blog-area .single-blog.quotes-post, blockquote, .banner-post .big-post .big-post-text:before, .commenter-image img{
			border-color: '.get_theme_mod('base_color').';
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