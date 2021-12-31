<?php

$args = [
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
];

$context = Timber::context();
$context['post'] = new Timber\Post();
$context['newsPosts'] = new Timber\PostQuery($args);

Timber::render( [ 'front-page.twig' ], $context );
