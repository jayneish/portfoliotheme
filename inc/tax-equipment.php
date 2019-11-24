<?php
// Register Custom Taxonomy
function cptui_register_my_taxes_equipment() {

	/**
	 * Taxonomy: Equipment.
	 */

	$labels = array(
		"name" => __( "Equipment", "portfolioredesign" ),
		"singular_name" => __( "Equipment", "portfolioredesign" ),
		"menu_name" => __( "Equipment", "portfolioredesign" ),
		"all_items" => __( "All Equipment", "portfolioredesign" ),
		"edit_item" => __( "Edit Equipment", "portfolioredesign" ),
		"view_item" => __( "View Equipment", "portfolioredesign" ),
		"update_item" => __( "Update Equipment Name", "portfolioredesign" ),
		"add_new_item" => __( "Add New Equipment", "portfolioredesign" ),
		"new_item_name" => __( "New Equipment Name", "portfolioredesign" ),
		"parent_item" => __( "Parent Equipment", "portfolioredesign" ),
		"parent_item_colon" => __( "Parent Equipment:", "portfolioredesign" ),
		"search_items" => __( "Search Equipment", "portfolioredesign" ),
		"popular_items" => __( "Popular Equipment", "portfolioredesign" ),
		"separate_items_with_commas" => __( "Separate Equipment with commas", "portfolioredesign" ),
		"add_or_remove_items" => __( "Add or remove Equipment", "portfolioredesign" ),
		"choose_from_most_used" => __( "Choose from the most used Equipment", "portfolioredesign" ),
		"not_found" => __( "No Equipment found", "portfolioredesign" ),
		"no_terms" => __( "No Equipment", "portfolioredesign" ),
		"items_list_navigation" => __( "Equipment list navigation", "portfolioredesign" ),
		"items_list" => __( "Equipment list", "portfolioredesign" ),
	);

	$args = array(
		"label" => __( "Equipment", "portfolioredesign" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'equipment', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "equipment",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "equipment", array( "photography", "illustrations", "webdesign" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_equipment' );

?>