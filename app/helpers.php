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

function build_custom_post_type($template, $name, $plural)
{
    $singular = $name;
    $plural   = $plural ?? "{$name}s";

    $content = str_replace('movies', $plural, $template);
    $content = str_replace('Movies', ucfirst($plural), $content);
    $content = str_replace('Movie', ucfirst($singular), $content);
    $content = str_replace('movie', $singular, $content);

    return $content;
}
