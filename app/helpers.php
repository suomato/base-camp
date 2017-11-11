<?php

/**
 * Debug helper
 *
 * Dumps the variable and ends the execution of the app
 *
 * @since 1.0.0
 *
 * @param $data
 */
function dd($data)
{
    die(dump($data));
}

/**
 * Return url of compiled style or script file
 *
 * @since 1.0.0
 *
 * @param $key
 *
 * @return string
 */
function assets($key)
{
    $manifest_string = file_get_contents(get_template_directory() . '/static/manifest.json');
    $manifest_array  = json_decode($manifest_string, true);

    return get_stylesheet_directory_uri() . '/static/' . $manifest_array[$key];
}

/**
 * Returns the fully qualified path to the images directory.
 *
 * @since 1.1.0
 *
 * @param null $file
 *
 * @return string
 */
function images_path($file = null)
{
    return get_stylesheet_directory_uri() . '/resources/assets/images/' . $file;
}

/**
 * Initialize maintenance mode
 *
 * @since 1.4.0
 *
 * @param $maintenance
 * @param $full
 * @param $template
 */
function base_camp_maintenance($maintenance, $full, $template)
{
    $base_camp_maintenance = function () use ($template) {
        status_header(503);
        die(\Timber::compile($template));
    };

    if ($maintenance) {
        if ($full) {
            add_action('init', $base_camp_maintenance);
        }
        if ( ! current_user_can('administrator')) {
            add_filter('template_include', $base_camp_maintenance);
        }
    }
}
