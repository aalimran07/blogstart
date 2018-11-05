<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blogstart
 */

get_header();
$featuredonoff = get_theme_mod( 'featured_settings', 'disable' );
if ($featuredonoff == 'enable') {
	get_template_part('template-parts/featured', 'section');
}
$featuredslideronoff = get_theme_mod( 'featured_slider', 'disable' );
if ($featuredslideronoff == 'enable') {
	get_template_part('template-parts/featured', 'slider');
}
?>
<main class="middle-content">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-7 blog-area">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
			<aside class="col-xl-3 col-lg-4 col-md-5 middle-sidebar ml-xl-auto pl-lg-0 pl-md-0">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</main>
<?php
get_footer();
