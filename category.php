<?php get_header(); ?>

<main>
  <section class="mv-lower mv-lower-blog">
    <div class="mv-lower-wrapper">
      <h2 class="mv-lower-title">ブログ</h2>
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

  <section class="archive-blog">
    <div class="inner">
      <h2 class="lower-title">
        <?php
          $cat_name = single_cat_title('', false);
          echo $cat_name."一覧";
        ?>
      </h2>
      <div class="archive-blog-wrapper">
        <ul class="archive-blog-list">
          <?php
          if (have_posts()) : while (have_posts()) : the_post();
          ?>
              <li class="archive-blog-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="archive-blog-item-head">
                    <!-- <div class="category-label archive-blog-item-category">カテゴリ1</div> -->
                    <?php // カテゴリー１つ目の名前を表示
                    $category = get_the_category();
                    if ($category[0]) {
                      echo '<div class="category-label blog-item-category">' . $category[0]->cat_name . '</div>';
                    }
                    ?>
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('large');
                    } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/picture/noimg.png" alt="">';
                    }
                    ?>
                  </div>
                  <div class="archive-blog-item-body">
                    <div class="archive-blog-item-date" datetime="<?php the_date('c'); ?>"><?php the_date('Y-n-j'); ?></div>
                    <h2 class="archive-blog-item-title">
                      <?php
                      if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                        $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                      ?>
                    </h2>
                    <p class="archive-blog-item-text">
                      <?php
                      if (mb_strlen($post->post_content, 'UTF-8') > 80) {
                        $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 80, 'UTF-8'));
                        echo $content . '...';
                      } else {
                        echo str_replace('\n', '', strip_tags($post->post_content));
                      }
                      ?>
                    </p>
                  </div>
                </a>
              </li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
      </div>
      <!-- /.archive-blog-wrapper -->

      <div class="pagination">
        <?php
        echo
        paginate_links(
          array(
            'end_size' => 1,
            'mid_size' => 2,
            'prev_next' => false,
          )
        );
        ?>
        <!-- <span aria-current="page" class="page-number current">1</span>
        <a href="#" class="page-number">2</a>
        <a href="#" class="page-number">3</a>
        <span class="extend">…</span>
        <a href="#" class="page-number">5</a> -->
      </div>
    </div>
  </section>
  <!-- /.archive-price -->

  <?php get_template_part('/template-parts/cta'); ?>
</main>

<?php get_footer(); ?>