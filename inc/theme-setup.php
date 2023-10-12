<?php 

/*
 ==================
 Theme support
======================	 */


function mukto_bootstraping(){
    load_theme_textdomain('mukto');
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    register_nav_menu('header_menu',__('Header Menu','mukto'));
    // register_nav_menu('footer_menu',__('Footer Menu','mukto'));
}
add_action('after_setup_theme','mukto_bootstraping');
