<?php

$templates        = ['archive.twig', 'index.twig'];
$context          = Timber::get_context();
$context['title'] = 'Archive';

if (is_day()) {
    $context['title'] = 'Archive: ' . get_the_date('D M Y');
} elseif (is_month()) {
    $context['title'] = 'Archive: ' . get_the_date('M Y');
} elseif (is_year()) {
    $context['title'] = 'Archive: ' . get_the_date('Y');
} elseif (is_tag()) {
    $context['title'] = 'Tag: ' . single_tag_title('', false);
} elseif (is_category()) {
    $context['title'] = 'Category: ' . single_cat_title('', false);
    array_unshift($templates, 'archive-' . get_query_var('cat') . '.twig');
} elseif (is_post_type_archive()) {
    $context['title'] = post_type_archive_title('', false);
    array_unshift($templates, 'archive-' . get_post_type() . '.twig');
}

$context['posts']      = new Timber\PostQuery();
$context['pagination'] = Timber::get_pagination($pagination_mid_size);

Timber::render($templates, $context);
