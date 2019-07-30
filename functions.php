<?php


/**
 *
 Enqueue Scripts Actions
 *
*/

 function vectorweb_scripts () {


 	// Styles
 	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
 	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style( 'style-global', get_template_directory_uri() . '/sass/custom/global.css',false,'1.1','all');
 	// Scripts
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://code.jquery.com/jquery-3.4.1.js"), false, '3.4.1');
 	wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, null, true );
 	wp_enqueue_script('scrollie', get_template_directory_uri() . '/js/lib/jquery.scrollie.min.js', array( 'jquery' ) );
    wp_enqueue_script('anime-js', get_template_directory_uri() . '/assets/plugins/anime-master/lib/anime.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/lib/modernizr.js', array( 'jquery' ), 1.1, true);
 	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), 1.1, true);

 }
add_action( 'wp_enqueue_scripts', 'vectorweb_scripts' );

/**
 * Customizer additions.
 */

require_once get_template_directory() . '/customizer.php';




/*** CREATING CUSTOM POST TYPES ***
**********************************/



function intro_post_types () {

    // Set UI labels for custom post type

    $labels = array(
        'name'              =>_x( 'Intro', 'Post Type General Name', 'vectorweb' ),
        'singular_name'     =>_x( 'Intro', 'Post Type Singular Name', 'vectorweb' ),
        'menu_name'         =>__( 'Intro', 'vectorweb' ),
        'parent_item_colon' =>__( 'Parent Intro', 'vectorweb' ),
        'all_items'           => __( 'All Intro', 'vectorweb' ),
        'view_item'           => __( 'View Intro', 'vectorweb' ),
        'add_new_item'        => __( 'Add New Intro', 'vectorweb' ),
        'add_new'             => __( 'Add New', 'vectorweb' ),
        'edit_item'           => __( 'Edit Intro', 'vectorweb' ),
        'update_item'         => __( 'Update Intro', 'vectorweb' ),
        'search_items'        => __( 'Search Intro', 'vectorweb' ),
        'not_found'           => __( 'Not Found', 'vectorweb' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'vectorweb' ),
    );
     
    // Set other options for Custom Post Type
         
    $args = array(
        'label'               => __( 'project', 'vectorweb' ),
        'description'         => __( 'Intro of vector web', 'vectorweb' ),
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
    register_post_type( 'Intro', $args );
 
}
     
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'Intro_post_types', 0 );



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




function theme_custom_logo() {
    
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-width' => true,
        'flex-width' => true,
        'header-text'=> array( 'site-title', 'site-description' ),
    ) );

}
add_action( 'after_setup_theme', 'theme_custom_logo' );





/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 604, 270 );
add_image_size( 'nisarg-full-width', 1038, 576, true );


/**
 *  Display featured image of the post
 */
function vw_featured_image_disaplay() {
    if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) {  // check if the post has a Post Thumbnail assigned to it. ?>
        <div class="featured-image">
            <?php if( !is_single() ) { ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark">
            <?php } 
            the_post_thumbnail('nisarg-full-width'); ?>
            <?php if( !is_single() ) { ?>
            </a> <?php } ?>        
        </div>
        <?php 
    } 
}


if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }




 /**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_customize_register( $wp_customize ) {

    //Add section for post option
    $wp_customize->add_section(
        'post_options',
        array(
            'title'     => __('Post Options','nisarg'),
            'priority'  => 201,
        )
    );

    $wp_customize->add_setting('post_display_option', array(
        'default'        => 'post-excerpt',
        'sanitize_callback' => 'nisarg_sanitize_post_display_option',
        'transport'         => 'refresh'
    ));
 
    $wp_customize->add_control('post_display_types', array(
        'label'      => __('How would you like to dipaly a post on post listing page?', 'nisarg'),
        'section'    => 'post_options',
        'settings'   => 'post_display_option',
        'type'       => 'radio',
        'choices'    => array(
            'post-excerpt' => __('Post excerpt','nisarg'),
            'full-post' => __('Full post','nisarg'),            
        ),
    ));
    
}
add_action( 'customize_register', 'vw_customize_register' );



if ( ! function_exists( 'nisarg_sanitize_post_display_option' ) ) :
/**
 * Sanitization callback for post display option.
 *
 *
 * @param string $value post display style.
 * @return string post display style.
 */

function nisarg_sanitize_post_display_option( $value ) {
    if ( ! in_array( $value, array( 'post-excerpt', 'full-post' ) ) )
        $value = 'post-excerpt';
    
    return $value;
}
endif; // nisarg_sanitize_post_display_option
