<?php

// theme support
add_theme_support( 'post-thumbnails' ); // this allows you to set a featured image
add_theme_support('woocommerce'); // removes message from admin that WooCommerce is not supported

// Filters
add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );
add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );

// remove default sorting dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

 // Apply custom args to main query
function custom_woocommerce_get_catalog_ordering_args( $args ) {
	$orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

	if ( 'oldest_to_recent' == $orderby_value ) {
		$args['orderby'] = 'date';
		$args['order'] = 'ASC';
	}

	return $args;
}

// Create new sorting method
function custom_woocommerce_catalog_orderby( $sortby ) {

	$sortby['oldest_to_recent'] = __( 'Oldest to most recent', 'woocommerce' );

	return $sortby;
}
 
// Filter that puts the variation in the message "added to cart" or "removed from cart"

add_filter('wc_add_to_cart_message', 'handler_function_name', 10, 2);
function handler_function_name($message, $product_id) {
     $variation_id = isset( $_REQUEST[ 'variation_id' ] ) ? $_REQUEST[ 'variation_id' ] : null;
    // Collect the product, product variations and attributes
            $var_product = get_product( $variation_id );
            $variations = $var_product->get_variation_attributes();
            $attributes = $var_product->get_attributes();
            $name_output = null;
    if ( is_array( $variations ) ) {

                foreach( $variations as $key => $value ) {

                    $key = str_replace( 'attribute_', '', $key ); // Clean the attribute name

                    $attribute = $attributes[$key]; // Get the attribute data

                    // Check if the attribute is a taxonomy
                    if( $attribute['is_taxonomy'] ){

                        // Get the taxonomy name
                        $attr_name = get_term_by( 'slug', $value, $key, 'ARRAY_A' );
                        $attr_name = $attr_name['name'];

                    } else {
                        $attr_name = ucwords($value); // Clean up the custom attribute name
                    }

                    $name_output[] = $attr_name; // Load them into an array to be imploded
                }
            }

            $product_title = get_the_title( $product_id ); // Get the main product title

        $product_title .= ( $name_output ? ' ' . implode( ', ', $name_output ) : '' ); // Add variation(s) if not null

        $added_text = sprintf( __( '"%s" was successfully added to your cart.', 'woocommerce' ), $product_title );

     // Output success messages

        $return_to  = apply_filters( 'woocommerce_continue_shopping_redirect', wp_get_referer() ? wp_get_referer() : home_url() );

        $message    = sprintf( '<a href="%s" class="button wc-forward">%s</a> %s', $return_to, __( 'Continue Shopping', 'woocommerce' ), $added_text );

        $message    = sprintf( '<a href="%s" class="button wc-forward">%s</a> %s', wc_get_page_permalink( 'cart' ), __( 'View Cart', 'woocommerce' ), $added_text );

    return $message;
}


function theme_styles() {
	wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
	wp_enqueue_style( 'bench_nine', 'https://fonts.googleapis.com/css?family=BenchNine' );
	wp_enqueue_style( 'roboto_css', 'https://fonts.googleapis.com/css?family=Roboto:400,700' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'fancybox_css', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'lightbox_css', get_template_directory_uri() . '/css/lightbox.css' );
	wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/css/mtl.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	// wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	// wp_register_script( 'jquery_ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array('jquery'), '', true );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'jquery_ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js' );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script('bootstrap_hover', get_template_directory_uri() . '/js/jquery.bootstrap-dropdown-hover.min.js', array('jquery', 'bootstrap_js'), '', true);
	wp_enqueue_script( 'smooth_scroll_js', get_template_directory_uri() . '/js/jquery.smooth-scroll.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'fancybox_js', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), '', true );
	wp_enqueue_script( 'lightbox_js', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), '', true);
	wp_enqueue_script( 'script_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap_js'), '', true );
	wp_enqueue_script( 'scroll_js', get_template_directory_uri() . '/js/scroll.js', array('jquery', 'bootstrap_js'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );
// add_filter( 'show_admin_bar', '__return_false' );


//add_theme_support( 'menus' ); // This is to set the custom and dynamic menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'MTL' ),
) );

require_once('wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker

add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */
function prefix_enqueue_awesome() {
	wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0' );
}

function mtl_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'cpac_excerpt_length', 999 );


function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of the pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

// Custom Post Type: Albums

function custom_post_albums() {

	$labels = array(
		'name' => 'Albums',
		'singular_name' => 'Album',
		'add_new' => 'Add Album',
		'add_new_item' => 'Add Album',
		'edit_item' => 'Edit Album',
		'new_item' => 'New Album',
		'all_items' => 'All Albums',
		'view_item' => 'View Album',
		'search_items' => 'Search Albums',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Album'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type( 'albums', $args );
}
add_action( 'init', 'custom_post_albums' );

// Custom Album Taxonomies
function album_taxonomies() {

    //add new taxonomy hierarchical
    $labels = array(
        'name' => '',
        'singular_name' => 'Genre',
        'search_items' => 'Search Genres',
        'all_items' => 'All Genres',
        'parent_item' => 'Parent Genre',
        'parent_item_colon' => 'Parent Genre:',
        'edit_item' => 'Edit Genre',
        'update_item' => 'Update Genre',
        'add_new_item' => 'Add New Genre',
        'new_item_name' => 'New Genre Name',
        'menu_name' => 'Genres'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'Genre' )
    );

    register_taxonomy( 'Genre', array('clients'), $args);

    //add new taxonomy hierarchical

    register_taxonomy( 'subGenre', 'clients', array(
        'label' => 'subGenre',
        'rewrite' => array( 'slug' => 'subGenre' ),
        'hierarchical' => false
    ) );

}

add_action( 'init', 'album_taxonomies');


?>
