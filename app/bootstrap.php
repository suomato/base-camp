<?php

use Basecamp\Utils\Session;

// Load all composer packages
require_once __DIR__ . '/../vendor/autoload.php';

// Init Timber
$timber = new \Timber\Timber();

// Init Dotenv if .env file is present
if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
    $dotenv->load();
}

// Load WordPress config files
require_once __DIR__ . '/../app/config/autoload.php';

// Init Sessions
Session::init();

/**
 * Loads the theme's translated strings.
 */
function localize()
{
    load_theme_textdomain('base-camp', get_template_directory() . '/resources/languages');
}

add_action('after_setup_theme', 'localize');
