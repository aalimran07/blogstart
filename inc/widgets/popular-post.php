<?php
/**
 * Adds blogstart_popular_post.
 */

class Blogstart_Popular_Post extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'sidebar-popular-post',
            esc_html__('Popular Posts', 'blogstart'),
            array('description' => esc_html__('Blogstart Popular Posts', 'blogstart'))
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
        
        <div class="popular-post">
            <ul>
                <?php
                $metakey = blogstart_popular_post(get_the_ID());
                $postcount = !empty($instance['postcount']) ? $instance['postcount'] : 5;
                $postdate = isset($instance['postdate']) ? (bool) $instance['postdate'] : false;
                $popularpost = new WP_Query(array(
                    'post_type' =>  'post',
                    'posts_per_page'    => $postcount,
                    'meta_key'  =>  $metakey,
                    'orderby'   =>  'meta_value_num'
                ));

                if ($popularpost->have_posts()) :
                    while ($popularpost->have_posts()) :
                        $popularpost->the_post();
                        ?>
                        <li <?php post_class(); ?>>
                            <a href="<?php the_permalink(); ?>">
                                 <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail( 'blogstart-popular-post', array('class' => 'small-img') );
                                }else{
                                    ?>
                                    <div class="no-sm-post-thumnail"></div>
                                    <?php
                                }
                                ?>
                                <div class="post-info">
                                    <?php the_title( '<h3>', '</h3>' ); ?>
                                    <?php if ($postdate == 'on'): ?>
                                        <span><?php echo blogstart_time(); ?></span>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                        <?php
                    endwhile;
                else:
                    esc_html_e('No Post Found', 'blogstart');
                endif;

                 ?>
            </ul>
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

        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Popular Posts', 'blogstart');
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


add_action('widgets_init', 'blogstart_popular_post');

function blogstart_popular_post()
{
    register_widget('Blogstart_Popular_Post');
}
