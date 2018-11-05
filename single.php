<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blogstart
 */

get_header();
?>
<div class="middle-content">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-7 blog-details-area">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'single' );
			    blogstart_single_post_pagination();
				blogstart_post_author_details();
				blogstart_related_post();
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				endwhile; // End of the loop.
				?>	
			</div>
			<div class="col-xl-3 col-lg-4 col-md-5 middle-sidebar ml-xl-auto pl-lg-0 pl-md-0 mt-lg-0">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div><!-- #main -->

<?php
get_footer();
