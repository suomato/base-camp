<?php

/**
 * Debug helper
 *
 * Dumps the variable and ends the execution of the app
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
 * @param $key
 *
 * @return string
 */
function assets($key)
{
    $manifest_string = file_get_contents(get_stylesheet_directory_uri() . "/static/manifest.json");
    $manifest_array  = json_decode($manifest_string, true);

    return get_stylesheet_directory_uri() . "/static/" . $manifest_array[$key];
}

/**
 * Require all files in given path
 *
 * Executes `require_once` on each file in given path.
 * Path is relative to the theme root.
 *
 * @param $path
 */
function require_once_dir($path)
{
    $full_path = __DIR__ . "/../$path";

    foreach (glob("$full_path/*.php") as $filename) {
        require_once("$full_path/" . basename($filename));
    }
}
