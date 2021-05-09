<?php

// theme support
add_theme_support( 'post-thumbnails' ); // this allows you to set a featured image
add_theme_support('woocommerce'); // removes message from admin that WooCommerce is not supported

// Filters
add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );
add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +

function woo_custom_cart_button_text() {

        return __( 'Add to Cart', 'woocommerce' );

}

add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +

function woo_archive_custom_cart_button_text() {

        return __( 'Select', 'woocommerce' );

}

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



function theme_styles() {

	wp_enqueue_style( 'bench-nine-font', 'https://fonts.googleapis.com/css?family=BenchNine', [], '0.0.1', 'all');
	wp_enqueue_style( 'roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:400,700', [], '0.0.1', 'all');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], '0.0.1', 'all');
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', [], '0.0.1', 'all');
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.css', [], '0.0.1', 'all');
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/css/tailwind.css', [], '2.0.2', 'all');
	wp_enqueue_style( 'mtl-style', get_template_directory_uri() . '/css/mtl.css', [], '0.0.2', 'all');

	// Default Style Sheet
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', [], '0.0.2', 'all');
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/54b0c353c1.js', [], '1.0.0', true );

	wp_enqueue_script( 'jquery_ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js', [], '1.12.0', true );

	wp_enqueue_script( 'fancybox_js', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), '', true );

	wp_enqueue_script( 'lightbox_js', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), '', true );

	wp_enqueue_script( 'script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

// Register Nav Locations
function mtl_register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu' ),
			'mobile'  => __( 'Mobile Menu' ),
		)
	);
}
add_action( 'init', 'mtl_register_menus' );



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
