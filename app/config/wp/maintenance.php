<?php

/*
|--------------------------------------------------------------------------
| Maintenance
|--------------------------------------------------------------------------
|
| Here you can easily activate site maintenance mode.
| Just set $maintenance variable true.
|
*/
$maintenance = true;

/*
|--------------------------------------------------------------------------
| Maintenance page
|--------------------------------------------------------------------------
|
| Define here your maintenance page template file.
| Template file root folder is 'resources/views'
|
*/
$template = 'maintenance.twig';

/*
|--------------------------------------------------------------------------
| Maintenance mode
|--------------------------------------------------------------------------
|
| Maintenance will only affect your site's frontend so visitors are able to see
| wp-admin page. Authenticated administrators can edit pages, posts etc. and they
| are able to see frontend. However, if you want to activate maintenance mode entire site,
| set $full_maintenance variable true
|
*/
$full_maintenance = false;


/*****************************************************************************************/

$base_camp_maintenance = function () use ($template) {
    status_header(503);
    die(\Timber::compile($template));
};

if ($maintenance) {
    if ($full_maintenance) {
        add_action('init', $base_camp_maintenance);
    }
    if ( ! current_user_can('administrator')) {
        add_filter('template_include', $base_camp_maintenance);
    }
}

