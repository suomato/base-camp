<?php

function base_camp_register_sidebars()
{
    register_sidebar([
        'name'          => __('Main Sidebar', 'base-camp'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'base-camp'),
        'before_widget' => '<div style="margin-bottom: 3rem;">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle title is-4">',
        'after_title'   => '</h2>',
    ]);
}

add_action('widgets_init', 'base_camp_register_sidebars');
