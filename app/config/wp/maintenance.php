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
$maintenance = false;

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
| are able to see frontend. However, if you want to activate maintenance mode
| for the entire site, set $full variable true
|
*/
$full = false;


/*****************************************************************************************/
base_camp_maintenance($maintenance, $full, $template);
