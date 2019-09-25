<?php

function mukto_css_js(){

	//link css
	wp_enqueue_style( 'gfont', 'https://fonts.googleapis.com/css?family=Lobster|Poppins:300,400,500,700', array(), '2.0', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.3', 'all' );
	wp_enqueue_style( 'font_awesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), '5.0', 'all' );
	wp_enqueue_style( 'lightbox', get_template_directory_uri().'/assets/css/lightbox.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'aos', get_template_directory_uri().'/assets/css/aos.css', array(), '3.5.1', 'all' );
	
	wp_enqueue_style( 'click_slider', get_template_directory_uri().'/assets/css/slick.css', array(), '1.9.0', 'all' );
	wp_enqueue_style( 'main_css', get_template_directory_uri().'/assets/css/style.css', array(), time(), 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), time(), 'all' );
	
    //	Link Jquery
    wp_enqueue_script( 'jquery_min', get_template_directory_uri().'/assets/js/jquery-3.3.1.min.js', array(), '3.3', true );
    wp_enqueue_script( 'poper', get_template_directory_uri().'/assets/js/poper.js', array('jquery_min'), '1.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery_min'), '4.3', true );
    wp_enqueue_script( 'lightbox', get_template_directory_uri().'/assets/js/lightbox.min.js', array('jquery_min'), '1.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery_min'), '1.0', true );
	wp_enqueue_script( 'aos', get_template_directory_uri().'/assets/js/aos.js', array('jquery_min'), '1.0', true );
	wp_enqueue_script( 'gmap3', get_template_directory_uri().'/assets/js/gmap3.min.js', array('jquery_min'), '1.0', true );
    wp_enqueue_script( 'mapapi', 'https://maps.googleapis.com/maps/api/js?key=xxxxxxxxxxxxxxxxxxxxx', array(), '1.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery_min'), time(), true );
}
add_action('wp_enqueue_scripts','mukto_css_js');



    