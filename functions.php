<?php

//include NavWalker Class de Bootstrap Navigation Menu
 require_once('wp-bootstrap-navwalker.php');





// Ajouter javascript et css

function fudi_style() {

	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(),'4.0.0');
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(),'1.0');
	wp_enqueue_style('font_awsome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('google_font1', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300');
	wp_enqueue_style('google_font2', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Lato:300,400,700,900');
}


function fudi_script() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false,true);
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.slim.js', array(), false,true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array(), false,true);
}

add_action('wp_enqueue_scripts', 'fudi_style');
add_action('wp_enqueue_scripts','fudi_script');

//Ajouter et modifier Navigation menu

function fudi_navig_menu() {
	register_nav_menus(array(
		'bootstrap-menu' => 'Navigation Menu'
	));
}

function bootstrap_menu(){
	wp_nav_menu(array(
		'theme_location'  => 'bootstrap-menu',
		'menu_class'      => 'nav navbar-nav ml-auto',
		'container'       => 'false',
		'depth'           => 2,
		'walker'          => new WP_Bootstrap_Navwalker()

	));
}

add_action('after_setup_theme', 'fudi_navig_menu');
