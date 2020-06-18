<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Register post types
 * Hooked via init
 * @since   1.0.0
 * @return  void
 */
function t4teu_register_post_types() {

    // Register Success Stories
    $labels = array(
        'name'                  => _x( 'Success Stories', 'Post type general name', 't4teu' ),
        'singular_name'         => _x( 'Success Story', 'Post type singular name', 't4teu' ),
        'menu_name'             => _x( 'Success Stories', 'Admin Menu text', 't4teu' ),
        'name_admin_bar'        => _x( 'Success Story', 'Add New on Toolbar', 't4teu' ),
        'add_new'               => __( 'Add New', 't4teu' ),
        'add_new_item'          => __( 'Add New Success Story', 't4teu' ),
        'new_item'              => __( 'New Success Story', 't4teu' ),
        'edit_item'             => __( 'Edit Success Story', 't4teu' ),
        'view_item'             => __( 'View Success Story', 't4teu' ),
        'all_items'             => __( 'All Success Stories', 't4teu' ),
        'search_items'          => __( 'Search Success Stories', 't4teu' ),
        'parent_item_colon'     => __( 'Parent Success Stories:', 't4teu' ),
        'not_found'             => __( 'No success stories found.', 't4teu' ),
        'not_found_in_trash'    => __( 'No success stories found in Trash.', 't4teu' ),
        'featured_image'        => _x( 'Success Story Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 't4teu' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 't4teu' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 't4teu' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 't4teu' ),
        'archives'              => _x( 'Success Story archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 't4teu' ),
        'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 't4teu' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 't4teu' ),
        'filter_items_list'     => _x( 'Filter success stories list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 't4teu' ),
        'items_list_navigation' => _x( 'Success Stories list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 't4teu' ),
        'items_list'            => _x( 'Success Stories list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 't4teu' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'success-story' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'success-stories', $args );


}

add_action( 'init', 't4teu_register_post_types');

/**
 * Register taxonomies
 * Hooked via action init
 * @since   1.0.0
 * @return  void
 */
function t4teu_register_taxonomies() {

    // Success Stories Label

    $labels = array(
		'name'              => _x( 'Labels', 'taxonomy general name', 't4teu' ),
		'singular_name'     => _x( 'Label', 'taxonomy singular name', 't4teu' ),
		'search_items'      => __( 'Search Labels', 't4teu' ),
		'all_items'         => __( 'All Labels', 't4teu' ),
		'parent_item'       => __( 'Parent Label', 't4teu' ),
		'parent_item_colon' => __( 'Parent Label:', 't4teu' ),
		'edit_item'         => __( 'Edit Label', 't4teu' ),
		'update_item'       => __( 'Update Label', 't4teu' ),
		'add_new_item'      => __( 'Add New Label', 't4teu' ),
		'new_item_name'     => __( 'New Label Name', 't4teu' ),
		'menu_name'         => __( 'Label', 't4teu' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'success-label' ),
	);

	register_taxonomy( 'success-label', array( 'success-stories' ), $args );

    // Success Stories Label

    $labels = array(
		'name'              => _x( 'Tags', 'taxonomy general name', 't4teu' ),
		'singular_name'     => _x( 'Tag', 'taxonomy singular name', 't4teu' ),
		'search_items'      => __( 'Search Tags', 't4teu' ),
		'all_items'         => __( 'All Tags', 't4teu' ),
		'parent_item'       => __( 'Parent Tag', 't4teu' ),
		'parent_item_colon' => __( 'Parent Tag:', 't4teu' ),
		'edit_item'         => __( 'Edit Tag', 't4teu' ),
		'update_item'       => __( 'Update Tag', 't4teu' ),
		'add_new_item'      => __( 'Add New Tag', 't4teu' ),
		'new_item_name'     => __( 'New Tag Name', 't4teu' ),
		'menu_name'         => __( 'Tag', 't4teu' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'success-tag' ),
	);

	register_taxonomy( 'success-tag', array( 'success-stories' ), $args );

    // Success Stories Categories

    $labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 't4teu' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 't4teu' ),
		'search_items'      => __( 'Search Categories', 't4teu' ),
		'all_items'         => __( 'All Categories', 't4teu' ),
		'parent_item'       => __( 'Parent Category', 't4teu' ),
		'parent_item_colon' => __( 'Parent Category:', 't4teu' ),
		'edit_item'         => __( 'Edit Category', 't4teu' ),
		'update_item'       => __( 'Update Category', 't4teu' ),
		'add_new_item'      => __( 'Add New Category', 't4teu' ),
		'new_item_name'     => __( 'New Category Name', 't4teu' ),
		'menu_name'         => __( 'Category', 't4teu' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'success-category' ),
	);

	register_taxonomy( 'success-category', array( 'success-stories' ), $args );
}

add_action( 'init', 't4teu_register_taxonomies');

/**
 * Register carbon field for success-tag
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_success_tags_setting() {

    Container::make('term_meta', __('Properties', 't4teu'))
        ->where( 'term_taxonomy', '=', 'success-tag')
        ->add_fields(array(
            Field::make('image', 'logo', __('Logo', 't4teu'))
        ));
}

add_action( 'carbon_fields_register_fields', 't4t_crb_success_tags_setting', 10 );
