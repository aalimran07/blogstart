<?php
/**
 * Adds Blogstart_Latest_Post.
 */

class Blogstart_Latest_Post_Slider extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'sidebar-latest-post',
            esc_html__('Latest Post Slider', 'blogstart'),
            array('description' => esc_html__('Display Latest Post Slider', 'blogstart'))
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
    */

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'] .apply_filters('widget_title', esc_html($instance['title'])). $args['after_title'];
        ?>
        
         <div class="latest-post owl-carousel p-15">
                <?php
                $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 5;
                $postdate = isset($instance['postdate']) ? (bool) $instance['postdate'] : false;
                $popularpost = new WP_Query(array(
                    'post_type' =>  'post',
                    'posts_per_page'    => $postcount,
                ));

                if ($popularpost->have_posts()) :
                    while ($popularpost->have_posts()) :
                        $popularpost->the_post();
                        if (has_post_thumbnail()):
                    ?>
                    <div class="sub-post slide-item">
                        <div class="post-content hvr-rectangle-out">
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('blogstart-post-slider'); ?></a>
                            <!-- post text -->
                            <div class="sub-post-text ">
                                <div class="inner-wrap">
                                    <?php
                                    global $post;
                                    $categories = get_the_terms( $post->ID, 'category' );
                                    if (is_array($categories)) {
                                        foreach ($categories as $category) {
                                            $link = get_category_link( $category->term_id );
                                            echo '<a href="'.$link.'"><mark class="catagory">'.$category->name.'</mark></a>';
                                        }
                                    }
                                    ?>
                                    <?php the_title( '<h2>', '</h2>' ); ?>
                                    <a href="<?php the_permalink(); ?>" class="read-more double-line"><?php esc_html_e('Read More', 'blogstart');?></a>
                                </div>
                            </div>
                            <!-- posted date -->
                            <span class="posted-date"><?php echo blogstart_time(); ?></span>
                        </div>
                    </div>
                    <?php
                    endif;
                    endwhile;
                    wp_reset_postdata();
                else:
                    esc_html_e('No Post Found', 'blogstart');
                endif;

                 ?>
        </div>

            <?php
            echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {

        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Latest Post', 'blogstart');
        $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 5;
        $postdate = isset($instance['postdate']) ? (bool) $instance['postdate'] : false;
        ?>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'blogstart'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('postcount')); ?>"><?php esc_html_e('Post Count:', 'blogstart'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('postcount')); ?>" name="<?php echo esc_attr($this->get_field_name('postcount')); ?>" type="text" value="<?php echo esc_attr($postcount); ?>">
        </p>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('postdate')); ?>"><?php esc_html_e('Date Show:', 'blogstart'); ?></label>
        <input class="checkbox" id="<?php echo esc_attr($this->get_field_id('postdate')); ?>" name="<?php echo esc_attr($this->get_field_name('postdate')); ?>" type="checkbox"<?php checked($postdate);?>">
        </p>

        <?php
    }


     /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */

    // public function update($new_instance, $old_instance)
    // {
    // }
}


add_action('widgets_init', 'blogstart_latest_post_slider_widget');

function blogstart_latest_post_slider_widget()
{
    register_widget('Blogstart_Latest_Post_Slider');
}
