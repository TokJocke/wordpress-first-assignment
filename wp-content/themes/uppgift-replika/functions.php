<?php 



//function for loading all styles
function load_styles() {//funktion för att samla css för att lättare kalla på dem
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . './css/bootstrap.css', false );
    wp_enqueue_style( 'style', get_template_directory_uri() . './style.css', false );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . './css/font-awesome.css', false );

}


function load_scripts() {//funktion för att samla js för att lättare kalla på dem
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );   
}  

function register_my_menus() { //funktion för att samla menyer för att lättare kalla på dem
    register_nav_menu("nav-menu", "Header nav menu"); 
    register_nav_menu("sub-menu", "Sub menu"); 
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

register_sidebar([  
    "name" => "sidebar",
    "id" => "sidebar",
]);

// Adding an option page to modify content in Footer
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Options Footer',
        'menu_title'    => 'Temainstillinger',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

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


//Filter text thats not wanted in author.php -> title
add_filter('get_the_archive_title_prefix','__return_false');
//Hooks & theme support
add_action( 'wp_footer', "load_scripts" );
add_action('after_setup_theme', 'register_my_menus');
add_action( 'wp_enqueue_scripts', 'load_styles' );
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support( 'title-tag' );

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
