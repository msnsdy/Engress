<?php get_header(); ?>

<main>
  <section class="mv-lower mv-lower-news">
    <div class="mv-lower-wrapper">
      <h2 class="mv-lower-title">お知らせ</h2>
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

  <section class="archive-news">
    <div class="inner">
      <h2 class="lower-title">お知らせ一覧</h2>
      <ul class="archive-news-list">
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $the_query = new WP_Query(
            $args = array(
              'post_type' => 'news',
              // 'posts_per_page' => 10,
              'orderby' => 'date',
              'order' => 'DESC',
              'paged' => $paged
            )
          );
          if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <li class="archive-news-item">
          <a href="<?php the_permalink(); ?>">
            <div class="archive-news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-n-j'); ?></div>
            <p class="archive-news-title">
              <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 40) {
                  $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
              ?>
            </p>
          </a>
        </li>
        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>

      <div class="pagination">
        <?php
          echo
          paginate_links(
            array(
              'end_size' => 1,
              'mid_size' => 2,
              'prev_next' => false,
              'format' => '?paged=%#%',
              'current' => max(1, $paged),
              'total' => $the_query->max_num_pages
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
  <!-- /.archive-news -->

  <?php get_template_part('/template-parts/cta'); ?>

</main>

<?php get_footer(); ?>