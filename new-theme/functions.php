<?php 
function photumbia_files(){

	// JavaScript !!!!

    wp_enqueue_script( 'svejo_script', get_template_directory_uri() . '/javascript/main.js', array('jquery'), microtime(), true );

    wp_enqueue_script( 'bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), microtime(), true );

    // External Styles !!!!

	wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', NULL ,microtime());

	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', NULL ,microtime());

	 // Local Styles !!!!
	
wp_enqueue_style( 'test', get_template_directory_uri() . '/styles/test.css', '', microtime(), 'screen' );

wp_enqueue_style( 'test', get_template_directory_uri() . '/styles/modal.css', '', microtime(), 'screen' );

wp_enqueue_style( 'test', get_template_directory_uri() . '/styles/lightbox.min.css', '', '', 'screen' );

wp_enqueue_style( 'test', get_template_directory_uri() . '/styles/lightbox.css', '', microtime(), 'screen' );



}

// Function Call !!!!

add_action('wp_enqueue_scripts','photumbia_files'); 


// WordPress Features !!!!

function photumbia_features(){
	// register_nav_menu('headerMenuLocation' , 'Header Menu Location');
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support('title-tag');
}

// Function Call !!!!

add_action('after_setup_theme', 'photumbia_features');






