<?php 


function load_styles() {
    wp_enqueue_style( 'baaaaaaa', get_template_directory_uri() . './css/bootstrap.css', false );
    wp_enqueue_style( 'gaaaaaaa', get_template_directory_uri() . './style.css', false );
    wp_enqueue_style( 'saaaaaaa', get_template_directory_uri() . './css/font-awesome.css', false );

}
 
function print_categories() {

    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
            $category_link = sprintf( 
                '<a href="%1$s" alt="%2$s">%3$s</a>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_attr( sprintf( __( 'View all posts in %s', 'textdomain', ' ' ), $category->name ) ),
                esc_html( $category->name )
            );
        echo sprintf( esc_html__( ' %s', 'textdomain' ), $category_link );
        }  
    } 
}	




/*  function load_scripts() {
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}  
 */






//add_action( 'wp_enqueue_scripts', 'load_scripts' );
add_action( 'wp_enqueue_scripts', 'load_styles' );
add_theme_support('post-thumbnails');
add_theme_support('menus');



/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );




?>
