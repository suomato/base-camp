<?php

/*
|--------------------------------------------------------------------------
| Maintenance
|--------------------------------------------------------------------------
|
| Here you can activate site maintenance mode by setting $maintenance variable to 'enable'.
|
| Maintenance mode will only affect your site's frontend so visitors are able to see
| wp-admin page. Authenticated administrators can edit pages, posts etc. and they
| are able to see frontend. However, if you want to activate maintenance mode
| for the entire site, set the $maintenance variable to 'full'
|
| Supported: false, 'enable', 'full'
|
*/
$maintenance = bc_env('MAINTENANCE', false);

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

/*****************************************************************************************/
base_camp_maintenance($maintenance, $template);
