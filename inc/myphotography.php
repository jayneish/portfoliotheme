<?php
// Register Custom Post Type
// Custom post type for my illustration projects
function cptui_register_my_cpts_photography() {

	/**
	 * Post Type: Photography.
	 */

	$labels = array(
		"name" => __( "Photography", "portfolioredesign" ),
		"singular_name" => __( "Photograph", "portfolioredesign" ),
		"menu_name" => __( "My Photography", "portfolioredesign" ),
		"all_items" => __( "All Photography", "portfolioredesign" ),
		"add_new" => __( "Add New", "portfolioredesign" ),
		"add_new_item" => __( "Add New Photograph", "portfolioredesign" ),
		"edit_item" => __( "Edit Photograph", "portfolioredesign" ),
		"new_item" => __( "New Photograph", "portfolioredesign" ),
		"view_item" => __( "View Photograph", "portfolioredesign" ),
		"view_items" => __( "View Photography", "portfolioredesign" ),
		"search_items" => __( "Search Photograph", "portfolioredesign" ),
		"not_found" => __( "No Photography found", "portfolioredesign" ),
		"not_found_in_trash" => __( "No Photography found in trash", "portfolioredesign" ),
		"parent_item_colon" => __( "Parent Photograph:", "portfolioredesign" ),
		"featured_image" => __( "Featured image for this photograph", "portfolioredesign" ),
		"set_featured_image" => __( "Set featured image for this photograph", "portfolioredesign" ),
		"remove_featured_image" => __( "Remove featured image for this photograph", "portfolioredesign" ),
		"use_featured_image" => __( "Use as featured image for this photograph", "portfolioredesign" ),
		"archives" => __( "Photography archives", "portfolioredesign" ),
		"insert_into_item" => __( "Insert into photograph", "portfolioredesign" ),
		"uploaded_to_this_item" => __( "Uploaded to this photograph", "portfolioredesign" ),
		"filter_items_list" => __( "Filter photography list", "portfolioredesign" ),
		"items_list_navigation" => __( "Photography list navigation", "portfolioredesign" ),
		"items_list" => __( "Photography list", "portfolioredesign" ),
		"attributes" => __( "Photography Attributes", "portfolioredesign" ),
		"name_admin_bar" => __( "Photograph", "portfolioredesign" ),
		"parent_item_colon" => __( "Parent Photograph:", "portfolioredesign" ),
	);

	$args = array(
		"label" => __( "Photography", "portfolioredesign" ),
		"labels" => $labels,
		"description" => "All my photography projects",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "photography", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields", "page-attributes", "post-formats" ),
	);

	register_post_type( "photography", $args );
}

add_action( 'init', 'cptui_register_my_cpts_photography' );
?>