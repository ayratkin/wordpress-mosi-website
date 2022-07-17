<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Меню в шапке' );
}

function style_theme(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'dev-style', get_template_directory_uri() . '/assets/css/style.min.css' );
}

function scripts_theme() {
    wp_enqueue_script('dev-script', get_template_directory_uri() . '/assets/js/app.min.js' );
}
