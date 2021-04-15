<?php 

//function for loading all styles
function load_styles() {
    wp_enqueue_style( 'baaaaaaa', get_template_directory_uri() . './css/bootstrap.css', false );
    wp_enqueue_style( 'gaaaaaaa', get_template_directory_uri() . './style.css', false );
    wp_enqueue_style( 'saaaaaaa', get_template_directory_uri() . './css/font-awesome.css', false );

}

function register_my_menus() {
    register_nav_menu("nav-menu", "Header nav-menu"); 
    register_nav_menu("sub-menu", "Sub menu"); 
    register_nav_menu("footer-menu", "footer menu");

}
    
//Register sidebars
register_sidebar([ //Long time google, still no solution for the div wrapper it ads. 
    "name" => "kort om oss",
    "id" => "kort-om-oss",
    "before_title" => "<h4>",
    "after_title" => "</h4>",
    'before_widget' => false,
]);

register_sidebar([ 
    "name" => "kontaktuppgifter",
    "id" => "kontaktuppgifter",
    "before_title" => "<h4>",
    "after_title" => "</h4>",
    'before_widget' => false,
]);

register_sidebar([  //Creates 4 uls 1 for each widget picked. Orginal was 2 ul with 1 widget in first and 3 widgets in second
    "name" => "sidebar",
    "id" => "sidebar",
    //'before_widget' => false,
    'before_widget' => '<ul><li>',
    'after_widget' => '</li></ul>',
]);




//Function for printing categories with links
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
add_action('after_setup_theme', 'register_my_menus');
add_action( 'wp_enqueue_scripts', 'load_styles' );
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


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
