<?php

$context             = Timber::get_context();
$context['messages'] = get_template_messages(); // Have to add again to context object for some reason..

Timber::render('searchform.twig', $context);
