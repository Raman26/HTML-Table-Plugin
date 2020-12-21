<?php 
/**
 * @package HtlistPlugin 
 */
/**
*PLugin Name: Htlist Plugin
*Plugin URI: https://raman26.github.io/plugin
*Description: This is HTML table list attempt on writing a custom Plugin.
*Version:1.0.0
*Author: Ramanjeet "Ramanjeet Kaur"
*Author URI:https://raman26.github.io/profile/
*License: GPLv2 or later
*Text Domain:htlist-plugin
 */
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2020 Automattic, Inc.
*/

// Add bar after the opening body
add_action('wp_body_open','tb_head');
function tb_head() 
{
    echo '<h3 class="tb_css">Welcome to '.get_bloginfo('name').'</h3>';
}

function htl_posts() {    
    $url='https://jsonplaceholder.typicode.com/users';
    $args=array(
        'method'=>'GET'
    );
    $response=wp_remote_get($url,$args);

    if(is_wp_error($response)) {
        $error_message=$response->get_error_message();
        echo "Something went wrong : ".$error_message;
    }
    $results=json_decode(wp_remote_retrieve_body($response));   
    return $results;
}
add_action('rest_api_init', function() {
    register_rest_route('wl/v1','users',[
        'methods'=>'GET',
        'callback'=>'htl_posts',
    ]);
}); 

// Add CSS to the top bar
add_action('wp_print_styles','tb_css');
function tb_css() {
    echo '<style>
    h3.tb_css {color:#fff; background:orange; padding:20px; margin:0px; text-align:center}
        </style>';
}

add_action('wp_enqueue_scripts', 'load_js' );
function load_js(){
    //wp_deregister_script('jquery');
    wp_register_script( 
        'htlist-plugin', 
        plugins_url('htlist-plugin.js', __FILE__), 
        array('jquery'), 
        false, 
        true 
    );
    wp_enqueue_script('htlist-plugin');
    wp_localize_script( 
        'htlist-plugin', 
        'ajax_object', 
        array('ajaxurl' => admin_url('admin-ajax.php' ) ) 
    );
}


function get_user_or_websitename() {
    if(!is_user_logged_in()) {
        return get_bloginfo('name');
    } else {
        $current_user = wp_get_current_user();
        return $current_user->user_login;
    }
}

add_shortcode('ext_data','getapifunc');
function getapifunc() {
    $url="http://localhost/wordpress/wp-json/wl/v1/users";
    //$url='https://jsonplaceholder.typicode.com/users';
    $args=array(
        'method'=>'GET'
    );
    $response=wp_remote_get($url,$args);

    if(is_wp_error($response)) {
        $error_message=$response->get_error_message();
        echo "Something went wrong : ".$error_message;
    }
    
    $results=json_decode(wp_remote_retrieve_body($response));
    //var_dump($results);
    
    $html="";
    $html.='<table>';
    $html.='<tr>';
    $html.='<td>Sr No.</td>';
    $html.='<td>Name</td>';
    $html.='<td>Username</td>';
    $html.='<td>Detail</td>';
    $html.='</tr>';

    foreach($results as $result) {
        $html.='<tr>';
        $html.='<td>'.$result->id.'</td>';
        $html.='<td>'.$result->name.'</td>';
        $html.='<td>'.$result->username.'</td>';
        $html.='<td><a  style="cursor: pointer;" class="he" id='.$result->id.' value="'.$result->id.'" >Detail</a></td>';
        $html.='</tr>';
    }

    $html.='<div id="ress" style="font-weight:bold">Here User Detail will display.</div>';
    $html.='</table>';    
    return $html;
}