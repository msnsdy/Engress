<?php get_header(); ?>

  <main>
    <!-- breadcrumb -->
    <div class="breadcrumb">
      <div class="inner">
        <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" href="./index.html" class="home"><span property="name">ホーム</span></a>
          <meta property="position" content="1">
        </span>
        <span class="angle-right">＞</span>
        <span class="current-item">送信完了</span>
      </div>
    </div>
    <!-- /.breadcrumb -->

    <section class="contact">
      <div class="inner contact-inner">
        <p class="contact-thanks-message">
          お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします
        </p>
        <div class="contact-thanks-link">
          <a href="<?php echo esc_url(home_url()); ?>">ホームへ戻る</a>
        </div>
      </div>
    </section>
    <!-- /.contact -->
  </main>

  <?php get_footer(); ?>