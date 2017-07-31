<?php

/**
 * Registers a custom Navigation Menu in the custom menu editor
 */
function register_main_menu()
{
    register_nav_menu('main_menu', __('Main menu', 'base-camp'));
}

// Register main menu
add_action('after_setup_theme', 'register_main_menu');
