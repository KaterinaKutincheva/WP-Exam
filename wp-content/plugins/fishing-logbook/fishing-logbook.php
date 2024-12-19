<?php
/**
 * Plugin Name: Fishing Logbook
 * Description: A plugin to allow users to log their fishing catches.
 * Version: 1.0.0
 * Author: Katerina Kutincheva
 * Text Domain: fishing-logbook
 */

// Register the Fishing Log custom post type
function fishing_log_post_type() {
    register_post_type('fishing_log', array(
        'labels' => array(
            'name' => 'Fishing Logs',
            'singular_name' => 'Fishing Log',
            'add_new' => 'Add New Log',
            'add_new_item' => 'Add New Fishing Log',
            'edit_item' => 'Edit Fishing Log',
            'new_item' => 'New Fishing Log',
            'view_item' => 'View Fishing Log',
            'search_items' => 'Search Fishing Logs',
            'not_found' => 'No fishing logs found',
            'not_found_in_trash' => 'No fishing logs found in Trash'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'fishing-logs'),
        'show_in_rest' => true
    ));
}
add_action('init', 'fishing_log_post_type');

// Frontend form for submitting logs
function fishing_log_form_shortcode() {
    if (isset($_POST['submit_log'])) {
        $log_title = sanitize_text_field($_POST['log_title']);
        $log_description = sanitize_textarea_field($_POST['log_description']);

        $post_id = wp_insert_post(array(
            'post_title' => $log_title,
            'post_content' => $log_description,
            'post_status' => 'publish',
            'post_type' => 'fishing_log'
        ));

        if (!is_wp_error($post_id) && !empty($_FILES['log_photo']['name'])) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            $uploaded = media_handle_upload('log_photo', $post_id);
            if (!is_wp_error($uploaded)) {
                set_post_thumbnail($post_id, $uploaded);
            }
        }
    }

    ob_start();
    ?>
    <form method="post" enctype="multipart/form-data">
        <label for="log_title">Catch Title:</label><br />
        <input type="text" name="log_title" required /><br /><br />

        <label for="log_description">Description:</label><br />
        <textarea name="log_description" required></textarea><br /><br />

        <label for="log_photo">Upload Photo:</label><br />
        <input type="file" name="log_photo" accept="image/*" /><br /><br />

        <button type="submit" name="submit_log">Submit Log</button>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('fishing_log_form', 'fishing_log_form_shortcode');

// Enqueue styles
function fishing_log_styles() {
    wp_enqueue_style('fishing-logbook-styles', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'fishing_log_styles');

// Register meta boxes for Fishing Logs
function add_fishing_log_meta_boxes() {
    add_meta_box(
        'fishing_log_details',
        'Fishing Log Details',
        'fishing_log_meta_box_callback',
        'fishing_log',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_fishing_log_meta_boxes');

// Meta box content
function fishing_log_meta_box_callback($post) {
    $fish_type = get_post_meta($post->ID, 'fish_type', true);
    $weight = get_post_meta($post->ID, 'weight', true);
    $location = get_post_meta($post->ID, 'location', true);
    ?>
    <label for="fish_type">Fish Type:</label><br />
    <input type="text" id="fish_type" name="fish_type" value="<?php echo esc_attr($fish_type); ?>" /><br /><br />
    
    <label for="weight">Weight (kg):</label><br />
    <input type="number" id="weight" name="weight" step="0.01" value="<?php echo esc_attr($weight); ?>" /><br /><br />

    <label for="location">Location:</label><br />
    <input type="text" id="location" name="location" value="<?php echo esc_attr($location); ?>" />
    <?php
}

// Save meta box data
function save_fishing_log_meta($post_id) {
    if (isset($_POST['fish_type'])) {
        update_post_meta($post_id, 'fish_type', sanitize_text_field($_POST['fish_type']));
    }
    if (isset($_POST['weight'])) {
        update_post_meta($post_id, 'weight', sanitize_text_field($_POST['weight']));
    }
    if (isset($_POST['location'])) {
        update_post_meta($post_id, 'location', sanitize_text_field($_POST['location']));
    }
}
add_action('save_post', 'save_fishing_log_meta');
