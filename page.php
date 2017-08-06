<?php

$context         = Timber::get_context();
$post            = new TimberPost();
$context['post'] = $post;

Timber::render(['page-' . $post->post_name . '.twig', 'page.twig'], $context);
