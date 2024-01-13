<?php 
function my_script_init()
{
wp_enqueue_style('mystyle', get_template_directory_uri() . '/css/style.css?'.filemtime(get_template_directory().'/css/style.css'), array(), '1.0.0', 'all');
wp_enqueue_script('datepickerjs', get_template_directory_uri() . '/js/datepicker-ja.js?'.filemtime(get_template_directory().'/js/datepicker-ja.js'), array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('scriptjs', get_template_directory_uri() . '/js/index.js?'.filemtime(get_template_directory().'/js/index.js'), array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

function custom_archive_posts_per_page( $query ) {
  // 主クエリ以外の変更を避ける
  if ( ! is_admin() && $query->is_main_query() ) {
      // news タクソノミーのアーカイブページかどうかを確認
      if ( is_post_type_archive('news') ) {
          $query->set( 'posts_per_page', 10 ); // 10件表示
      } else {
          // それ以外のタクソノミーアーカイブページやその他のアーカイブページでは9件表示
          $query->set( 'posts_per_page', 9 );
      }
  }
}

add_action( 'pre_get_posts', 'custom_archive_posts_per_page' );

function truncate_text($text, $length = 20, $ellipsis = '…') {
  if (mb_strlen($text) > $length) {
      $text = mb_substr($text, 0, $length) . $ellipsis;
  }
  return $text;
}