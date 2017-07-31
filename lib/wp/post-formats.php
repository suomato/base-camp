<?php

// Enables Post Formats support for a theme.
// More information at https://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', [
    'aside',   // Typically styled without a title.
    'audio',   // An audio file or playlist.
    'chat',    // A chat transcript
    'gallery', // A gallery of images.
    'image',   // A single image.
    'link',    // A link to another site.
    'quote',   // A quotation.
    'status',  // A short status update, similar to a Twitter status update.
    'video',   // A single video or video playlist.
]);
