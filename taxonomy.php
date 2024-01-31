<?php

/**
 * Template Name: ブログカテゴリーアーカイブ一覧
 *
 * @package WordPress
 *
 */
$current_term = get_queried_object();
$current_term_name = $current_term->name;
?>
<?php get_header();  ?>
<div class="container">
  <div class="container__inner">
    <div class="breadcrumbs serif" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
    <h1 class="page__title">ブログ</h1>
    <div class="blog__tabs">
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="blog__tabs-item">ALL</a>
      <?php
      $terms = get_terms('blog_category');
      if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) {
          if ($current_term_name === $term->name) {
            echo '<p class="blog__tabs-item is-active">' . $term->name . '</p>';
          } else {
            echo '<a class="blog__tabs-item" href="' . get_term_link($term) . '">' . $term->name . '</a>';
          }
        }
      endif;
      ?>
    </div>
    <div class="blog__body">
      <?php if (have_posts()) : ?>
        <div class="blog__list -archive">
          <?php while (have_posts()) : the_post(); ?>
            <article class="blog__item">
              <a href="<?php the_permalink(); ?>" class="blog__item-pic img">
                <?php if (has_post_thumbnail()) : ?>
                  <img class="lazyload" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri() ?>/img/dummy.jpg" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
                <?php endif; ?>
              </a>
              <div class="blog__item-body -grey">
                <time class="blog__item-time serif" date-time="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time>
                <h3 class="blog__item-title serif"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <div class="blog__category">
                  <?php
                  $terms = get_the_terms($post->ID, 'blog_category');
                  if ($terms) :
                    foreach ($terms as $term) {
                      echo '<a class="serif" href="' . get_term_link($term) . '">' . $term->name . '</a>';
                    }
                  endif;
                  ?>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p>ブログ記事はありません。</p>
      <?php endif; ?>
    </div>
    <?php wp_pagenavi(); ?>
  </div>
</div>
<?php
get_footer();
