<?php

function mukto_css_js(){
	//link css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), time(), 'all' );
	wp_enqueue_style( 'reset', get_template_directory_uri().'/assets/css/reset.css', array(), time(), 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css', array(), time(), 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), time(), 'all' );
	wp_enqueue_style( 'owl', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), time(), 'all' );
	wp_enqueue_style( 'magnific', get_template_directory_uri().'/assets/magnific-popup.css', array(), time(), 'all' );
	wp_enqueue_style( 'gfont', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '2.0', 'all' );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css', array(), time(), 'all' );
	wp_enqueue_style( 'essential-icons', get_template_directory_uri().'/assets/icon-fonts/essential-regular-fonts/essential-icons.css', array(), time(), 'all' );
	
    //	Link Jquery
    
    wp_enqueue_script( 'custome_jquery', get_template_directory_uri().'/assets/js/jquery-2.1.4.min.js', array(), '1.0', true );
    wp_enqueue_script( 'smoothscroll', get_template_directory_uri().'/assets/js/smoothscroll.js', array('custome_jquery'), '1.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('custome_jquery'), '1.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.min.js', array('custome_jquery'), '1.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array('custome_jquery'), '1.0', true );
    wp_enqueue_script( 'typed', get_template_directory_uri().'/assets/js/typed.js', array('custome_jquery'), '1.0', true );
    wp_enqueue_script( 'magnific', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('custome_jquery'), '1.0', true );
    wp_enqueue_script( 'owl', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('custome_jquery'), '1.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('custome_jquery'), '1.0', true );
}
add_action('wp_enqueue_scripts','mukto_css_js');



    