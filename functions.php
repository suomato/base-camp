<?php

require_once(__DIR__ . '/vendor/autoload.php');

if ( ! class_exists('Timber')) {
    add_action('admin_notices', function () {
        echo '<div class="error">
                  <p>Timber not activated. Make sure you activate the plugin in  
                      <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a>
                  </p>
              </div>';
    });

    add_filter('template_include', function ($template) {
        return get_stylesheet_directory() . '/no-timber.html';
    });

    return 0;
}

Timber::$dirname = ['resources/views'];

function dd($data)
{
    die(dump($data));
}

function assets($key)
{
    $manifest_string = file_get_contents(get_stylesheet_directory_uri() . "/static/manifest.json");
    $manifest_array  = json_decode($manifest_string, true);

    return get_stylesheet_directory_uri() . "/static/" . $manifest_array[$key];
}


