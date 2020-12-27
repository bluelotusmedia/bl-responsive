<?php

// Enqueue Scripts

function bluelotus_enqueue_scripts() {
	//js
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true );
	wp_enqueue_script( 'jquery'); 
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true ); 
	//css
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
	wp_enqueue_style( 'core', get_template_directory_uri() . '/css/style.css', array(), '1.0.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'bluelotus_enqueue_scripts' );

// Add Theme support

function bluelotus_theme_setup(){
	add_theme_support('menus');
	register_nav_menu('header', 'header nav');
	register_nav_menu('footer', 'footer nav');
}

add_action( 'init', 'bluelotus_theme_setup');

add_theme_support( 'custom-background');
add_theme_support( 'custom-header');
add_theme_support( 'post-thumbnails');


// Sidebar Setup

function bluelotus_sidebar_setup(){
	
	register_sidebar(
		array(
		'name' => 'Sidebar 1',
		'id' => 'sidebar-1',
		'class' => 'bl-sidebar-1-container',
		'description' => 'This is sidebar 1',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<div class="widgettitle">',
		'after_title'   => '</div>'
		)
	);
	
	register_sidebar(
		array(
		'name' => 'Footer',
		'id' => 'footer',
		'class' => 'bl-footer-container',
		'description' => 'This is for adding widgets to the footer. by default it is four in a row.',
		'before_widget' => '<div id="%1$s" class="widget %2$s col-xs-12 col-sm-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
		)
	);
	
	
}

add_action ('widgets_init','bluelotus_sidebar_setup');

// Include Walker File

require get_template_directory() . '/inc/walker.php';

?>