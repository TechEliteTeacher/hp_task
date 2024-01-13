<?php
/**
 * Template Name: ブログ詳細
 *
 * @package WordPress
 *
 */
?>
<?php 
get_header();
$current_id = get_the_ID();
?>
<div class="container">
  <div class="container__inner">
    <div class="breadcrumbs serif" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <div class="p-blog__container">
      <div class="p-blog__main">
        <h1 class="p-blog__title"><?php echo get_the_title(); ?></h1>
        <div class="p-blog__info">
          <time class="p-blog__date" date-time="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y/m/d' ); ?></time>
          <div class="p-blog__category">
          <?php
            $terms = get_the_terms($post->ID, 'blog_category');
            if ($terms) :
                foreach ($terms as $term) {
                    echo '<a class="p-blog__category-item" href="' . get_term_link($term) . '">' . $term->name . '</a>';
                }
            endif;
            ?>
          </div>
        </div>
        <?php if(has_post_thumbnail()): ?>
          <div class="p-blog__thumb img">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
          </div>
        <?php endif; ?>
        <div class="p-blog__body">
          <?php the_content(); ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <div class="p-blog__related">
      <p class="p-blog__related-title">こんな記事も読まれています</p>
      <div class="blog__list -related">
      <?php
      $args = array(
        'posts_per_page' => 2,
        'orderby' => 'rand',
        'post_type' => array('blog'),
        'post_status' => 'publish',
        'post__not_in' => array($current_id)
        );
        $wp_query = new WP_Query($args);
        if ( $wp_query->have_posts() ) : 

        while($wp_query->have_posts()):
        $wp_query->the_post(); ?>
                <article class="blog__item -related">
          <a href="<?php the_permalink(); ?>" class="blog__item-pic img">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri()?>/img/dummy.jpg" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
            <?php endif; ?>
          </a>
          <div class="blog__item-body -grey">
            <time class="blog__item-time serif" date-time="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y/m/d' ); ?></time>
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
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</div>
<?php 
get_footer();