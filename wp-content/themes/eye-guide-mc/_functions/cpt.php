<?php 


/* ========================================================================================================================

Register Locations CPT

======================================================================================================================== */
// function register_locations() {

// 	$labels = array(
// 		'name'                  => _x( 'Locations', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'Location', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'Locations', 'text_domain' ),
// 		'name_admin_bar'        => __( 'Locations', 'text_domain' ),
// 		'archives'              => __( 'Location Archives', 'text_domain' ),
// 		'attributes'            => __( 'Location Attributes', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent Location:', 'text_domain' ),
// 		'all_items'             => __( 'All Locations', 'text_domain' ),
// 		'add_new_item'          => __( 'Add New Location', 'text_domain' ),
// 		'add_new'               => __( 'Add New', 'text_domain' ),
// 		'new_item'              => __( 'New Location', 'text_domain' ),
// 		'edit_item'             => __( 'Edit Location', 'text_domain' ),
// 		'update_item'           => __( 'Update Location', 'text_domain' ),
// 		'view_item'             => __( 'View Location', 'text_domain' ),
// 		'view_items'            => __( 'View Locations', 'text_domain' ),
// 		'search_items'          => __( 'Search Location', 'text_domain' ),
// 		'not_found'             => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Location Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set location image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove location image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as location image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into location', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this location', 'text_domain' ),
// 		'items_list'            => __( 'Locations list', 'text_domain' ),
// 		'items_list_navigation' => __( 'Locations list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter locations list', 'text_domain' ),
// 	);
// 	$rewrite = array(
// 		'slug'                  => 'locations',
// 		'with_front'            => false,
// 		'pages'                 => true,
// 		'feeds'                 => true,
// 	);
// 	$args = array(
// 		'label'                 => __( 'Location', 'text_domain' ),
// 		'description'           => __( 'Locations CPT', 'text_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-location',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => false,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'rewrite'               => $rewrite,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'locations', $args );

// }
// add_action( 'init', 'register_locations', 0 );



/* ========================================================================================================================

Register Resources CPT

======================================================================================================================== */
// function register_resources() {

// 	$labels = array(
// 		'name'                  => _x( 'Resources', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'Resources', 'text_domain' ),
// 		'name_admin_bar'        => __( 'Resources', 'text_domain' ),
// 		'archives'              => __( 'Resource Archives', 'text_domain' ),
// 		'attributes'            => __( 'Resource Attributes', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent Resource:', 'text_domain' ),
// 		'all_items'             => __( 'All Resources', 'text_domain' ),
// 		'add_new_item'          => __( 'Add New Resource', 'text_domain' ),
// 		'add_new'               => __( 'Add Resource', 'text_domain' ),
// 		'new_item'              => __( 'New Resource', 'text_domain' ),
// 		'edit_item'             => __( 'Edit Resource', 'text_domain' ),
// 		'update_item'           => __( 'Update Resource', 'text_domain' ),
// 		'view_item'             => __( 'View Resource', 'text_domain' ),
// 		'view_items'            => __( 'View Resources', 'text_domain' ),
// 		'search_items'          => __( 'Search Resource', 'text_domain' ),
// 		'not_found'             => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Resource Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set resource image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove resource image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as resource image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into resource', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this resource', 'text_domain' ),
// 		'items_list'            => __( 'Resource list', 'text_domain' ),
// 		'items_list_navigation' => __( 'Resource list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter resources list', 'text_domain' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Resource', 'text_domain' ),
// 		'description'           => __( 'Resources CPT', 'text_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'thumbnail' ),
// 		'taxonomies'            => array( 'resource-categories' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-index-card',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'post',
// 	);
// 	register_post_type( 'resources', $args );

// }
// add_action( 'init', 'register_resources', 0 );


/* ========================================================================================================================

Register Reviews CPT

======================================================================================================================== */
function register_reviews() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonials', 'text_domain' ),
		'archives'              => __( 'Testimonial Archives', 'text_domain' ),
		'attributes'            => __( 'Testimonial Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'text_domain' ),
		'all_items'             => __( 'All Testimonials', 'text_domain' ),
		'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Testimonial', 'text_domain' ),
		'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'           => __( 'Update Testimonial', 'text_domain' ),
		'view_item'             => __( 'View Testimonial', 'text_domain' ),
		'view_items'            => __( 'View Testimonials', 'text_domain' ),
		'search_items'          => __( 'Search Testimonial', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Testimonial Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set Testimonial image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Testimonial image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Testimonial image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'text_domain' ),
		'items_list'            => __( 'Testimonials list', 'text_domain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Testimonials list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'reviews',
		'with_front'            => false,
		'pages'                 => false,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'Testimonials CPT', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-star-filled',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'reviews', $args );

}
add_action( 'init', 'register_reviews', 0 );


/* ========================================================================================================================

Register Meet The Team CPT

======================================================================================================================== */
function register_meet_the_team() {

	$labels = array(
		'name'                  => _x( 'Meet The Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Meet The Team', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Meet The Team', 'text_domain' ),
		'name_admin_bar'        => __( 'Meet The Team', 'text_domain' ),
		'archives'              => __( 'Meet The Team Archives', 'text_domain' ),
		'attributes'            => __( 'Meet The Team Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Meet The Team:', 'text_domain' ),
		'all_items'             => __( 'All Team Members', 'text_domain' ),
		'add_new_item'          => __( 'Add New Team Member', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Team Member', 'text_domain' ),
		'edit_item'             => __( 'Edit Team Member', 'text_domain' ),
		'update_item'           => __( 'Update Team Member', 'text_domain' ),
		'view_item'             => __( 'View Team Member', 'text_domain' ),
		'view_items'            => __( 'View Team Member', 'text_domain' ),
		'search_items'          => __( 'Search Team Member', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Meet The Team Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set Meet The Team image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Team Member image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Team Member image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Team Member', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'text_domain' ),
		'items_list'            => __( 'Team Member list', 'text_domain' ),
		'items_list_navigation' => __( 'Team Member list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Team Member list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'team',
		'with_front'            => false,
		'pages'                 => false,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Meet The Team', 'text_domain' ),
		'description'           => __( 'Meet The Team CPT', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 30,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'register_meet_the_team', 0 );

?>