<?php

function get_template_messages()
{
    return [
        // 404 Page
        '404' => [
            'title'     => __('404 - Page not found.', 'base-camp'),
            'body'      => __('The page you have looked for does not exist.', 'base-camp'),
            'link_text' => __('Back to home page', 'base-camp'),
        ],

        // Article Component
        'article' => [
            'edit' => __('Edit', 'base-camp'),
        ],

        // Base Page
        'base' => [
            'no_content' => __('Sorry, no content', 'base-camp'),
        ],

        // Comment Form Page
        'comment_form' => [
            'name'                => __('Name', 'base-camp'),
            'email'               => __('Email', 'base-camp'),
            'website'             => __('Website', 'base-camp'),
            'comment'             => __('Comment', 'base-camp'),
            'comment_placeholder' => __('Enter your comment here...', 'base-camp'),
            'post_comment'        => __('Post Comment', 'base-camp'),
            'reset'               => __('Reset', 'base-camp'),
        ],

        // Comment Page
        'comment' => [
            'reply' => __('Reply', 'base-camp'),
        ],

        // Search Page
        'search' => [
            'no_results' => __('Sorry, No Results. Try your search again.', 'base-camp'),
        ],

        // Search Form Page
        'search_form' => [
            'search' => __('Search', 'base-camp'),
        ],

        // Single Password Page
        'single_password' => [
            'password' => __('Password', 'base-camp'),
            'submit'   => __('Submit', 'base-camp'),
        ],

        // Single Page
        'single' => [
            'edit'     => __('Edit', 'base-camp'),
            'comments' => __('Comments', 'base-camp'),
        ],
    ];
}
