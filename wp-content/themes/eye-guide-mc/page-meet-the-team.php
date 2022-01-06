<?php

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$args = [
    'post_type' => 'team',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
];

$context['team_members'] = new Timber\PostQuery($args);

Timber::render( [ 'page-'.$timber_post->slug.'.twig', 'page.twig' ], $context );
