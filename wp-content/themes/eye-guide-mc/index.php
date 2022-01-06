<?php

$context = Timber::context();
$context['posts'] = new Timber\PostQuery();

$args = [
    'post_type' => 'page',
    'p' => '16'
];
$news = new TImber\PostQuery($args);
$context['post'] = $news[0];

$context['categories'] = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );

Timber::render( [ 'index.twig' ], $context );
