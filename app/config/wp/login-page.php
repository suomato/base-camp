<?php

/**
 * Login Page logo url
 *
 * @return mixed
 */
function base_camp_login_logo_url()
{
    return home_url();
}

add_filter('login_headerurl', 'base_camp_login_logo_url');

/**
 * Login Page logo title
 *
 * @return string
 */
function base_camp_login_logo_title()
{
    return 'Base Camp';
}

add_filter('login_headertitle', 'base_camp_login_logo_title');
