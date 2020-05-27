<?php

//Link til css filer
function dbe_theme_styles () {

    wp_enqueue_style( 'main_css' , get_template_directory_uri ()  . '/main.css');
    wp_enqueue_style ('style_css', get_template_directory_uri () . '/style.css' );
}


//Link til javascript filer
add_action ('wp_enqueue_scripts', 'dbe_theme_styles');

function dbe_theme_js() {

    wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.2.1.min.js', null, null, true);
    wp_enqueue_script('jQuery');
    wp_register_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', null, null, true);
    wp_enqueue_script('Popper');
    wp_register_script( 'Bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', null, null, true );
    wp_enqueue_script('Bootstrap_js');
    wp_enqueue_script('Projekter_js', get_template_directory_uri() . "/projekter.js", array('jQuery'), '', true);

}


add_action ('wp_enqueue_scripts', 'dbe_theme_js');


?>
