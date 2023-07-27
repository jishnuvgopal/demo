<?php
/* enqueueing styles */
function demo()
{
	wp_enqueue_style('demo-style', get_theme_file_uri('/assets/css/style.css'));
	wp_enqueue_style('demo-bootstrap-css', get_theme_file_uri('/assets/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '5.15.4');
	wp_enqueue_script('demo-bootstrap-js', get_theme_file_uri('/assets/bootstrap/js/bootstrap.min.js'), true);
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );


}
add_action('wp_enqueue_scripts', 'demo');
