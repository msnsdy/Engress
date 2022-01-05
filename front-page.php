<?php get_header(); ?>

<main>
  <section class="mv">
    <div class="mv-box">
      <h2 class="mv-title">TOEFL対策はEngress</h2>
      <p class="mv-text">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
      <div class="button mv-button">
        <a href="<?php echo esc_url(home_url('/contact')) ?>">資料請求</a>
      </div>
      <div class="mv-link">
        <a href="<?php echo esc_url(home_url('/contact')) ?>">お問い合わせ</a>
      </div>
    </div>
  </section>
  <!-- /.mv -->

  <section class="intro">
    <div class="inner">
      <div class="intro-problem">
        <h2 class="section-title -white intro-problem-title">TOEFL学習で<br class="is-pc-hidden">こんな悩みありませんか？</h2>
        <ul class="intro-problem-list">
          <li class="intro-problem-item"><span>勉強の習慣が<br class="is-sp-hidden">身についていない</span></li>
          <li class="intro-problem-item"><span>勉強しているはず<br class="is-sp-hidden">なのに点数が伸びない</span></li>
          <li class="intro-problem-item"><span>正しい勉強方法が<br class="is-sp-hidden">わからない</span></li>
        </ul>
      </div>
      <div class="intro-solution">
        <div class="intro-solution-box">
          <h2 class="section-title intro-solution-title">
            Engressは<br><span>TOEFLに特化したスクール</span>です
          </h2>
          <div class="intro-solution-text">
            完全オーダーメイドで、<br class="is-pc-hidden">１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.intro -->

  <section class="feature">
    <div class="inner">
      <h2 class="section-title">TOEFL対策に特化した<br class="is-pc-hidden">Engress3つの強み</h2>
      <div class="feature-wrapper">
        <div class="feature-box">
          <div class="feature-info">
            <div class="feature-info-label">特長 １</div>
            <p class="feature-info-title">
              TOEFLに最適化された<br>無駄のないカリキュラム
            </p>
            <p class="feature-info-text">
              TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
            </p>
          </div>
          <div class="feature-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/img/picture/feature01.jpg" alt="">
          </div>
        </div>
        <div class="feature-box">
          <div class="feature-info">
            <div class="feature-info-label">特長 ２</div>
            <p class="feature-info-title">
              日本人指導歴10年以上の<br>経験豊富な講師陣
            </p>
            <p class="feature-info-text">
              Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
            </p>
          </div>
          <div class="feature-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/img/picture/feature02.jpg" alt="">
          </div>
        </div>
        <div class="feature-box">
          <div class="feature-info">
            <div class="feature-info-label">特長 ３</div>
            <p class="feature-info-title">
              平均3ヶ月でTOEFL iBT20点アップ
            </p>
            <p class="feature-info-text">
              Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
            </p>
          </div>
          <div class="feature-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/img/picture/feature03.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.feature -->

  <section class="price">
    <div class="price-box">
      <h2 class="price-title">Engressの料金プランはこちら</h2>
      <div class="price-button"><a href="<?php echo esc_url(home_url('/price')); ?>">料金を見てみる</a></div>
    </div>
  </section>
  <!-- /.price -->

  <section class="case">
    <div class="inner case-inner">
      <h2 class="section-title -white">TOEFL成功事例</h2>
      <?php
        $model01_id = get_page_by_path('model01', null, 'case');
        $model01_id = $model01_id->ID;
        $model02_id = get_page_by_path('model02', null, 'case');
        $model02_id = $model02_id->ID;
        $model03_id = get_page_by_path('model03', null, 'case');
        $model04_id = $model03_id->ID;
      ?>
      <ul class="case-list">
        <li class="case-item">
          <p class="case-item-head">
            <?php the_field('message', $model01_id); ?>
            <!-- TOEFL iBT 100点を突破して<span>コロンビア大学大学院に進学できました！</span> -->
          </p>
          <div class="case-item-picture" style="background-image: url(<?php the_field('model', $model01_id); ?>);"></div>
          <div class="case-item-body">
            <div class="case-item-profile">
              <p class="case-item-business"><?php the_field('business', $model01_id); ?></p>
              <p class="case-item-name"><?php the_field('name', $model01_id); ?></p>
            </div>
            <p class="case-item-result"><?php the_field('result', $model01_id); ?></p>
          </div>
        </li>
        <li class="case-item">
          <p class="case-item-head">
          <?php the_field('message', $model02_id); ?>
          </p>
          <div class="case-item-picture" style="background-image: url(<?php the_field('model', $model02_id); ?>);"></div>
          <div class="case-item-body">
            <div class="case-item-profile">
              <p class="case-item-business"><?php the_field('business', $model02_id); ?></p>
              <p class="case-item-name"><?php the_field('name', $model02_id); ?></p>
            </div>
            <p class="case-item-result"><?php the_field('result', $model02_id); ?></p>
          </div>
        </li>
        <li class="case-item">
          <p class="case-item-head"><?php the_field('message', $model03_id); ?></p>
          <div class="case-item-picture" style="background-image: url(<?php the_field('model', $model03_id); ?>);"></div>
          <div class="case-item-body">
            <div class="case-item-profile">
              <p class="case-item-business"><?php the_field('business', $model03_id); ?></p>
              <p class="case-item-name"><?php the_field('name', $model03_id); ?></p>
            </div>
            <p class="case-item-result"><?php the_field('result', $model03_id); ?></p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- /.case -->

  <section class="flow">
    <div class="inner">
      <h2 class="section-title">ご利用の流れ</h2>
      <dl class="flow__dl">
        <dt><span>01</span>お問い合わせ</dt>
        <dd>まずはフォームまたはお電話からお申し込みください。</dd>
        <dt><span>02</span>ヒアリング</dt>
        <dd>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</dd>
        <dt><span>03</span>学習プランのご提供</dt>
        <dd>目標達成のために最適な学習プランをご提案致します。</dd>
        <dt><span>04</span>ご入会</dt>
        <dd>お申込み完了後、レッスンがスタートします。</dd>
      </dl>
    </div>
  </section>
  <!-- /.flow -->

  <section class="faq">
    <div class="inner">
      <h2 class="section-title">よくある質問</h2>
      <dl class="faq__dl">
        <div class="faq-item">
          <dt>Engressはサラリーマンでも学習を続けられるでしょうか？</dt>
          <dd>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dd>
        </div>
        <div class="faq-item">
          <dt>教材はオリジナルのものを使用しているのでしょうか？</dt>
          <dd>オリジナルのものを使用しております。定期的に教材の更新も行っておりますので、最新情報をご提供させていただきます。</dd>
        </div>
        <div class="faq-item">
          <dt>講師に日本人はいますか？</dt>
          <dd>日本人講師も在籍しております。何か質問がございましたら、お気軽にご相談ください。</dd>
        </div>
        <div class="faq-item">
          <dt>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</dt>
          <dd>申し訳ございません。TOEFL対策専門のため、TOEFL以外のサポートは行っておりません。</dd>
        </div>
      </dl>
    </div>
  </section>
  <!-- /.faq -->

  <section class="archive">
    <div class="inner archive-inner">
      <div class="blog">
        <h2 class="archive-title">ブログ</h2>
        <ul class="blog-list">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $posts = get_posts($args);
            foreach ($posts as $post) : setup_postdata($post);
          ?>
          <li class="blog-item">
            <a href="<?php the_permalink(); ?>">
              <div class="blog-item-head">
                <?php
                  $category = get_the_category();
                  if ($category[0]) {
                    echo '<div class="category-label blog-item-category">' . $category[0]->cat_name . '</div>';
                  }
                ?>
                <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                  } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/picture/noimg.png" alt="">';
                  }
                ?>
              </div>
              <div class="blog-item-body">
                <p class="blog-item-title">
                  <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                  ?>
                </p>
                <div class="blog-item-date" datetime="<?php the_time('c') ?>"><?php the_time('Y-n-j'); ?></div>
              </div>
            </a>
          </li>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
        </ul>
      </div> <!-- /.blog -->
      <div class="news">
        <h2 class="archive-title">お知らせ</h2>
        <ul class="news-list">
        <?php
          $the_query = new WP_Query(
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
        ?>
        <?php while ($the_query->have_posts()) : ?>
          <?php $the_query->the_post(); ?>
          <li class="news-item">
            <a href="<?php the_permalink(); ?>">
              <div class="news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-n-j'); ?></div>
              <p class="news-title">
                <?php
                  if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                    $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
                ?>
              </p>
            </a>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        </ul>
      </div> <!-- /.news -->
    </div>
  </section>
  <!-- /.archive -->

  <?php get_template_part('/template-parts/cta'); ?>

</main>

<?php get_footer(); ?>