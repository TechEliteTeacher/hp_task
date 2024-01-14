<?php
/**
 * Template Name: お知らせ一覧
 *
 * @package WordPress
 *
 */
?>
<?php get_header();  ?>
<div class="container">
  <div class="container__inner">
    <div class="breadcrumbs serif" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <h1 class="page__title">お知らせ</h1>
    <div class="news__body">
      <?php if(have_posts()): ?>
      <div class="news__list">
        <?php while(have_posts()): the_post(); ?>
        <article class="news__item">
          <a href="<?php the_permalink(); ?>" class="news__item-link">
            <time class="news__item-time serif" date-time="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y/m/d' ); ?></time>
            <h3 class="news__item-title serif"><?php echo get_the_title(); ?></h3>
            <span class="arrow"></span>
          </a>
        </article>
        <?php endwhile; ?>
      </div>
      <?php else: ?>
        <p>お知らせはありません。</p>
      <?php endif; ?>
    </div>
    <?php wp_pagenavi(); ?>
  </div>
</div>
<?php 
get_footer();