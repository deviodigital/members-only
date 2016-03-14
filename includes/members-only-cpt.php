<?php

/**
 * The file that defines the core plugin post type generation
 *
 * @link       http://www.deviodigital.com
 * @since      1.0.0
 *
 * @package    Members_Only
 * @subpackage Members_Only/includes
 */


if ( ! function_exists('members_only') ) {

// Register Custom Post Type
function members_only() {

	$labels = array(
		'name'                  => _x( 'Members Only', 'Post Type General Name', 'members-only' ),
		'singular_name'         => _x( 'Members Only', 'Post Type Singular Name', 'members-only' ),
		'menu_name'             => __( 'Members Only', 'members-only' ),
		'name_admin_bar'        => __( 'Members Only', 'members-only' ),
		'archives'              => __( 'Members Only Archives', 'members-only' ),
		'parent_item_colon'     => __( 'Members Only Content:', 'members-only' ),
		'all_items'             => __( 'All Content', 'members-only' ),
		'add_new_item'          => __( 'Add New Content', 'members-only' ),
		'add_new'               => __( 'Add New', 'members-only' ),
		'new_item'              => __( 'New Content', 'members-only' ),
		'edit_item'             => __( 'Edit Content', 'members-only' ),
		'update_item'           => __( 'Update Content', 'members-only' ),
		'view_item'             => __( 'View Content', 'members-only' ),
		'search_items'          => __( 'Search Content', 'members-only' ),
		'not_found'             => __( 'Not found', 'members-only' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'members-only' ),
		'featured_image'        => __( 'Featured Image', 'members-only' ),
		'set_featured_image'    => __( 'Set featured image', 'members-only' ),
		'remove_featured_image' => __( 'Remove featured image', 'members-only' ),
		'use_featured_image'    => __( 'Use as featured image', 'members-only' ),
		'insert_into_item'      => __( 'Insert into item', 'members-only' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'members-only' ),
		'items_list'            => __( 'Content list', 'members-only' ),
		'items_list_navigation' => __( 'Content list navigation', 'members-only' ),
		'filter_items_list'     => __( 'Filter content list', 'members-only' ),
	);
	$args = array(
		'label'                 => __( 'Members Only', 'members-only' ),
		'description'           => __( 'Separate your members content from the rest of your website', 'members-only' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-lock',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'members_only', $args );

}
add_action( 'init', 'members_only', 0 );

}
