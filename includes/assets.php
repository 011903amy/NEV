<?php 

function my_assets(){
    wp_enqueue_style('myAssets',get_template_directory_uri().'/css/style.css',microtime());
    wp_enqueue_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
}

add_action('wp_enqueue_scripts','my_assets');