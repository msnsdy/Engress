<?php get_header(); ?>

<main>
  <section class="mv-lower mv-lower-price">
    <div class="mv-lower-wrapper">
      <h2 class="mv-lower-title">コース・料金</h2>
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

  <section class="lower-price">
    <div class="inner">
      <div class="price-system">
        <h2 class="lower-title">料金体系</h2>
        <div class="price-system-wrapper">
          
          <div class="price-system-box">
            <p>入会金 39,800円</p>
          </div>
          <div class="price-system-box">
            <p>月額費用</p>
          </div>
        </div>
        <p class="price-system-text">
          Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
        </p>
      </div> <!-- /.price-system -->
      <div class="price-table">
        <h2 class="lower-title">料金表</h2>
        <ul class="price-table-list js-scrollable">
          <?php
            $basic_id = get_page_by_path('basic', null, 'plan-price');
            $basic_id = $basic_id->ID;
            $advance_id = get_page_by_path('advance', null, 'plan-price');
            $advance_id = $advance_id->ID;
            $measures_id = get_page_by_path('measures', null, 'plan-price');
            $measures_id = $measures_id->ID;
            $flex_id = get_page_by_path('flex', null, 'plan-price');
            $flex_id = $flex_id->ID;
          ?>
          <li class="price-table-item">
            <div class="price-table-head">
              <p class="price-table-plan">基礎プラン</p>
            </div>
            <div class="price-table-body">
              <p class="price-table-price"><span class="is-accent"><?php the_field('plan-price', $basic_id); ?></span><span>*月額（税抜価格）</span></p>
              <div class="price-table-feature -check">
                <p>カリキュラム作成</p>
                <p>TOEFL学習サポート</p>
                <p>週一回のビデオMTG</p>
              </div>
            </div>
          </li>
          <li class="price-table-item">
            <div class="price-table-head">
              <p class="price-table-plan">演習プラン</p>
            </div>
            <div class="price-table-body">
              <p class="price-table-price"><span class="is-accent"><?php the_field('plan-price', $advance_id); ?></span><span>*月額（税抜価格）</span></p>
              <div class="price-table-feature -check">
                <p>カリキュラム作成</p>
                <p>TOEFL学習サポート</p>
                <p>週一回のビデオMTG</p>
                <p>月二回の模試（解説付き）</p>
              </div>
            </div>
          </li>
          <li class="price-table-item -recommend">
            <div class="price-table-head">
              <p class="price-table-plan">おすすめ<span>志望校対策プラン</span></p>
            </div>
            <div class="price-table-body">
              <p class="price-table-price"><span class="is-accent"><?php the_field('plan-price', $measures_id); ?></span><span>*月額（税抜価格）</span></p>
              <div class="price-table-feature -check">
                <p>カリキュラム作成</p>
                <p>TOEFL学習サポート</p>
                <p>週一回のビデオMTG</p>
                <p>月二回の模試（解説付き）</p>
                <p>週一の英語面接対策</p>
              </div>
            </div>
          </li>
          <li class="price-table-item">
            <div class="price-table-head">
              <p class="price-table-plan">フレックスプラン</p>
            </div>
            <div class="price-table-body">
              <p class="price-table-price"><span class="is-accent"><?php the_field('plan-price', $flex_id); ?></span><span>*月額（税抜価格）</span></p>
              <div class="price-table-feature">
                <p>＊別途ご相談ください</p>
              </div>
            </div>
          </li>
        </ul>
      </div> <!-- /.list -->
    </div>
  </section>
  <!-- /.lower-price -->

  <?php get_template_part('/template-parts/cta'); ?>
</main>

<?php get_footer(); ?>