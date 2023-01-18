<?php

/**CSS JS */

function lapizzeria_styles(){

    //Normalize 
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
    //SlickNav
    wp_enqueue_style('slicknavCSS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.2/slicknav.min.css', array('normalize'), '1.0.10');
    //Google Fonts
    wp_enqueue_style('GoogleFonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&display=swap', array(), '1.0.0');
     //Agregar hojas de estilos
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    //Script 
    //SlickNav JS
    wp_enqueue_script('slicknavJS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.2/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    //Scripts JS
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');


/** MENUS */


function lapizzeria_menus(){
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
    ));
}
add_action( 'init', 'lapizzeria_menus' );