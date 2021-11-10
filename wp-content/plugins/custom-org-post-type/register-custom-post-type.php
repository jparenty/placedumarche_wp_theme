<?php
/*
Plugin Name: Register Custom Organization Post Types
Description: Plugin to register organization custom post type.
Version: 1.0
Author: Jean Parenty
Textdomain: pdm
License: GPLv2
*/

function pdm_register_post_type() {
    
    $labels = array(
        'name' => __( 'Organizations', 'pdm'),
        'singular_name' => __( 'Organization', 'pdm' ),
        'add_new' => __( 'New Organization', 'pdm' ),
        'add_new_item' => __( 'Add New Organization', 'pdm' ),
        'edit_item' => __( 'Edit Organization', 'pdm' ),
        'new_item' => __( 'New Organization', 'pdm' ),
        'view_item' => __( 'View Organizations', 'pdm' ),
        'search_items' => __( 'Search Organizations','pdm' ),
        'not_found' =>  __( 'No Organizations Found', 'pdm' ),
        'not_found_in_trash' => __( 'No Organizations found in Trash', 'pdm' ),
    );
    
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'page-attributes',
        ),
        'rewrite'   => array( 'slug' => 'organization' ),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-groups',
    );
    
    register_post_type( 'pdm_organization', $args );
    
}
add_action( 'init', 'pdm_register_post_type' );


function create_neighborhood_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Neighborhoods', 'neighborhoods' ),
    'singular_name' => _x( 'Neighborhood', 'neighborhood' ),
    'search_items' =>  __( 'Search Neighborhoods' ),
    'popular_items' => __( 'Popular Neighborhoods' ),
    'all_items' => __( 'All Neighborhoods' ),
    'parent_item' => __( 'Parent Org Neighborhood (ignore)' ),
    'parent_item_colon' => __( 'Parent Org Neighborhood:' ),
    'edit_item' => __( 'Edit Neighborhood' ), 
    'update_item' => __( 'Update Neighborhood' ),
    'add_new_item' => __( 'Add New Neighborhood' ),
    'new_item_name' => __( 'New Neighborhood Name' ),
    'separate_items_with_commas' => __( 'Separate neighborhoods with commas' ),
    'add_or_remove_items' => __( 'Add or remove neighborhoods' ),
    'choose_from_most_used' => __( 'Choose from the most used neighborhoods' ),
    'menu_name' => __( 'Neighborhoods' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('neighborhoods','pdm_organization',array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'neighborhood' ),
  ));
}

add_action( 'init', 'create_neighborhood_taxonomy', 0 );


// function create_orgsize_taxonomy() {
 
// // Add new taxonomy, make it hierarchical like categories
// //first do the translations part for GUI
 
//   $labels = array(
//     'name' => _x( 'Org Sizes', 'org service sizes' ),
//     'singular_name' => _x( 'Org Size', 'org service size' ),
//     'search_items' =>  __( 'Search Org Sizes' ),
//     'all_items' => __( 'All Org Sizes' ),
//     'parent_item' => __( 'Parent Org Size (ignore)' ),
//     'parent_item_colon' => __( 'Parent Org Size:' ),
//     'edit_item' => __( 'Edit Org Size' ), 
//     'update_item' => __( 'Update Org Size' ),
//     'add_new_item' => __( 'Add New Org Size' ),
//     'new_item_name' => __( 'New Org Size Name' ),
//     'menu_name' => __( 'Org Sizes' ),
//   );    
 
// // Now register the taxonomy
//   register_taxonomy('org-size',array('pdm_organization'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_in_rest' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'org-size' ),
//   ));
 
// }


// add_action( 'init', 'create_orgsize_taxonomy', 0 );

function create_orgservicesize_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Org Service Sizes', 'org service sizes' ),
    'singular_name' => _x( 'Org Service Size', 'org service size' ),
    'search_items' =>  __( 'Search Org Service Sizes' ),
    'all_items' => __( 'All Org Service Sizes' ),
    'parent_item' => __( 'Parent Org Service Size (ignore)' ),
    'parent_item_colon' => __( 'Parent Org Service Size:' ),
    'edit_item' => __( 'Edit Org Service Size' ), 
    'update_item' => __( 'Update Org Service Size' ),
    'add_new_item' => __( 'Add New Org Service Size' ),
    'new_item_name' => __( 'New Org Service Size Name' ),
    'menu_name' => __( 'Service Sizes' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('org-service-size',array('pdm_organization'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'org-size' ),
  ));
 
}

add_action( 'init', 'create_orgservicesize_taxonomy', 0 );

function create_target_demographic_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Org Target Demographics', 'org target demographics' ),
    'singular_name' => _x( 'Org Target Demographic', 'org target demographic' ),
    'search_items' =>  __( 'Search Org Target Demographics' ),
    'all_items' => __( 'All Org Target Demographics' ),
    'parent_item' => __( 'Parent Org Target Demographic (ignore)' ),
    'parent_item_colon' => __( 'Parent Org Target Demographic:' ),
    'edit_item' => __( 'Edit Org Target Demographic' ), 
    'update_item' => __( 'Update Org Target Demographic' ),
    'add_new_item' => __( 'Add New Org Target Demographic' ),
    'new_item_name' => __( 'New Org Target Demographic' ),
    'menu_name' => __( 'Target Demographic' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('org-target-demographic',array('pdm_organization'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'org-target-demographic' ),
  ));
 
}


add_action( 'init', 'create_target_demographic_taxonomy', 0 );


function create_services_provided_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Org Services Provided', 'org service provided' ),
    'singular_name' => _x( 'Org Service Provided', 'org service provided' ),
    'search_items' =>  __( 'Search Org Services Provided' ),
    'all_items' => __( 'All Org Services Provided' ),
    'parent_item' => __( 'Parent Org Service Provided (ignore)' ),
    'parent_item_colon' => __( 'Parent Org Service Provided:' ),
    'edit_item' => __( 'Edit Org Service Provided' ), 
    'update_item' => __( 'Update Org Service Provided' ),
    'add_new_item' => __( 'Add New Org Service Provided' ),
    'new_item_name' => __( 'New Org Service Provided' ),
    'menu_name' => __( 'Services Provided' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('org-services-provided',array('pdm_organization'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'org-services-provided' ),
  ));
 
}


add_action( 'init', 'create_services_provided_taxonomy', 0 );


function create_available_role_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Org Available Roles', 'org available roles' ),
    'singular_name' => _x( 'Org Available Role', 'org available role' ),
    'search_items' =>  __( 'Search Org Available Roles' ),
    'all_items' => __( 'All Org Available Roles' ),
    'parent_item' => __( 'Parent Org Available Role (ignore)' ),
    'parent_item_colon' => __( 'Parent Org Available Role:' ),
    'edit_item' => __( 'Edit Org Available Role' ), 
    'update_item' => __( 'Update Org Available Role' ),
    'add_new_item' => __( 'Add New Org Available Role' ),
    'new_item_name' => __( 'New Org Available Role' ),
    'menu_name' => __( 'Available Roles' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('org-available-roles',array('pdm_organization'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'org-available-roles' ),
  ));
 
}


add_action( 'init', 'create_available_role_taxonomy', 0 );