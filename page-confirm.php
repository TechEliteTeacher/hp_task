<?php

/**
 * Template Name: ご予約の確認
 *
 * @package WordPress
 *
 */
?>
<?php get_header();  ?>
<div class="container">
  <div class="container__inner">
    <div class="breadcrumbs serif" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
    <h1 class="page__title">ご予約の確認</h1>
    <p class="p-contact__hr"></p>
    <div class="p-contact__body">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php
get_footer();
