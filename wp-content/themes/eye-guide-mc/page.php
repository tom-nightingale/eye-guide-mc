<?php

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$args = [
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
];
$context['newsPosts'] = new Timber\PostQuery($args);

Timber::render( [ 'page-'.$timber_post->slug.'.twig', 'page.twig' ], $context );
