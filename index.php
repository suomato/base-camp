<?php

$context = Timber::get_context();
$context['posts'] = Timber::get_posts(['posts_per_page' => -1]);
$context['main_sidebar'] = Timber::get_widgets('main-sidebar');
$context['menu'] = new TimberMenu('main_menu');

Timber::render('index.twig', $context);
