<?php
/*
Plugin Name: View Count
Plugin URI: https://ex.com
Description: Output count of post view
Version: 1.0
Author: M.A.I.
Author URI: https://ex.com
*/
function view_count()
{
    global $wpdb;
    $query = "SELECT view_count FROM wp_posts";
    $result = $wpdb->get_row($query);
    if (!is_null($result)) {
        return;
    }
    // добавляем новую колонку
    $query = "ALTER TABLE
                  " . $wpdb->posts . "
              ADD
                  `view_count` BIGINT UNSIGNED NOT NULL DEFAULT 0
              AFTER
                  `comment_count`";
    $wpdb->query($query);
}