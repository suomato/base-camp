<?php

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/app/config/autoload.php');

/**
 * Loads the theme's translated strings.
 */
function localize()
{
    load_theme_textdomain('base-camp', get_template_directory() . '/resources/languages');
}

add_action('after_setup_theme', 'localize');

