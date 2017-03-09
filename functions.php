<?php 
    
function theme_name_scripts() {
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . "/js/bootstrap.min.js");
	wp_enqueue_style( 'style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// регистрируем миниатюры
add_theme_support( 'post-thumbnails' );

// регестрируем меню
register_nav_menu( 'menu', 'Меню в шапке' );

 ?>