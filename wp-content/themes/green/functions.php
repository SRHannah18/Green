<?php

function green_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/green.css', array(), '1', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/green.js', array(), '1', true);
}


add_action( 'wp_enqueue_scripts', 'green_script_enqueue');



// filter and function to reorder posts with Post Types Order Plugin

add_filter('apto/navigation_sort_apply', 'theme_apto_navigation_sort_apply');

function theme_apto_navigation_sort_apply($current)
    {
        global $post;

        if($post->post_type == 'post')

            $current    =   TRUE;

            else

            $current    =   FALSE;      

        return $current;  

    }




function green_theme_setup(){
	add_theme_support('menus');

	register_nav_menu('primary', 'primary header navigation');
	register_nav_menu('secondary', 'primary footer navigation');
}

add_action('init', 'green_theme_setup');

add_theme_support('custom-background');

add_theme_support('custom-header');

add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside','image','quote','chat','audio'));

add_post_type_support( 'page', array('aside','image','quote','chat','audio'));


add_action('loop_start', 'guest_custom_field');
function guest_custom_field() {
	
	// get_post_meta( $post->ID, 'guest', true );
} 

?>