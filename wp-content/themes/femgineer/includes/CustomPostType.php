<?php
/*----- Custom Team Posttype ------*/
function create_post_type($posttype_name,$icon,$label)
{
	$labels = array(
		'name' => _x($labels, 'post type general name'),
		'singular_name' => _x( $labels, 'post type singular name'),
		'add_new' => _x('Add New', $labels),
		'add_new_item' => __('Add New '.$labels),
		'edit_item' => __('Edit '.$labels),
		'new_item' => __('New '.$labels),
		'all_items' => __('All '.$labels),
		'view_item' => __('View '.$labels),
		'search_items' => __('Search '.$labels),
		'not_found' => __('No '.$labels.' found'),
		'not_found_in_trash' => __('No '.$labels.' found in Trash'),
		'parent_item_colon' => '',
		'category' => $posttype_name.'taxo',
		'menu_name' => $label
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'menu_icon' => $icon,
		'show_ui' => true,
	    'show_in_menu' => true,
	    'show_in_nav_menus' => true,
	    'show_in_admin_bar' => true,
		'can_export' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','comments','excerpt')
	);
	
register_post_type($posttype_name,$args);	
}
function create_custom_taxonomy($posttype_name,$label){
	// Team taxonamy	
	$label_cat = array(
		'name' => _x($posttype_name.' Taxonamy', 'post type general name'),
		'singular_name' => _x($posttype_name.' Taxonamy', 'post type singular name'),
		'add_new' => _x('Add New', $posttype_name.' Taxonamy'),
		'add_new_item' => __('Add New '.$posttype_name.' Taxonamy'),
		'edit_item' => __('Edit '.$posttype_name.' Taxonamy'),
		'new_item' => __('New '.$posttype_name.' Taxonamy'),
		'all_items' => __('All '.$posttype_name.' Taxonamy'),
		'view_item' => __('View '.$posttype_name.' Taxonamy'),
		'search_items' => __('Search '.$posttype_name.' Taxonamy'),
		'not_found' => __('No '.$posttype_name.' Taxonamy found'),
		'not_found_in_trash' => __('No '.$posttype_name.' Taxonamy found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => $label
	);

	register_taxonomy($posttype_name.'taxo',array($posttype_name), array(
		'hierarchical' => true,
		'labels' => $label_cat,
		/*-- showing column --*/
		'show_ui' => true,
		'show_admin_column' => true,
		/*-- showing column --*/
		'query_var' => true,
		'rewrite' => array( 'slug' => $posttype_name.'taxo' )
	));		
}
?>