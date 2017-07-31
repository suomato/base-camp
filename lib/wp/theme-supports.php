<?php

/*
|--------------------------------------------------------------------------
| Theme Supports
|--------------------------------------------------------------------------
|
| Here you may specify an array of paths where to load templates.
|
| Default path: 'resources/views'
|
*/

//'automatic-feed-links'
//'post-thumbnails'
//'post-formats'
//'custom-header'
//'custom-background'
//'html5'

// Enables Post Formats support for a theme.
// More information at https://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', [
    'aside',   // Typically styled without a title.
    'audio',   // An audio file or playlist.
    'chat',    // A chat transcript
    'gallery', // A gallery of images.
    'image',   // A single image.
    'link',    // A link to another site.
    'quote',   // A quotation.
    'status',  // A short status update, similar to a Twitter status update.
    'video',   // A single video or video playlist.
]);

// Enables Post Thumbnails support for a theme
add_theme_support('post-thumbnails');

// Adds RSS feed links to HTML <head>
add_theme_support('automatic-feed-links');

// Allows the use of HTML5 markup for the listen options
add_theme_support('html5', [
    'caption',
    'comment-form',
    'comment-list',
    'gallery',
    'search-form',
]);

// Enables Custom_Backgrounds support for a theme
//add_theme_support('custom-background', [
//    'default-image'          => '',
//    'default-preset'         => 'default',
//    'default-position-x'     => 'left',
//    'default-position-y'     => 'top',
//    'default-size'           => 'auto',
//    'default-repeat'         => 'repeat',
//    'default-attachment'     => 'scroll',
//    'default-color'          => '',
//    'wp-head-callback'       => '_custom_background_cb',
//    'admin-head-callback'    => '',
//    'admin-preview-callback' => '',
//]);

// Enables Custom_Headers support for a theme
//add_theme_support('custom-header', [
//    'default-image'          => '',
//    'random-default'         => false,
//    'width'                  => 0,
//    'height'                 => 0,
//    'flex-height'            => false,
//    'flex-width'             => false,
//    'default-text-color'     => '',
//    'header-text'            => true,
//    'uploads'                => true,
//    'wp-head-callback'       => '',
//    'admin-head-callback'    => '',
//    'admin-preview-callback' => '',
//    'video'                  => false,
//    'video-active-callback'  => 'is_front_page',
//]);

// Enables Theme_Logo support for a theme
//add_theme_support('custom-logo', [
//    'height'      => 100,
//    'width'       => 400,
//    'flex-height' => true,
//    'flex-width'  => true,
//    'header-text' => ['site-title', 'site-description'],
//]);
