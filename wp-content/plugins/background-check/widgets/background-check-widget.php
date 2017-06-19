<?php

class Background_check_widget extends WP_Widget {

    function Background_check_widget() {

        $widget_opts = array(
            "class_name" => "Background_check_widget",
            "description" => "Background check widget"
        );

        $this->WP_Widget("Background_check_widget", "Background check widget", $widget_opts);
    }

    function widget($args, $instance) {
        echo $before_widget;
        ?>
        <aside id='bcw_widget' class='widget bcw_widget'>
            <h3 class='widget-title'>Background Check Widget</h3>
            <div><?= do_shortcode($instance["bcw_shortcode"]) ?></div>
        </aside>
        <?php
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance["bcw_shortcode"] = strip_tags($new_instance["bcw_shortcode"]);

        return $instance;
    }

    function form($instance) {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('bcw_shortcode'); ?>">Shortcode:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('bcw_shortcode'); ?>" name="<?php echo $this->get_field_name('bcw_shortcode'); ?>" 
                   type="text" value="<?php echo esc_attr($instance["bcw_shortcode"]); ?>" />
        </p>
        <?php
    }

}
?>