<?php

/**
 * Template Name: 予約が完了しました
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
    <?php the_content(); ?>
    <h1 class="page__title">予約が完了しました</h1>
    <div class="p-thanks__body">
      <p class="p-thanks__txt">「楽園雅苑 - 桜庭温泉の隠れ家 -」へのご予約、誠にありがとうございます。<br>お客様の予約が正常に受け付けられました。<br><br>ご注意事項:<br>ご予約に関する特別なリクエストや変更がある場合、お手続きの前に当宿のスタッフがご連絡いたします。<br>予約内容の変更やキャンセルについては、ご予約確認メールに記載の手順に従ってご連絡いただけます。</p>
      <p class="p-thanks__txt">「楽園雅苑」でのご滞在が、素晴らしい思い出とくつろぎに満ちたひとときとなることを心より願っております。何かご質問やご要望がある場合は、いつでもご連絡いただけます。<br>お客様にお会いできることを楽しみにしております。</p>
    </div>
  </div>
</div>
<?php
get_footer();
