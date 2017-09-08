<?php

$context          = Timber::get_context();
$context['posts'] = new Timber\PostQuery();
$context['pagination'] = Timber::get_pagination(4);


Timber::render('index.twig', $context);
