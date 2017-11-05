<?php

/**
 * TABLE OF CONTENTS
 *
 * Hide WordPress version number from source code
 * Custom Login Error Message
 */

/*
|--------------------------------------------------------------------------
| Hide WordPress version number from source code
|--------------------------------------------------------------------------
|
| By hiding your WordPress version number you can improve your site security.
|
*/

// Remove WordPress version number from both head file(generator meta tag) and RSS feeds
add_filter('the_generator', function () {
    return '';
});

/**
 * Remove the 'ver' query argument from the source path
 *
 * @param $src
 *
 * @return mixed
 */
function base_camp_remove_query_string_version($src)
{
    return remove_query_arg('ver', $src);
}

// Remove WP version from css
add_filter('style_loader_src', 'base_camp_remove_query_string_version', 9999);

// Remove Wp version from scripts
add_filter('script_loader_src', 'base_camp_remove_query_string_version', 9999);


/*
|--------------------------------------------------------------------------
| Custom Login Error Message
|--------------------------------------------------------------------------
|
| Login errors in WordPress can be used by hackers
| to guess whether they entered wrong username or password.
| By creating custom login errors in WordPress you can improve your login page secure.
| 
*/

function base_camp_custom_login_error_message()
{
    return __('Oops! Incorrect input', 'base-camp');
}

add_filter('login_errors', 'base_camp_custom_login_error_message');
