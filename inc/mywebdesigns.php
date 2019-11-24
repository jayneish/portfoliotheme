<?php 
// Register Custom Post Type
// Custom post type for my website design projects
function cptui_register_my_cpts_webdesign() {

	/**
	 * Post Type: Websites.
	 */

	$labels = array(
		"name" => __( "Websites", "portfolioredesign" ),
		"singular_name" => __( "Website", "portfolioredesign" ),
		"menu_name" => __( "My Web Design", "portfolioredesign" ),
		"all_items" => __( "All Websites", "portfolioredesign" ),
		"add_new" => __( "Add New", "portfolioredesign" ),
		"add_new_item" => __( "Add New Website", "portfolioredesign" ),
		"edit_item" => __( "Edit Website", "portfolioredesign" ),
		"new_item" => __( "New Website", "portfolioredesign" ),
		"view_item" => __( "View Website", "portfolioredesign" ),
		"view_items" => __( "View Websites", "portfolioredesign" ),
		"search_items" => __( "Search Websites", "portfolioredesign" ),
		"not_found" => __( "No Websites found", "portfolioredesign" ),
		"not_found_in_trash" => __( "No Websites found in trash", "portfolioredesign" ),
		"parent_item_colon" => __( "Parent Website:", "portfolioredesign" ),
		"featured_image" => __( "Featured image for this website", "portfolioredesign" ),
		"set_featured_image" => __( "Set featured image for this website", "portfolioredesign" ),
		"remove_featured_image" => __( "Remove featured image for this website", "portfolioredesign" ),
		"use_featured_image" => __( "Use as featured image for this website", "portfolioredesign" ),
		"archives" => __( "Website archives", "portfolioredesign" ),
		"insert_into_item" => __( "Insert into website", "portfolioredesign" ),
		"uploaded_to_this_item" => __( "Uploaded to this website", "portfolioredesign" ),
		"filter_items_list" => __( "Filter websites list", "portfolioredesign" ),
		"items_list_navigation" => __( "Websites list navigation", "portfolioredesign" ),
		"items_list" => __( "Websites list", "portfolioredesign" ),
		"attributes" => __( "Websites Attributes", "portfolioredesign" ),
		"name_admin_bar" => __( "Website", "portfolioredesign" ),
		"parent_item_colon" => __( "Parent Website:", "portfolioredesign" ),
	);

	$args = array(
		"label" => __( "Websites", "portfolioredesign" ),
		"labels" => $labels,
		"description" => "For all of my web design projects",
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
		"rewrite" => array( "slug" => "webdesign", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields", "page-attributes", "post-formats" ),
	);

	register_post_type( "webdesign", $args );
}

add_action( 'init', 'cptui_register_my_cpts_webdesign' );
?>