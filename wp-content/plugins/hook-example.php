<?php
// Silence is golden.

/**
 * Plugin Name: Hooks example
 */
function hooked_title($title)
{
    return '&hearts; ' . $title;
}


add_filter('the_title', 'hooked_title');
function added_footer()
{
    echo '&hearts;Hello&hearts;  ';
}
add_action('wp_footer', 'added_footer');