<?php

/**
 * Add favicon to Admin Page
 */
add_action('admin_head', function () {
    echo '<link rel="shortcut icon" href="' . images_path('favicon.png') . '" />';
});
