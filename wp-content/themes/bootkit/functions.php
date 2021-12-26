<?php
// Setup
define('BOOTSTRAPTOPIC_DEV_MODE', false);

// Includes
include get_theme_file_path('includes/enqueue.php');
include get_theme_file_path('includes/widgets.php');
// Hooks
add_action('wp_enqueue_scripts', 'bootkit_enqueue');
add_action('widgets_init', 'bootkit_widgets');
// Shortcodes