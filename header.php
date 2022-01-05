<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php wp_title('-', true, 'right');
          bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="inner header-inner">
      <h1 class="header-logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.jpg" alt="Engress">
        </a>
      </h1>
      <nav class="header-nav">
        <ul class="header-nav-list">
          <li class="header-nav-item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
          <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
          <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/price')); ?>">コース・料金</a></li>
        </ul>
      </nav>
      <div class="header-tel">
        <p class="header-tel-text">平日08:00〜20:00</p>
        <a href="tel:01234567890" class="header-tel-number">0123-456-7890</a>
      </div>
      <ul class="header-button-list">
        <li class="button header-button-item --download"><a href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a></li>
        <li class="button header-button-item --contact"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
      </ul>
    </div>
  </header>
  <!-- /.header -->

  <div class="hamburger-icon">
    <div class="hamburger-icon-bars">
      <div class="hamburger-icon-bar1"></div>
      <div class="hamburger-icon-bar2"></div>
      <div class="hamburger-icon-bar3"></div>
    </div>
  </div>

  <div class="hamburger-box">
    <div class="hamburger-box-header">
      <div class="hamburger-logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.jpg" alt="Engress">
        </a>
      </div>
    </div>
    <nav class="hamburger-nav">
      <ul class="hamburger-nav-list">
        <li class="hamburger-nav-item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
        <li class="hamburger-nav-item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
        <li class="hamburger-nav-item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
        <li class="hamburger-nav-item"><a href="<?php echo esc_url(home_url('/price')); ?>">コース・料金</a></li>
      </ul>
    </nav>
    <ul class="hamburger-button-list">
      <li class="button hamburger-button-item --download"><a href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a></li>
      <li class="button hamburger-button-item --contact"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
    </ul>
    <div class="hamburger-tel">
      <a href="tel:01234567890" class="hamburger-tel-number">0123-456-7890</a>
      <p class="hamburger-tel-text">平日08:00〜20:00</p>
    </div>
  </div>

  <div class="hamburger-background"></div>
  <!-- /.hamburger -->