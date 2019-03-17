<?php
/*
Plugin Name: Advertisement IES
Description: Latest advertisement shortcode [latestAdvertisement]
Version: 1.0
*/

function handle_shortcode() {
    return '<div id="mount"></div>';
}

add_shortcode('latestAdvertisement', 'handle_shortcode');

function enqueue_scripts(){
    global $post;
    if(has_shortcode($post->post_content, "latestAdvertisement")){
        wp_enqueue_script('vue-js', '//cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js', [], '2.5.17', true);
        wp_enqueue_script('advertisement-posts', plugin_dir_url( __FILE__ ) . 'advertisement.js', [], '1.0', true);
    }
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );