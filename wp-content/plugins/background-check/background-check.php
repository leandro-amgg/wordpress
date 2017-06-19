<?php
/*
  Plugin Name: Background check
  Plugin URI:
  Description: Background check trough ...
  Author: Leandro Castellanos
  Version: 1.0
  Author URI:
 */

//Add widget in dashboard START
require_once(plugin_dir_path(__FILE__) . '/dashboard/dash-widget.php');

$custom_dashboard_widgets = array(
    'my-dashboard-widget' => array(
        'title' => 'My Dashboard Widget',
        'callback' => 'dashboardWidgetContent'
    )
);

function dashboardWidgetContent() {
    $user = wp_get_current_user();
    echo "Hello <strong>" . $user->user_login . "</strong>, this is your custom widget. You can, for instance, list all the posts you've published:";

    $r = new WP_Query(apply_filters('widget_posts_args', array(
                'posts_per_page' => 10,
                'post_status' => 'publish',
                'author' => $user->ID
    )));

    if ($r->have_posts()) :
        ?>

        <?php
    endif;
}

$dw = new Dashboard_Widgets();

//Add widget in dashboard END

function plugin_setup_menu() {
    add_menu_page('My Plugin Page', 'My Plugin', 'manage_options', 'my-plugin', 'test_init');
}

function test_init() {
    include_once(plugin_dir_path(__FILE__) . '/views/background-check.view.php');
}

//Funtion to add custom scripts and styles
function bc_scripts_styles() {
    wp_register_script('custom-script', plugins_url('/js/custom-script.js', __FILE__), array('jquery'));
    wp_register_style('custom-css', plugins_url('/css/custom-style.css', __FILE__));
    wp_enqueue_script('custom-script');
    wp_enqueue_style('custom-css');
}

//Function to create a widget
function create_background_check_widget() {
    include_once(plugin_dir_path(__FILE__) . '/widgets/background-check-widget.php');

    register_widget('Background_check_widget');
}

//Function that have the content to replace the shortcode
function form_background_check() {
    if (isset($_POST['action'])) {
        echo $_POST['action'] . " " . $_POST['social'];
    }
    ?>
    <form method="POST">
        <div class="form-group">
            <label for="social">Social Security:</label>
            <input type="text" class="form-control" id="social" name="social" placeholder="SSN">
            <input type="hidden" name="action" value="sended">
        </div>
        <button type="submit" id="bcw-submit" class="btn btn-default">Check</button>
    </form>
    <?php
}

//Adding actions and shortcode
add_action('admin_menu', 'plugin_setup_menu');
add_action('wp_enqueue_scripts', 'bc_scripts_styles');
add_action('widgets_init', 'create_background_check_widget');
add_shortcode('form-background-check', 'form_background_check');
?>