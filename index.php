<?php

$context               = Timber::get_context();
$context['posts']      = new Timber\PostQuery();
$context['pagination'] = Timber::get_pagination($pagination_mid_size);

Timber::render('index.twig', $context);
