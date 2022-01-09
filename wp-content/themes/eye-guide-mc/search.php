<?php

$context = Timber::context();
$context['search_query'] = get_search_query();
$context['posts'] = new Timber\PostQuery();

$args = [
    'post_type' => 'page',
    'p' => '16'
];
$news = new TImber\PostQuery($args);
$context['post'] = $news[0];

Timber::render( [ 'search.twig' ], $context );