<?php get_header(); ?>

<main>
  <section class="mv-lower mv-lower-contact">
    <div class="mv-lower-wrapper">
      <h2 class="mv-lower-title">お問い合わせ・資料請求</h2>
    </div>
  </section>
  <!-- /.mv-lower -->

  <!-- breadcrumb -->
  <div class="breadcrumb">
    <div class="inner">
      <?php bcn_display(); ?>
    </div>
  </div>
  <!-- /.breadcrumb -->

  <section class="contact">
    <div class="inner contact-inner">
      <p class="contact-message">
        弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
      </p>
      <div class="contact-box">
        <?php echo do_shortcode('[mwform_formkey key="2287"]'); ?>
      </div>
    </div>

  </section>
  <!-- /.contact -->
</main>

<?php get_footer(); ?>