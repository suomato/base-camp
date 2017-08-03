<?php

// Send notice to user if Timber Class cannot be found
if ( ! class_exists('Timber')) {

    // Notice on admin pages
    add_action('admin_notices', function () {
        echo '<div class="error">
                  <p>Timber not activated. Make sure you activate the plugin in  
                      <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a>
                  </p>
              </div>';
    });

    // Notice on front pages
    add_filter('template_include', function () {
        return get_stylesheet_directory() . '/no-timber.html';
    });

    return 0;
}

/*
|--------------------------------------------------------------------------
| Template paths
|--------------------------------------------------------------------------
|
| Here you may specify an array of paths where to load templates.
|
| Default path: 'resources/views'
|
*/

Timber::$dirname = ['resources/views'];
