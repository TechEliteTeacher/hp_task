<div class="sidebar">
  <div class="sidebar__inner">
    <p class="sidebar__head">人気記事</p>
    <div class="sidebar__body">
      <?php
      // WPPのクエリ
      $popular_posts = new \WordPressPopularPosts\Query();
      $wpp_query_ids = array_map(
        function ($wppost) {
          return (int)$wppost->id;
        },
        $popular_posts->get_posts()
      );
      $args = array(
        'posts_per_page' => 10,
        'post_type' => 'post',
        'post_status' => 'publish',
        'post__in' => $wpp_query_ids,
        'orderby' => 'post__in'
      );
      $wp_query = new WP_Query($args);
      if ($wp_query->have_posts()) : ?>
        <ul class="sidebar__list">
          <?php while ($wp_query->have_posts()) :
            $wp_query->the_post(); ?>
            <li class="sidebar__item">
              <a href="<?php the_permalink(); ?>" class="sidebar__item-link">
                <div class="sidebar__item-thumb img">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/img/dummy.jpg" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
                  <?php endif; ?>
                </div>
                <p class="sidebar__item-title"><?php echo truncate_text(get_the_title(), 20); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p class="sidebar__caution">まだデータがありません。</p>
      <?php endif; ?>
    </div>
  </div>
</div>