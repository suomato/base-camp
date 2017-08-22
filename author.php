<?php

global $wp_query;

$context          = Timber::get_context();
$context['posts'] = Timber::get_posts();

// Check if author exists
if (isset($wp_query->query_vars['author'])) {
    $author            = new TimberUser($wp_query->query_vars['author']);
    $context['author'] = $author;
    $context['title']  = 'Author Archives: ' . $author->name();
}
Timber::render(['author.twig', 'archive.twig'], $context);
