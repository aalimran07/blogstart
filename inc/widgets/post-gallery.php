<?php
/**
 * Adds blog_start_post_gallery.
 */

class Blogstart_Post_Gallery extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'sidebar-post-gallery',
            esc_html__('Post Gallery', 'blogstart'),
            array('description' => esc_html__('Blogstart Post Gallery', 'blogstart'))
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
        
        <div class="social-content">
                <div class="row pl-15 pr-15 social-popup-container">
                <?php
                $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 6;
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
                            <a href="<?php the_post_thumbnail_url();?>" data-fancybox="images" class="col-4 col-sm-4 p-0"><?php the_post_thumbnail('blogstart-sm-gallery-post'); ?></a>
                        <?php
                        endif;
                    endwhile;
                else:
                    esc_html_e('No Post Found', 'blogstart');
                endif;

                 ?>
            </div>
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

        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Post Gallery', 'blogstart');
        $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 6;
        ?>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'blogstart'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('postcount')); ?>"><?php esc_html_e('Post Count:', 'blogstart'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('postcount')); ?>" name="<?php echo esc_attr($this->get_field_name('postcount')); ?>" type="text" value="<?php echo esc_attr($postcount); ?>">
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


add_action('widgets_init', 'blog_start_post_gallery');

function blog_start_post_gallery()
{
    register_widget('Blogstart_Post_Gallery');
}
