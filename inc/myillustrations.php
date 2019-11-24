<?php
// Register Custom Post Type
// Custom post type for my photography projects
function cptui_register_my_cpts_illustrations() {

	/**
	 * Post Type: Illustrations.
	 */

	$labels = array(
		"name" => __( "Illustrations", "portfolioredesign" ),
		"singular_name" => __( "Illustration", "portfolioredesign" ),
		"menu_name" => __( "My Illustrations", "portfolioredesign" ),
		"all_items" => __( "All Illustrations", "portfolioredesign" ),
		"add_new" => __( "Add New", "portfolioredesign" ),
		"add_new_item" => __( "Add New Illustration", "portfolioredesign" ),
		"edit_item" => __( "Edit Illustration", "portfolioredesign" ),
		"new_item" => __( "New Illustration", "portfolioredesign" ),
		"view_item" => __( "View Illustration", "portfolioredesign" ),
		"view_items" => __( "View Illustrations", "portfolioredesign" ),
		"search_items" => __( "Search Illustration", "portfolioredesign" ),
		"not_found" => __( "No Illustrations Found", "portfolioredesign" ),
		"not_found_in_trash" => __( "No Illustrations Found In Trash", "portfolioredesign" ),
		"parent_item_colon" => __( "Parent Illustration:", "portfolioredesign" ),
		"featured_image" => __( "Featured image for this illustration", "portfolioredesign" ),
		"set_featured_image" => __( "Set featured image for this illustration", "portfolioredesign" ),
		"remove_featured_image" => __( "Remove featured image for this illustration", "portfolioredesign" ),
		"use_featured_image" => __( "Use as featured image for this illustration", "portfolioredesign" ),
		"archives" => __( "Illustration archives", "portfolioredesign" ),
		"insert_into_item" => __( "Insert into illustration", "portfolioredesign" ),
		"uploaded_to_this_item" => __( "Uploaded to this illustration", "portfolioredesign" ),
		"filter_items_list" => __( "Filter illustrations list", "portfolioredesign" ),
		"items_list_navigation" => __( "Illustration list navigation", "portfolioredesign" ),
		"items_list" => __( "Illustrations list", "portfolioredesign" ),
		"attributes" => __( "Illustrations Attributes", "portfolioredesign" ),
		"name_admin_bar" => __( "Illustration", "portfolioredesign" ),
		"parent_item_colon" => __( "Parent Illustration:", "portfolioredesign" ),
	);

	$args = array(
		"label" => __( "Illustrations", "portfolioredesign" ),
		"labels" => $labels,
		"description" => "For all of my illustration projects",
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
		"rewrite" => array( "slug" => "illustrations", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields", "page-attributes", "post-formats" ),
	);

	register_post_type( "illustrations", $args );
}

add_action( 'init', 'cptui_register_my_cpts_illustrations' );
?>