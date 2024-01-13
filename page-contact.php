<?php
/**
 * Template Name: ご予約
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
    <h1 class="page__title">ご予約</h1>
    <p class="p-contact__txt">「楽園雅苑 - 桜庭温泉の隠れ家 -」へのご予約、心よりお待ちしております。お手数をおかけいたしますが、以下のフォームに必要事項をご記入の上、ご送信ください。</p>
    <hr class="p-contact__hr">
    <div class="p-contact__body">
        <?php the_content(); ?>
    </div>
  </div>
</div>
<?php 
get_footer();