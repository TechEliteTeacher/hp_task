<?php

/**
 * Template Name: 楽園雅苑のサービス
 *
 * @package WordPress
 *
 */
?>
<?php get_header(); ?>
<div class="container">
  <div class="container__inner">
    <div class="breadcrumbs serif" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
    <h1 class="page__title">楽園雅苑のサービス</h1>
    <div class="p-service__body">
      <div class="p-service__block">
        <h2 class="p-service__block-title">温泉</h2>
        <p class="p-service__txt-lg">癒しの源泉、<br class="only-sp">心と体を満たす至福の温泉体験</p>
        <p class="p-service__txt -left">「楽園雅苑 - 桜庭温泉の隠れ家
          -」では、自然の恵みに満ちた温泉を誇ります。当館の温泉は、大自然の地下深くから湧き出る温泉源を利用し、厳選された泉質が心と体を癒やします。その美しい湯色と温かさは、まるで天然の温もりを感じるかのよう。疲れた心と体を癒し、日々の喧騒から解放される贅沢な時間を提供します。楽園雅苑の温泉で、極上の癒しとリフレッシュをご体験ください。
        </p>

        <div class="p-service__img-box">
          <div class="p-service__img img">
            <img src="<?php echo get_template_directory_uri() ?>/img/service/img01.jpg" alt="桜庭温泉の画像1">
          </div>
          <div class="p-service__img img">
            <img src="<?php echo get_template_directory_uri() ?>/img/service/img02.jpg" alt="桜庭温泉の画像2">
          </div>
        </div>

        <dl class="p-service__table">
          <div class="p-service__table-row">
            <dt class="p-service__table-title">泉質</dt>
            <dd class="p-service__table-text">
              <p>「桜庭温泉」の泉質は、硫黄泉とナトリウム・カルシウム硫酸塩泉が混ざり合った特別な組み合わせです。硫黄の特有の香りと透明感のある湯色が特徴で、温泉浴後に肌がつるつるになる感覚を提供します。</p>
            </dd>
          </div>
          <div class="p-service__table-row">
            <dt class="p-service__table-title">効能</dt>
            <dd class="p-service__table-text">
              <ul>
                <li>疲労回復: 泉質の特性から、疲れた筋肉をほぐし、日々のストレスや疲れを和らげます。</li>
                <li>皮膚の健康: 温泉のミネラルが肌に潤いを与え、肌トラブルを緩和します。</li>
                <li>血行促進: 温まった温泉効果で血行が促進され、身体全体をリフレッシュします。</li>
                <li>神経のリラックス: 温かい泉質が神経を鎮め、リラックスした状態をもたらします。</li>
              </ul>
              <p>このような泉質と効能は、体のリラックスやリフレッシュに役立ちます。</p>
            </dd>
          </div>
        </dl>

      </div>
      <div class="p-service__block">
        <h2 class="p-service__block-title">施設情報</h2>
        <p class="p-service__txt-lg">客室</p>
        <p class="p-service__txt">
          プレミアスィート、デラックスルーム、スタンダードルームの豊富な選択肢。<br class="only-pc">快適なベッドとモダンな設備完備。<br class="only-pc">自然の風景を望む客室や温泉露天風呂付き客室をご用意しております。</p>

        <div class="p-service__img-box -plan">
          <div class="p-service__img -sm img">
            <img src="<?php echo get_template_directory_uri() ?>/img/service/img03.jpg" alt="客室1">
          </div>
          <div class="p-service__img -sm img">
            <img src="<?php echo get_template_directory_uri() ?>/img/service/img04.jpg" alt="客室2">
          </div>
          <div class="p-service__img -sm img">
            <img src="<?php echo get_template_directory_uri() ?>/img/service/img05.jpg" alt="客室2">
          </div>
        </div>

        <div class="p-service__btn-box">
          <a href="" class="p-service__btn">
            宿泊プランを見る
            <svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 7H20L13.9623 1" stroke="#B8A973" />
            </svg>
          </a>
        </div>

        <div class="p-service__section">
          <p class="p-service__txt-lg">レストラン・ダイニング</p>
          <p class="p-service__txt">地元の食材を使用した料理を楽しめるレストラン。<br class="only-pc">お部屋食や個室も用意され、贅沢な食体験を提供。</p>
          <div class="p-service__img-box">
            <div class="p-service__img img">
              <img src="<?php echo get_template_directory_uri() ?>/img/service/img06.jpg" alt="桜庭温泉の画像1">
            </div>
            <div class="p-service__img img">
              <img src="<?php echo get_template_directory_uri() ?>/img/service/img07.jpg" alt="桜庭温泉の画像2">
            </div>
          </div>
          <p class="p-service__detail">朝食7:00 ~ 10:00 <br class="only-sp">(ラストオーダー 9:30)<br><br class="only-sp">ランチ11:30 ~ 14:00<br class="only-sp"> (ラストオーダー 13:30)<br><br class="only-sp">ディナー18:00 ~ 21:00<br class="only-sp"> (ラストオーダー 20:30)</p>
          <p class="p-service__detail-caution">※ 営業時間は季節や施設の状況によって変更される場合がございますので、事前にご確認ください。</p>
        </div>
      </div>
      <div class="p-service__block">
        <h2 class="p-service__block-title">その他施設・サービス</h2>
        <p class="p-service__txt-lg -facility">会議室、イベントスペース</p>

        <div class="p-service__img-box">
          <div class="p-service__img img">
            <img src="<?php echo get_template_directory_uri() ?>/img/service/img08.jpg" alt="会議室">
          </div>
          <div class="p-service__img img">
            <img src="<?php echo get_template_directory_uri() ?>/img/service/img09.jpg" alt="イベントスペース">
          </div>
        </div>

        <div class="p-service__section">
          <p class="p-service__txt-lg -facility">マッサージ</p>
          <div class="p-service__img-box">
            <div class="p-service__img img">
              <img src="<?php echo get_template_directory_uri() ?>/img/service/img10.jpg" alt="マッサージチェア">
            </div>
            <div class="p-service__img img">
              <img src="<?php echo get_template_directory_uri() ?>/img/service/img11.jpg" alt="マッサージルーム">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php
get_footer();
