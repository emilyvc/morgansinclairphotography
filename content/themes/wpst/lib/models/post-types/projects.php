<?php

/**
 *******************************************************************************
 * Public Projects
 *******************************************************************************
 *
 * This is an Projects post type which you can use as a baseline for your
 * project's needs. The idea of a `public` post type is one which a user
 * would navigate to through permalinks, rather than something you'd just
 * integrate onto your website via queries.
 *
 */



function msp_post_type_projects() {
    register_post_type(
        'projects',
        array(
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'page',
            'hierarchical' => false,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-camera',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'projects', 'with_front' => false ),
            'supports' => array( 'title', 'page-attributes', 'revisions' ),
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Project' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Project' ),
                'new_item' => __( 'New Project' ),
                'view' => __( 'View' ),
                'view_item' => __( 'View Project' ),
                'search_items' => __( 'Search Projects' ),
                'not_found' => __( 'No Projects found' ),
                'not_found_in_trash' => __( 'No Projects found in Trash' )
            )
        )
    );
    register_taxonomy(
        'project_type',
        array( 'projects' ),
        array(
            'labels' => array(
                'name' => __( 'Project Types' ),
                'singular_name' => __( 'Project Type' ),
                'search_items' => __( 'Search Project Types' ),
                'popular_items' => __( 'Popular Project Types' ),
                'all_items' => __( 'All Project Types' ),
                'parent_item' => __( 'Parent Project Type' ),
                'parent_item_colon' => __( 'Parent Project Type:' ),
                'edit_item' => __( 'Edit Project Type' ),
                'update_item' => __( 'Update Project Type' ),
                'add_new_item' => __( 'Add New Project Type' ),
                'new_item_name' => __( 'New Project Type' ),
            ),
            'public' => true,
            'show_in_nav_menus' => true,
            'show_ui' => true,
            'hierarchical' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'project_type', 'with_front' => false ),
        )
    );

}

add_action('init', 'msp_post_type_projects');
