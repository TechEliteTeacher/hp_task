<?php get_header();  ?>
<div class="about">
    <div class="about_content">
        <div class="about_text">
            <img class="about_logo" src="<?php echo get_template_directory_uri()?>/img/logo_gold.png" alt="">
            <p>
                自然美に囲まれた楽園で、<br>
                贅沢な癒しのひとときを<br>
                お過ごしください。
            </p>
        </div>
        <div class="about_images">
            <img src="<?php echo get_template_directory_uri()?>/img/about_img_1.png" alt="">
            <img src="<?php echo get_template_directory_uri()?>/img/about_img_2.png" alt="">
        </div>
    </div>
</div>
<div class="room" id="room">
    <img class="room_cloud" src="<?php echo get_template_directory_uri()?>/img/room_cloud.png" alt="">
    <div class="room_content">
        <div class="content_title flex_center">
            <p class="ja_title">お部屋</p>
            <div class="line"></div>
            <p class="en_title">room</p>
        </div>
        <p class="room_description serif">
            「楽園雅苑」の豪華なお部屋は、大分県自然の美しさと格式の高いサービスが調和した完璧な空間を提供します。桜花の調べが響くプレミアスィート、静寂の庭園に囲まれたデラックスルーム、そして自然のぬくもりを感じるスタンダードルーム。どの部屋も極上の癒しとくつろぎがお待ちしております。贅沢な温泉体験と非日常のくつろぎをお楽しみください。
        </p>
        <div class="room_select">
            <div class="room_select_list flex_center">
                <p id="standard" class="active">
                    スタンダードルーム<br>
                    - 自然のぬくもり -
                </p>
                <p id="deluxe">
                    デラックスルーム<br>
                    - 静寂の庭園 -
                </p>
                <p id="premium">
                    プレミアスィート<br>
                    - 桜花の調べ -
                </p>
            </div>
        </div>
        <div class="rooms">
            <div id="standard_content" class="room_view active">
                <img src="<?php echo get_template_directory_uri()?>/img/room_standard.jpg" alt="スタンダードルーム 自然のぬくもり">
                <div class="room_textarea">
                    <p class="title">自然のぬくもり</p>
                    <p class="text">「自然のぬくもり」スタンダードルームは、自然との共感を感じるお部屋です。山の景色を楽しむことができ、ナチュラルリトリートプランには朝食が含まれています。心地よいぬくもりとくつろぎのひとときを提供します。</p>
                </div>
            </div>
            <div id="deluxe_content" class="room_view">
                <img src="<?php echo get_template_directory_uri()?>/img/room_deluxe.jpg" alt="デラックスルーム 静寂の庭園">
                <div class="room_textarea">
                    <p class="title">静寂の庭園</p>
                    <p class="text">「静寂の庭園」デラックスルームは、静寂と美しさに包まれた部屋です。個別の温泉ビューバルコニーからは、美しい庭園と温泉の景色が広がります。ロマンティックゲットアウェイプランで、特別なひとときを過ごしましょう。</p>
                </div>
            </div>
            <div id="premium_content" class="room_view">
                <img src="<?php echo get_template_directory_uri()?>/img/room_premium.jpg" alt="プレミアスィート 桜花の調べ">
                <div class="room_textarea">
                    <p class="title">桜花の調べ</p>
                    <p class="text">「桜花の調べ」プレミアスィートは、最高級のラグジュアリーを追求した特別なお部屋です。広々とした空間に、温泉露天風呂が設けられ、そこからは四季折々の美しい景色を楽しむことができます。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="plan" id="plan">
    <img class="plan_cloud" src="<?php echo get_template_directory_uri()?>/img/plan_cloud.png" alt="">
    <div class="content_title flex_center">
        <p class="ja_title">プラン</p>
        <div class="line"></div>
        <p class="en_title">plan</p>
    </div>
    <div class="plan_contents flex_center">
        <div class="plan_content">
            <p class="title">スタンダードルーム<br>
                - 自然のぬくもり -
            </p>
            <hr>
            <ul>
                <li>一泊の値段 : 30,000円/1部屋</li>
                <li>チェックイン時間 : 16:00</li>
                <li>チェックアウト時間 : 10:00</li>
            </ul>
            <p class="reservation_button" reservation_plan="standard">予約</p>
        </div>
        <div class="plan_content">
            <p class="title">デラックスルーム<br>
                - 静寂の庭園 -
            </p>
            <hr>
            <ul>
                <li>一泊の値段 : 50,000円/1部屋</li>
                <li>チェックイン時間 : 14:00</li>
                <li>チェックアウト時間 : 12:00</li>
            </ul>
            <p class="reservation_button" reservation_plan="deluxe">予約</p>
        </div>
        <div class="plan_content">
            <p class="title">プレミアスィート<br>
                - 桜花の調べ -
            </p>
            <hr>
            <ul>
                <li>一泊の値段 : 100,000円</li>
                <li>チェックイン時間 : 15:00</li>
                <li>チェックアウト時間 : 11:00</li>
            </ul>
            <p class="reservation_button" reservation_plan="premier">予約</p>
        </div>
    </div>
</div>

<div class="seasons" id="seasons">
  <div class="seasons_inner">
    <div class="content_title flex_center">
        <p class="ja_title">四季</p>
        <div class="line"></div>
        <p class="en_title">seasons</p>
    </div>
    <p class="seasons_txt">「楽園雅苑」は、大分県自然の美しさが四季折々に変化する場所です。春には桜花が舞い、夏には新緑が輝き、秋には紅葉が魅了し、冬には雪景色が広がります。四季折々の風景や風味を楽しむためのアクティビティや特別なイベントが用意されています。どの季節に訪れても、自然の美しさに囲まれた楽園で贅沢なひとときを過ごしませんか？</p>
  </div>
  <div class="seasons_pics">
    <div class="img1">
      <img src="<?php echo get_template_directory_uri()?>/img/seasons1-pc.jpg" alt="">
    </div>
    <div class="img2">
      <img src="<?php echo get_template_directory_uri()?>/img/seasons2-pc.jpg" alt="">
    </div>
    <div class="img3">
      <img src="<?php echo get_template_directory_uri()?>/img/seasons3-pc.jpg" alt="">
    </div>
  </div>
  <div class="seasons_slider">
    <ul>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider1.jpg" alt="四季"></li>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider2.jpg" alt="四季"></li>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider3.jpg" alt="四季"></li>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider4.jpg" alt="四季"></li>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider5.jpg" alt="四季"></li>
    </ul>
    <ul>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider1.jpg" alt="四季"></li>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider2.jpg" alt="四季"></li>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider3.jpg" alt="四季"></li>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider4.jpg" alt="四季"></li>
      <li><img src="<?php echo get_template_directory_uri()?>/img/slider5.jpg" alt="四季"></li>
    </ul>
  </div>
</div>

<div class="access" id="access">
  <div class="access_top">
    <div class="content_title flex_center">
        <p class="ja_title">アクセス</p>
        <div class="line"></div>
        <p class="en_title">access</p>
    </div>
  </div>
  <div class="access_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53431.853051982886!2d131.32868078055353!3d33.17499211567743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546b15d4081bd39%3A0x3353f0a4a0b6def7!2z44CSODc5LTU0MjUg5aSn5YiG55yM55Sx5biD5biC5bqE5YaF55S65riV!5e0!3m2!1sja!2sjp!4v1701936174387!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="access_bottom">
    <div class="access_head">
      <figure class="logo">
        <img src="<?php echo get_template_directory_uri()?>/img/logo_access.png" alt="楽園雅苑">
      </figure>
      <p class="txt">〒879-5425<br class="only-sp"><span class="only-pc"> </span>大分県由布市　庄内町渕</p>
    </div>
    <p class="access_txt">当宿からのアクセスは便利で、お車や公共交通機関をご利用いただけます。<br>自家用車をご利用の場合、ご宿泊の方には無料の駐車場がご用意されております。<br>公共交通機関をご利用の場合、最寄り駅からはバス、タクシー、またはレンタサイクルを利用してお越しいただけます。</p>
  </div>
</div>
<!-- 
<div class="company" id="company">
  <div class="company_inner">
    <div class="content_title flex_center">
        <p class="ja_title">運営会社情報</p>
        <div class="line"></div>
        <p class="en_title">company</p>
    </div>
    <div class="company_contents">
      <dl class="company_list">
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
          foreach($company_info as list($dt, $dd)):
        ?>
        <div class="company_item">
          <dt><?php echo $dt; ?></dt>
          <dd><?php echo $dd; ?></dd>
        </div>
        <?php endforeach; ?>
      </dl>
    </div>
  </div>
</div> -->

<div class="blog" id="blog">
  <div class="blog__inner">
    <div class="content_title flex_center">
        <p class="ja_title">ブログ</p>
        <div class="line"></div>
        <p class="en_title">blog</p>
    </div>
    <div class="blog__body">
      <?php 
        $args = array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
        );
        $wp_query = new WP_Query($args);
        if ( $wp_query->have_posts() ) : ?>
      <div class="blog__list">
        <?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
        <article class="blog__item">
          <a href="<?php the_permalink(); ?>" class="blog__item-pic img">
            <?php if(has_post_thumbnail()): ?>
              <img class="lazyload" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
              <?php else: ?>
              <img src="<?php echo get_template_directory_uri()?>/img/dummy.jpg" alt="<?php echo str_replace(array("\r\n", "\r", "\n"), '', strip_tags(get_the_title())); ?>">
            <?php endif; ?>
          </a>
          <div class="blog__item-body">
            <time class="blog__item-time serif" date-time="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y/m/d' ); ?></time>
            <h3 class="blog__item-title serif"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
            <div class="blog__category">
            <?php
              $terms = get_the_terms($post->ID, 'category');
              if ($terms) :
                  foreach ($terms as $term) {
                      echo '<a class="serif" href="' . get_term_link($term) . '">' . $term->name . '</a>';
                  }
              endif;
              ?>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
      </div>
      <div class="blog__btn-box">
        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="blog__btn serif">
        ブログ一覧はこちら
        <svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 7H20L13.9623 1" stroke="#B8A973"/>
        </svg>
      </a>
      </div>
      <?php else: ?>
      <p class="blog__txt serif">ブログはありません。</p>
      <?php endif; ?>
    </div>
  </div>
</div>


<?php 
get_footer();