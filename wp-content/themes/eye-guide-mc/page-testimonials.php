<?php

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$review_args = [
    'post_type' => 'reviews',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'meta_key'		=> 'type',
    'meta_value'	=> 'text_review'
];
$context['reviews'] = new Timber\PostQuery($review_args);

$video_args = [
    'post_type' => 'reviews',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'meta_key'		=> 'type',
    'meta_value'	=> 'video'
];
$context['videos'] = new Timber\PostQuery($video_args);

$post_args = [
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
];
$context['newsPosts'] = new Timber\PostQuery($post_args);

Timber::render( [ 'page-'.$timber_post->slug.'.twig', 'page.twig' ], $context );
