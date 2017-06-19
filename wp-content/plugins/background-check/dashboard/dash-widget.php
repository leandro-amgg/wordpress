<?php

class Dashboard_Widgets {

    function __construct() {
        add_action('wp_dashboard_setup', array($this, 'remove_dashboard_widgets'));
        add_action('wp_dashboard_setup', array($this, 'add_dashboard_widgets'));
    }

    function remove_dashboard_widgets() {
        
    }

    function add_dashboard_widgets() {
        global $custom_dashboard_widgets;

        foreach ($custom_dashboard_widgets as $widget_id => $options) {
            wp_add_dashboard_widget(
                    $widget_id, $options['title'], $options['callback']
            );
        }
    }

}

?>