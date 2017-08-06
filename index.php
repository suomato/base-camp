<?php

$context          = Timber::get_context();
$context['posts'] = Timber::get_posts(['posts_per_page' => -1]);

Timber::render('index.twig', $context);
