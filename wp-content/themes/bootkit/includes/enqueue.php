<?php
function bootkit_enqueue()
{
    //----Styles
    $url = get_theme_file_uri();
    $ver = BOOTSTRAPTOPIC_DEV_MODE ? time() : false;
    wp_register_style('bootkit_google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap', [], $ver); // Google fonts
    wp_register_style('bootkit_bootstrap', $url . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], $ver); // bootstrap.min.css
    wp_register_style('bootkit_modern_business', $url . '/assets/css/modern-business.css');
    wp_register_style('my_bootkit', $url . '/css/my_bootkit.css');
    // modern-business.css
    wp_enqueue_style('bootkit_google_fonts');
    wp_enqueue_style('bootkit_bootstrap');
    wp_enqueue_style('bootkit_modern_business');
    wp_enqueue_style('my_bootkit');
    //----Scripts-----------
    wp_register_script('bootkit_bootstrap', $url .
        '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', 'jquery', $ver, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootkit_bootstrap');
    wp_register_style('mystyles', $url . '/css/style.css');
 wp_enqueue_style('mystyles');
}