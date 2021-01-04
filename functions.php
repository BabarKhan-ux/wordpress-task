// Function for creating custom post type


function create_custom_post_type() {

	// Labels
	$labels = array(
        'name'                => _x( 'Products', 'Post Type General Name' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Products' ),
        'parent_item_colon'   => __( 'Parent Product' ),
        'all_items'           => __( 'All Products' ),
        'view_item'           => __( 'View Product' ),
        'add_new_item'        => __( 'Add New Product' ),
        'add_new'             => __( 'Add Product' ),
        'edit_item'           => __( 'Edit Product' ),
        'update_item'         => __( 'Update Product' ),
        'search_items'        => __( 'Search Product' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
	);
	
	$args = array(
        'label'               => __( 'products' ),
        'description'         => __( 'This is the test product custom post type' ),
        'labels'              => $labels,
		
	// Features this Custom Post Type supports in Post Editor
	'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'custom-background'),
		
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
	'menu_position'       => 5,
	'menu_icon'  	      => 'dashicons-products',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' 	      => true,
	);

	// Registering your Custom Post Type
    register_post_type( 'products', $args );
	
}

add_action('init', 'create_custom_post_type');
