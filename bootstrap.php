<?php

// Load all composer packages
require_once(__DIR__ . '/vendor/autoload.php');

// Init Dotenv
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Load WordPress config files
require_once(__DIR__ . '/app/config/autoload.php');

/**
 * Loads the theme's translated strings.
 */
function localize()
{
    load_theme_textdomain('base-camp', get_template_directory() . '/resources/languages');
}

add_action('after_setup_theme', 'localize');
