<?php
function register_nav() {
    register_nav_menus (
        array (
            'header' => 'Header'
        )
        );
    register_nav_menus (
        array (
            'footer' => 'Footer'
        )
        );
    register_nav_menus (
        array (
            '404' => '404'
        )
        );
}

if(! function_exists('setup')):
function setup(){
    register_nav();
    add_theme_support('post-thumbnails');
    // below creates a custom image size, called team with the dimensions of 475 x 475 and we also pass over that we will trim it down if it isn't centered, which is done in the array centered at top and bottom and left and right
    add_image_size('team', 475, 475, array('center', 'center'));

}
endif;

// create another function that pulls in the themes of our style.css and javascript in the header and footer 
function scripts_header(){
    wp_enqueue_style('init', get_stylesheet_uri();)
}

function scripts_footer(){
//  wp_enqueue_script('init', get_template_directory_uri().'/js/init.js', array('jquery'))
}

add_action('after_setup_theme', 'setup');
add_action('wp_enqueue_scripts', 'scripts_header');
// add_action('wp_footer', 'scripts_footer');
