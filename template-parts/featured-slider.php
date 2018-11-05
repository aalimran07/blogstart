<div class="catagory-area">
    <div class="container">
        <div class="catagory-slider owl-carousel">
           <?php
           $args = array(
            'post_type' =>  'post',
            'posts_per_page'    =>  10
           );
           $sliderpost = new WP_Query($args);
           if ($sliderpost->have_posts()) :
            while ($sliderpost->have_posts()):
                $sliderpost->the_post();
                if (has_post_thumbnail()) :
                   ?>
                    <div class="catagory hvr-shutter-out-horizontal">
                        <?php 
                        the_post_thumbnail('blogstart-fslider');
                        ?>
                        <div class="catagory-text">
                            <a href="<?php the_permalink();?>" class="read-more double-line"><?php esc_html_e('Read More', 'blogstart');?></a>
                        </div>
                    </div>
                    <?php
                endif;
            endwhile;
            endif;
             ?>
        </div>
    </div>
</div>