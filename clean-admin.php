<?php

/*
Plugin Name: Clean Admin
Plugin URI: https://valters.me
Description: Clean admin for people with taste
Author: Valters Grišāns
Version: 1.0
Author URI: https://valters.me
*/

function clean_admin_style() {
    wp_enqueue_style('clean-admin', plugins_url('clean-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'clean_admin_style');
add_action('login_enqueue_scripts', 'clean_admin_style');

?>