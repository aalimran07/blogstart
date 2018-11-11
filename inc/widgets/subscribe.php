<?php
/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Blogstart_Subscribe_form extends WP_Widget
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $widget_ops = array( 'classname' => 'blogstart_subscrib_form', 'description' => esc_html__('This widget for displaying subscribe form sidebar', 'blogstart') );
        parent::__construct('blogstart_subscribe', esc_html__('Subscribe Form', 'blogstart'), $widget_ops);
    }
    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     */
    public function widget($args, $instance)
    {
         $title = (!empty($instance['title']) ? $instance['title'] : '');
         $textarea = (!empty($instance['subscribe_notice']) ? $instance['subscribe_notice'] : '');
        $aboutimg = (!empty($instance['banner_image']) ? $instance['banner_image'] : '');
        $form_shortcode = (!empty($instance['form_shortcode']) ? $instance['form_shortcode'] : '');
        
        echo $args['before_widget'];
        echo $args['before_title'];
            echo esc_html($title);
        echo $args['after_title']; ?>
        <div class="card about-me text-center border-0 rounded-0 p-15">
            <img class="card-img-top rounded-0" src="<?php echo esc_url($aboutimg);?>" alt="image cap">
            <div class="subscribe-notice">
                <?php echo esc_html($textarea); ?>
            </div>
            <div class="subscribe-form">
                <?php echo wp_kses_post( $form_shortcode );
                ?>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }
    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     */
    public function update($new_instance, $old_instance)
    {
        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }
    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     */
    public function form($instance)
    {
        $title = (!empty($instance['title']) ? $instance['title'] : '');
        $textarea = (!empty($instance['subscribe_notice']) ? $instance['subscribe_notice'] : '');
        $aboutimg = (!empty($instance['banner_image']) ? $instance['banner_image'] : '');
        $form_shortcode = (!empty($instance['form_shortcode']) ? $instance['form_shortcode'] : '');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'blogstart'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <button type="file" id="banner_image" class="button button-primary"><?php esc_html_e('Choose Image', 'blogstart'); ?></button>
            <input id="about_img_url" type="hidden" name="<?php echo esc_attr($this->get_field_name('banner_image'));?>" placeholder="<?php esc_attr_e('Image url', 'blogstart');?>" value="<?php echo esc_url($aboutimg);?>">
           <div class="preview-img">
               <img src="<?php echo esc_url($aboutimg);?>" width="300" height="300" alt="">
           </div>
        </p>
       
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('subscribe_notice')); ?>"><?php esc_html_e('subscribe_notice', 'blogstart'); ?></label>
            <textarea type="text" id="<?php echo esc_attr($this->get_field_id('subscribe_notice')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('subscribe_notice')); ?>"> <?php echo esc_textarea($textarea); ?> </textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('form_shortcode')); ?>"><?php esc_html_e('form_shortcode', 'blogstart'); ?></label>
            <textarea type="text" id="<?php echo esc_attr($this->get_field_id('form_shortcode')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('form_shortcode')); ?>"> <?php echo esc_textarea($textarea); ?> </textarea>
        </p>
        <?php
    }
}
function blogstart_subscrib_form_widget()
{
    register_widget('Blogstart_Subscribe_form');
}
add_action('widgets_init', 'blogstart_subscrib_form_widget');
