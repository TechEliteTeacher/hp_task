<footer class="footer">
  <div class="footer__inner">
    <div class="footer__logo">
      <img src="<?php echo get_template_directory_uri()?>/img/footer-logo.png" alt="楽園雅苑RAKUENGAEN">
    </div>
    <div class="footer__nav">
      <ul class="footer__nav-list">
        <?php 
          $footer_nav = [
            [
              'お部屋',
            esc_url(home_url('/')) . "#room"
            ],
            [
              'プラン',
              esc_url(home_url('/')). "#plan"
            ],
            [
              '四季',
            esc_url(home_url('/')) . "#seasons"
            ],
            [
              'アクセス',
            esc_url(home_url('/')) . "#access"
            ],
            [
              'ブログ',
              '/blog/'
            ],
          ];
          foreach($footer_nav as list($text, $link)):
        ?>
        <li class="footer__nav-item"><a href="<?php echo esc_url(home_url($link)); ?>" class="footer__nav-link serif"><?php echo $text; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <hr class="footer__hr">
    <div class="footer__nav-sub">
      <a href="<?php echo esc_url(home_url('/privacy/')); ?>">運営会社情報</a>
      <a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a>
      <a href="<?php echo esc_url(home_url('/terms/')); ?>">利用規約</a>
    </div>
    <p class="footer__copy serif">&copy; RAKUGAEN.</p>
  </div>
</footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <?php wp_footer(); ?>
    </body>

</html>