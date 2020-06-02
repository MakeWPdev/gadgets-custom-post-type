<?php
/**
 * Plugin Name:       My Gadget Post Type
 * Plugin URI:        https://makewp.dev/generator/custom-post-type
 * Description:       Create my own Gadget Post type with brands and kinds of gadget.
 * Version:           1.0.0
 * Author:            Your Name
 * Author URI:        https://makewp.dev
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gadget-post-type
 * Domain Path:       /languages
 */

 ///makeWP Register Custom Post Type Gadget
function gadgets_custom_post_type() {

	$labels = array(
		'name' => _x( 'Gadgets', 'Post Type General Name', 'gadget-post-type' ),
		'singular_name' => _x( 'Gadget', 'Post Type Singular Name', 'gadget-post-type' ),
		'menu_name' => _x( 'Gadgets', 'Admin Menu text', 'gadget-post-type' ),
		'name_admin_bar' => _x( 'Gadget', 'Add New on Toolbar', 'gadget-post-type' ),
		'archives' => __( 'Gadget Archives', 'gadget-post-type' ),
		'attributes' => __( 'Gadget Attributes', 'gadget-post-type' ),
		'parent_item_colon' => __( 'Parent Gadget:', 'gadget-post-type' ),
		'all_items' => __( 'All Gadgets', 'gadget-post-type' ),
		'add_new_item' => __( 'Add New Gadget', 'gadget-post-type' ),
		'add_new' => __( 'Add New', 'gadget-post-type' ),
		'new_item' => __( 'New Gadget', 'gadget-post-type' ),
		'edit_item' => __( 'Edit Gadget', 'gadget-post-type' ),
		'update_item' => __( 'Update Gadget', 'gadget-post-type' ),
		'view_item' => __( 'View Gadget', 'gadget-post-type' ),
		'view_items' => __( 'View Gadgets', 'gadget-post-type' ),
		'search_items' => __( 'Search Gadget', 'gadget-post-type' ),
		'not_found' => __( 'Not found', 'gadget-post-type' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'gadget-post-type' ),
		'featured_image' => __( 'Featured Image', 'gadget-post-type' ),
		'set_featured_image' => __( 'Set featured image', 'gadget-post-type' ),
		'remove_featured_image' => __( 'Remove featured image', 'gadget-post-type' ),
		'use_featured_image' => __( 'Use as featured image', 'gadget-post-type' ),
		'insert_into_item' => __( 'Insert into Gadget', 'gadget-post-type' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Gadget', 'gadget-post-type' ),
		'items_list' => __( 'Gadgets list', 'gadget-post-type' ),
		'items_list_navigation' => __( 'Gadgets list navigation', 'gadget-post-type' ),
		'filter_items_list' => __( 'Filter Gadgets list', 'gadget-post-type' ),
	);
	$args = array(
		'label' => __( 'Gadget', 'gadget-post-type' ),
		'description' => __( 'Create my own Gadget Post type with brands and kinds of gadget.', 'gadget-post-type' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-awards',
		'supports' => array('title','editor','excerpt','thumbnail','author','comments','trackbacks','custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'gadget', $args );

}
add_action( 'init', 'gadgets_custom_post_type', 0 );


