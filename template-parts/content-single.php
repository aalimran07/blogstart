<article class="card full-post border-0">
        <div class="post-categories">
            <?php $categories = get_the_terms( $post->ID, 'category' );
            foreach ($categories as $category) {
                $link = get_category_link( $category->term_id );
                echo '<a href="'.$link.'"><mark class="catagory text-center">'.$category->name.'</mark></a>';
            }
            ?>
        </div>
    <h2 class="card-title text-center h1"><?php the_title();?></h2>
    <!-- Blog Content-->
    <?php 
    $postclass = (has_post_thumbnail() ? '' : ' no-image-post');
    if (get_post_format() == 'video' || get_post_format() == 'image') {
        $postclass = ' no-image-post';
    }
    ?>
    <div class="blgo-content<?php echo esc_attr($postclass);?>">
        <?php
        if (get_post_format() != 'video' && get_post_format() != 'image' ) :
        if (has_post_thumbnail()) {
            the_post_thumbnail( 'full' );
        }
        endif;
        ?>
        <span class="posted-date"><?php echo blogstart_time();?></span>
    </div>
    <!-- Card Body -->
    <div class="card-body blog-texts p-0<?php echo esc_attr($postclass);?>">
        <span class="posted-by mt-20 mb-20 d-block"><?php esc_html_e('Posted By', 'blogstart')?> <mark class="admin"><?php the_author();?></mark></span>
    </div>

    <?php
    the_content();
     wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'blogstart'),
            'after'  => '</div>',
        ));
    ?>
  
    <div class="card card-list border-0">
        <div class="align-items-center bg-white border-0 card-footer d-flex flex-column flex-lg-row justify-content-md-between p-0">
            <div class="share-icons w-50">
                <span><?php esc_html_e('Share:', 'blogstart');?></span>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a>
                <a href="<?php echo esc_url("https://twitter.com/share?url=" . get_the_permalink() . "&amp;text=" . $post->post_title . "&amp;hashtags=" . get_bloginfo('name') ); ?>"><i class="fa fa-twitter"></i></a>
                <a href="<?php echo esc_url("https://plus.google.com/share?url=" . get_the_permalink()); ?>"><i class="fa fa-google-plus"></i></a>
            </div>
            <?php if (has_tag()) {
                echo '<div class="tags">';
                the_tags();
                echo '</div>';
            } ?>
            </div>
        </div>
</article>
