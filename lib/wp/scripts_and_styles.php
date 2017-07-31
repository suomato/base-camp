<?php

function base_camp_scripts_and_styles()
{
    // Register styles
    wp_register_style('base-camp-styles', assets('app.css'), [], '', 'all');

    // Register scripts
    wp_register_script('base-camp-scripts', assets('app.js'), [], '', true);

    // Enqueue scripts and styles
    wp_enqueue_script('base-camp-scripts');
    wp_enqueue_style('base-camp-styles');
}

// Enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'base_camp_scripts_and_styles', 999);
