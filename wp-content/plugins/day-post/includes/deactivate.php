<?php
function r_deactivate_plugin()
{
    wp_clear_scheduled_hook('r_daily_post_hook');
}