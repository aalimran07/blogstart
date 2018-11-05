<?php 
/**
 * The template for displaying Front Page Content
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blogstart
 */

get_header();
get_template_part('template-parts/featured', 'section');
get_template_part('template-parts/featured', 'slider');
?>
<main class="middle-content">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-7 blog-area">
				<?php
				$blogpost = new WP_Query(array(
					'post_type'	=>	'post',
					'posts_per_page' => -1
				));
				while ( $blogpost->have_posts()) :
					$blogpost->the_post();
					get_template_part( 'template-parts/content', get_post_format() );
				endwhile;
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
?>