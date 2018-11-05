<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogstart
 */

 get_template_part( 'template-parts/footer', 'area' );
?>
    <div class="footer-bottom">
        <?php echo wp_kses_post( get_theme_mod( 'copyright_content', '<p> Copyright 2018 All rights reserved. Theme by <a href="'.home_url('/').'">zoomdev</a>.  Proudly powered by <a href="https://wordpress.org">WordPress</a> </p>' ) ) ?>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
