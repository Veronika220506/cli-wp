<?php
function bootkit_register_post_type_init()
{
    $labels = array(
        'name' => 'Movies',
        'singular_name' => 'Movie', // show in admin panel add->Movie
        'add_new' => 'Add movie',
        'add_new_item' => 'Add new movie', // <title>
        'edit_item' => 'Edit movie',
        'new_item' => 'New movie',
        'all_items' => 'All movies',
        'view_item' => 'View movies',
        'search_items' => 'Search movies',
        'not_found' => 'Movies not found.',
        'not_found_in_trash' => 'Movies not found in trash.',
        'menu_name' => 'Movies',
    );
    $args = array(
        'labels' => $labels,
        'public' => true, //for all users - true
        'show_ui' => true, // show in admin panel
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/img/function_icon.png', // иконка в меню
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail'),
        'taxonomies' => array( 'category','genre','director', 'revisions', 'custom-fields'  ),
    );
    register_post_type('movies', $args);
    $labels = array(
        'name' => 'Manga',
        'singular_name' => 'Manga', // show in admin panel add->Movie
        'add_new' => 'Add Manga',
        'add_new_item' => 'Add new Manga', // <title>
        'edit_item' => 'Edit Manga',
        'new_item' => 'New Manga',
        'all_items' => 'All Manga',
        'view_item' => 'View Mangas',
        'search_items' => 'Search Mangas',
        'not_found' => 'Mangas not found.',
        'not_found_in_trash' => 'Mangas not found in trash.',
        'menu_name' => 'Manga',
    );
    $args = array(
        'labels' => $labels,
        'public' => true, //for all users - true
        'show_ui' => true, // show in admin panel
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/img/function_icon.png', // иконка в меню
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'taxonomies' => array( 'category','genre','author'  ),
    );
    register_post_type('manga', $args);
}