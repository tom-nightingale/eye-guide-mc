<?php 

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$context['categories'] = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );

$args = [
    'post_type' => 'page',
    'p' => '16'
];
$news = new TImber\PostQuery($args);
$context['news'] = $news[0];

Timber::render( [ 'single.twig' ], $context );

if (is_single()) { ?>
  <script type="text/javascript">
    document.querySelector('.current_page_parent').classList.add('current-menu-item');
  </script>
<?php }
