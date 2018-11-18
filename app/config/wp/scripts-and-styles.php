<?php

/**
 * Register scripts and styles and enqueue them
 */
function base_camp_scripts_and_styles()
{
    //
    $suffix = bc_env('MODE', 'production') === 'development' ? '?' . bc_random_string(16) : '';

    // Register styles
    wp_register_style('base-camp-styles', assets('styles.css') . $suffix, [], '', 'all');

    // Vue styles
    wp_register_style('base-camp-styles-vue', assets('scripts.css') . $suffix, [], '', 'all');

    // Register scripts
    wp_register_script('base-camp-vendor', assets('vendor.js'), [], '', true);
    wp_register_script('base-camp-scripts', assets('scripts.js') . $suffix, ['base-camp-vendor'], '', true);

    // Enqueue scripts and styles
    wp_enqueue_script('base-camp-scripts');
    wp_enqueue_script('base-camp-vendor');
    wp_enqueue_style('base-camp-styles');
    wp_enqueue_style('base-camp-styles-vue');

    // comment reply script for threaded comments
    if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'base_camp_scripts_and_styles', 999);

/**
 * Register Login Page scripts and styles and enqueue them
 */
function base_camp_login_scripts_and_styles()
{
    // Register styles
    wp_register_style('base-camp-login-styles', assets('login.css'), [], '', 'all');

    // Enqueue scripts and styles
    wp_enqueue_style('base-camp-login-styles');
}

add_action('login_enqueue_scripts', 'base_camp_login_scripts_and_styles', 999);

/**
 * Register Admin Page scripts and styles and enqueue them
 */
function base_camp_admin_scripts_and_styles()
{
    // Register styles
    wp_register_style('base-camp-admin-styles', assets('admin.css'), [], '', 'all');

    // Enqueue scripts and styles
    wp_enqueue_style('base-camp-admin-styles');
}

add_action('admin_enqueue_scripts', 'base_camp_admin_scripts_and_styles', 999);
