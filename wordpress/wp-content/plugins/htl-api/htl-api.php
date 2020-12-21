<?php 
/**
 * @package HtlPlugin 
 */
/**
*PLugin Name: HtlApi Plugin
*Plugin URI: https://raman26.github.io/plugin
*Description: HTML API of user list on writing a custom endpont Plugin.
*Version:1.0.0
*Author: Raman "Ramanjeet Kaur"
*Author URI:https://raman26.github.io/profile/
*License: GPLv2 or later
*Text Domain:htl-api
 */
//defined('ABCPATH') or die('Unauthorized Access!');

if (!function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

add_action('admin_init','callback_func');

function callback_func() {
    //echo 'You are noe logged in to the admin area- silly to show that this true';
    $url='https://jsonplaceholder.typicode.com/users';
    $args=array(
        'method'=>'GET'
    );
    $response=wp_remote_get($url,$args);

    if(is_wp_error($response)) {
        $error_message=$response->get_error_message();
        echo "Something went wrong : ".$error_message;
    }

    // echo '<pre>';
    // var_dump(wp_remote_retrieve_body($response));
    // echo "</pre>";
}