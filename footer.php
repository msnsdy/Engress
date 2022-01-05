<footer class="footer">
    <div class="footer-top">
      <div class="footer-top-wrapper">
        <nav class="footer-nav">
          <ul class="footer-nav-list">
            <li class="footer-nav-item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
            <li class="footer-nav-item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
            <li class="footer-nav-item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
            <li class="footer-nav-item"><a href="<?php echo esc_url(home_url('/price')); ?>">コース・料金</a></li>
          </ul>
        </nav>
        <div class="footer-info">
          <div class="footer-logo">
            <a href="<?php echo esc_url(home_url()); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.jpg" alt="Englress">
            </a>
          </div>
          <div class="footer-tel">
            <a href="tel:01234567890" class="footer-tel-number">0123-456-7890</a>
            <p class="footer-tel-text">平日08:00~20:00</p>
          </div>
        </div>
      </div>
    </div> <!-- /.footer-top -->
    <div class="footer-bottom">
      <p class="footer-copyright">© 2020 Engress.</p>
    </div> <!-- /.footer-bottom -->
  </footer>

  <?php wp_footer(); ?>
</body>

</html>