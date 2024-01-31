<?php

/**
 * Template Name: 利用規約
 *
 * @package WordPress
 *
 */
?>
<?php get_header(); ?>
<div class="p-privacy container">
  <div class="container__inner">
    <div class="breadcrumbs serif" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
    <h1 class="page__title">利用規約</h1>
    <div class="p-privacy__body">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php
get_footer();
