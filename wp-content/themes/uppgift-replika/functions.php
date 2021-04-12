<?php 


function load_styles() {
    wp_enqueue_style( 'baaaaaaa', get_template_directory_uri() . './css/bootstrap.css', false );
    wp_enqueue_style( 'gaaaaaaa', get_template_directory_uri() . './style.css', false );
    wp_enqueue_style( 'saaaaaaa', get_template_directory_uri() . './css/font-awesome.css', false );

}
 


/*  function load_scripts() {
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}  
 */





//add_action( 'wp_enqueue_scripts', 'load_scripts' );
add_action( 'wp_enqueue_scripts', 'load_styles' );
add_theme_support('post-thumbnails');
add_theme_support('menus');


?>
