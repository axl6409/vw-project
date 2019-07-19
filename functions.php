<?php


/**
 *
 Enqueue Scripts Actions
 *
*/

 function vectorweb_scripts () {


 	wp_enqueue_style( 'style-global', get_template_directory_uri() . '/sass/custom/public/global.css',false,'1.1','all');
 	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

 	wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, null, true );
 	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
 }
add_action( 'wp_enqueue_scripts', 'vectorweb_scripts' );

/**
 * Customizer additions.
 */

require_once get_template_directory() . '/customizer.php';




/*** CREATING CUSTOM POST TYPES ***
**********************************/

function services_post_types () {

	// Set UI labels for custom post type

	$labels = array(
		'name'				=>_x( 'Services', 'Post Type General Name', 'vectorweb' ),
		'singular_name' 	=>_x( 'Services', 'Post Type Singular Name', 'vectorweb' ),
		'menu_name'			=>__( 'Services', 'vectorweb' ),
		'parent_item_colon' =>__( 'Parent Service', 'vectorweb' ),
		'all_items'           => __( 'All Services', 'vectorweb' ),
        'view_item'           => __( 'View Service', 'vectorweb' ),
        'add_new_item'        => __( 'Add New Service', 'vectorweb' ),
        'add_new'             => __( 'Add New', 'vectorweb' ),
        'edit_item'           => __( 'Edit Service', 'vectorweb' ),
        'update_item'         => __( 'Update Service', 'vectorweb' ),
        'search_items'        => __( 'Search Service', 'vectorweb' ),
        'not_found'           => __( 'Not Found', 'vectorweb' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'vectorweb' ),
    );
     
	// Set other options for Custom Post Type
	     
    $args = array(
        'label'               => __( 'services', 'vectorweb' ),
        'description'         => __( 'Services of vector web', 'vectorweb' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'domaine' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'service', $args );
 
}
	 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'services_post_types', 0 );





function projects_post_types () {

	// Set UI labels for custom post type

	$labels = array(
		'name'				=>_x( 'Projects', 'Post Type General Name', 'vectorweb' ),
		'singular_name' 	=>_x( 'Projects', 'Post Type Singular Name', 'vectorweb' ),
		'menu_name'			=>__( 'Projects', 'vectorweb' ),
		'parent_item_colon' =>__( 'Parent Project', 'vectorweb' ),
		'all_items'           => __( 'All Projects', 'vectorweb' ),
        'view_item'           => __( 'View Project', 'vectorweb' ),
        'add_new_item'        => __( 'Add New Project', 'vectorweb' ),
        'add_new'             => __( 'Add New', 'vectorweb' ),
        'edit_item'           => __( 'Edit Project', 'vectorweb' ),
        'update_item'         => __( 'Update Project', 'vectorweb' ),
        'search_items'        => __( 'Search Project', 'vectorweb' ),
        'not_found'           => __( 'Not Found', 'vectorweb' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'vectorweb' ),
    );
     
	// Set other options for Custom Post Type
	     
    $args = array(
        'label'               => __( 'project', 'vectorweb' ),
        'description'         => __( 'Projects of vector web', 'vectorweb' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'domaine' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Projects', $args );
 
}
	 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'projects_post_types', 0 );




add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'Projects' ) );
    return $query;
}