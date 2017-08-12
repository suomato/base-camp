<?php

function custom_post_type_movie()
{
// Set UI labels for Custom Post Type
    $labels = [
        'name'               => _x('Movies', 'Post Type General Name', 'base-camp'),
        'singular_name'      => _x('Movie', 'Post Type Singular Name', 'base-camp'),
        'menu_name'          => __('Movies', 'base-camp'),
        'parent_item_colon'  => __('Parent Movie', 'base-camp'),
        'all_items'          => __('All Movies', 'base-camp'),
        'view_item'          => __('View Movie', 'base-camp'),
        'add_new_item'       => __('Add New Movie', 'base-camp'),
        'add_new'            => __('Add New', 'base-camp'),
        'edit_item'          => __('Edit Movie', 'base-camp'),
        'update_item'        => __('Update Movie', 'base-camp'),
        'search_items'       => __('Search Movie', 'base-camp'),
        'not_found'          => __('Not Found', 'base-camp'),
        'not_found_in_trash' => __('Not found in Trash', 'base-camp'),
    ];

// Set other options for Custom Post Type

    $args = [
        'label'               => __('movies', 'base-camp'),
        'description'         => __('Movie news and reviews', 'base-camp'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => [
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields',
        ],
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => ['genres'],
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    ];

    // Registering your Custom Post Type
    register_post_type('movies', $args);

}

add_action('init', 'custom_post_type_movie', 0);
