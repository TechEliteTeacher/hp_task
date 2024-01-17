<?php
/**
 * Template Name: お知らせ詳細
 *
 * @package WordPress
 *
 */
?>
<?php get_header(); ?>
<div class="container">
  <div class="container__inner">
    <div class="breadcrumbs serif" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <div class="single__head">
      <time class="single__date"
        date-time="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y/m/d' ); ?></time>
      <h1 class="single__title"><?php echo get_the_title(); ?></h1>
    </div>
    <div class="single__body">
      <?php the_content(); ?>
    </div>
    <div class="single__btn-box">
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="single__btn">
        <svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22 7H2L8.03774 1" stroke="#B8A973" />
        </svg>
        一覧に戻る
      </a>
    </div>
  </div>
</div>
<?php 
get_footer();