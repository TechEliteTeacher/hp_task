<?php

/**
 * Template Name: 運営会社情報
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
    <h1 class="page__title serif">運営会社情報</h1>
    <dl class="p-company__list">
      <?php
      $company_info = [
        [
          '会社名',
          '桜庭観光株式会社'
        ],
        [
          '所在地',
          '〒879-5425 大分県由布市庄内町渕'
        ],
        [
          '電話番号',
          '0123-456-7890'
        ],
        [
          'メールアドレス',
          '<a href="mailto:info@sakuraba-ryokan.com">info@sakuraba-ryokan.com</a>'
        ],
        [
          'ウェブサイト',
          '<a href="">楽園雅苑ウェブサイト</a>'
        ],
        [
          '代表者名',
          '山田太郎'
        ],
        [
          '創立年',
          '1998年'
        ],
        [
          '事業内容',
          '温泉宿「楽園雅苑」の運営'
        ],
        [
          '会社概要',
          '桜庭観光株式会社は、大分県内で美しい自然環境と伝統的な温泉文化を提供するリゾート施設を運営する会社です。私たちの温泉宿「楽園雅苑」では、四季折々の美しい景色と温泉を楽しむ贅沢な滞在を提供しております。'
        ],
      ];
      foreach ($company_info as list($dt, $dd)) :
      ?>
        <div class="p-company__item serif">
          <dt class="p-company__item-title"><?php echo $dt; ?></dt>
          <dd class="p-company__item-text"><?php echo $dd; ?></dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</div>
<?php
get_footer();
