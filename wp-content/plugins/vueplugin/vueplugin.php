<?php
/*
Plugin Name: Notification IES
Description: Latest notification shortcode [latestNotification]
Version: 1.0
*/

function handle_shortcode() {

    return '<div id="mount"></div>';

}

add_shortcode('latestNotification', 'handle_shortcode');

function enqueue_scripts(){

    global $post;

    if(has_shortcode($post->post_content, "latestNotification")){

        wp_enqueue_script('vue-js', '//cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js', [], '2.5.17', true);
        wp_enqueue_script('notification-page', plugin_dir_url( __FILE__ ) . 'notification.js', [], '1.0', true);

    }
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );