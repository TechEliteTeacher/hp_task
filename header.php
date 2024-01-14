<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechElite課題</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <?php if (is_front_page()) { ?>
        <!-- TOPページ kv,メニュー -->
        <div class="kv">
            <div class="kv_content">
                <div class="header flex_center">
                    <img class="header_logo" src="<?php echo get_template_directory_uri() ?>/img/logo_white.png" alt="楽園雅苑">
                    <div class="nav flex_center">
                        <ul class="flex_center">
                            <li><a href="#room">お部屋</a></li>
                            <li><a href="#plan">プラン</a></li>
                            <li><a href="#seasons">四季</a></li>
                            <li><a href="#access">アクセス</a></li>
                            <li><a href="#access">楽園雅苑のサービス</a></li>
                        </ul>
                        <a class="reservation_link" href="/contact">予約</a>
                        <button class="hamburger_btn" id="js-hamburger">
                            <span class="bar"></span>
                            <span class="txt">menu</span>
                        </button>
                    </div>
                </div>
                <div class="kv_text">
                    <p>大自然と調和する、<br class="br_sp">極上の癒し。</p>
                    <p>
                        大分の自然環境と共に、<br>
                        身も心も癒やされる<br class="br_sp">至福のひとときを提供します。
                    </p>
                </div>
                <p class="kv__scroll serif">scroll</p>
            </div>
        </div>
        <div class="hamburger__bg" id="js-bg"></div>
    <?php } else { ?>
        <!-- 下層ページ メニュー -->
        <div class="under_page_header">
            <div class="header flex_center">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img class="header_logo" src="<?php echo get_template_directory_uri() ?>/img/logo_white.png" alt="楽園雅苑"></a>
                <div class="nav flex_center">
                    <ul class="flex_center">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#room">お部屋</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#plan">プラン</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#seasons">四季</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#access">アクセス</a></li>
                    </ul>
                    <a class="reservation_link" href="./#form">予約</a>
                    <button class="hamburger_btn" id="js-hamburger">
                        <span class="bar"></span>
                        <span class="txt">menu</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="hamburger__bg" id="js-bg"></div>
    <?php } ?>