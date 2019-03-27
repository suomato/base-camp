<?php

$context                = Timber::get_context();
$post                   = new TimberPost();
$context['post']        = $post;
$context['cancel_link'] = get_cancel_comment_reply_link(__('Cancel reply', 'base-camp'));

if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    $post_type = $post->post_type === 'revision' ? get_post_type($post->post_parent)  : $post->post_type;
    Timber::render(['single-' . $post->ID . '.twig', 'single-' . $post_type . '.twig', 'single.twig'], $context);
}
