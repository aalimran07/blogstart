<?php
/**
 * new WordPress Widget format
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Blogstart_About_Author extends WP_Widget
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $widget_ops = array( 'classname' => 'blogstart_about_author', 'description' => esc_html__('Display Author Info', 'blogstart') );
        parent::__construct('blogall_about', esc_html__('About Author', 'blogstart'), $widget_ops);
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
         $title = (!empty($instance['title']) ? $instance['title'] : esc_html__('About', 'blogstart'));
         $textarea = (!empty($instance['about']) ? $instance['about'] : esc_html__('Type Something About You', 'blogstart'));
        $authorname = (!empty($instance['author_name']) ?  $instance['author_name'] : esc_html__('Author Name Here', 'blogstart'));
        $aboutimg = (!empty($instance['aboutimage_url']) ? $instance['aboutimage_url'] : '');
        $facebook = (!empty($instance['facebook']) ? $instance['facebook'] : '');
        $twitter = (!empty($instance['twitter']) ? $instance['twitter'] : '');
        $linkedin = (!empty($instance['linkedin']) ? $instance['linkedin'] : '');
        $pinterest = (!empty($instance['pinterest']) ? $instance['pinterest'] : '');
        $instagram = (!empty($instance['instagram']) ? $instance['instagram'] : '');
        echo $args['before_widget'];
        echo $args['before_title'];
            echo esc_html($title);
        echo $args['after_title']; ?>
        <div class="card about-me text-center border-0 rounded-0 p-15">
            <img class="card-img-top rounded-0" src="<?php echo esc_url($aboutimg);?>" alt="image cap">
            <div class="card-body p-0">
                <h2 class="card-title mt-15 mb-20"><?php echo esc_html($authorname);?></h2>
                <p class="card-text"><?php echo wp_kses_post( $textarea ); ?></p>
                <div class="icon-list">
                    <?php if (!empty($facebook)): ?>
                        <a href="<?php echo esc_url($facebook);?>"><i class="fa fa-facebook"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($twitter)): ?>
                        <a href="<?php echo esc_url($twitter);?>"><i class="fa fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($linkedin)): ?>
                        <a href="<?php echo esc_url($linkedin);?>"><i class="fa fa-linkedin"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($pinterest)): ?>
                        <a href="<?php echo esc_url($pinterest);?>"><i class="fa fa-pinterest"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($instagram)): ?>
                        <a href="<?php echo esc_url($instagram);?>"><i class="fa fa-instagram"></i></a>
                    <?php endif; ?>
                </div>
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
        $title = (!empty($instance['title']) ? $instance['title'] : esc_html__('About', 'blogstart'));
        $textarea = (!empty($instance['about']) ? $instance['about'] : esc_html__('Type Something About You', 'blogstart'));
        $authorname = (!empty($instance['author_name']) ?  $instance['author_name'] : esc_html__('Author Name Here', 'blogstart'));
        $aboutimg = (!empty($instance['aboutimage_url']) ? $instance['aboutimage_url'] : '');
        $facebook = (!empty($instance['facebook']) ? $instance['facebook'] : '');
        $twitter = (!empty($instance['twitter']) ? $instance['twitter'] : '');
        $linkedin = (!empty($instance['linkedin']) ? $instance['linkedin'] : '');
        $pinterest = (!empty($instance['pinterest']) ? $instance['pinterest'] : '');
        $instagram = (!empty($instance['instagram']) ? $instance['instagram'] : '');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'blogstart'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <button type="file" id="about_img" class="button button-primary"><?php esc_html_e('Choose Image', 'blogstart'); ?></button>
            <input id="about_img_url" type="hidden" name="<?php echo esc_attr($this->get_field_name('aboutimage_url'));?>" placeholder="<?php esc_attr_e('Image url', 'blogstart');?>" value="<?php echo esc_url($aboutimg);?>">
           <div class="preview-img">
               <img src="<?php echo esc_url($aboutimg);?>" width="300" height="300" alt="">
           </div>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('author_name')); ?>"><?php esc_html_e('Author Name', 'blogstart'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('author_name')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('author_name')); ?>" value="<?php echo esc_html($authorname);?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('about')); ?>"><?php esc_html_e('About', 'blogstart'); ?></label>
            <textarea type="text" id="<?php echo esc_attr($this->get_field_id('about')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('about')); ?>"> <?php echo esc_attr($textarea); ?> </textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook', 'blogstart'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" value="<?php echo esc_html($facebook);?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter', 'blogstart'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" value="<?php echo esc_html($twitter);?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('LinkedIn', 'blogstart'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" value="<?php echo esc_html($linkedin);?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('pinterest', 'blogstart'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" value="<?php echo esc_html($pinterest);?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('instagram', 'blogstart'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" value="<?php echo esc_html($instagram);?>">
        </p>
        <?php
    }
}
function blogstart_about_author_widget()
{
    register_widget('Blogstart_About_Author');
}
add_action('widgets_init', 'blogstart_about_author_widget');
