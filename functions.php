<?php 
function my_script_init()
{
wp_enqueue_style('mystyle', get_template_directory_uri() . '/css/style.css?'.filemtime(get_template_directory().'/css/style.css'), array(), '1.0.0', 'all');
wp_enqueue_script('datepickerjs', get_template_directory_uri() . '/js/datepicker-ja.js?'.filemtime(get_template_directory().'/js/datepicker-ja.js'), array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('scriptjs', get_template_directory_uri() . '/js/index.js?'.filemtime(get_template_directory().'/js/index.js'), array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog'; //一覧ページで使いたいURL
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

add_theme_support('post-thumbnails');

function truncate_text($text, $length = 20, $ellipsis = '…') {
  if (mb_strlen($text) > $length) {
      $text = mb_substr($text, 0, $length) . $ellipsis;
  }
  return $text;
}