<?php get_header(); ?>

<main>

  <!-- breadcrumb -->
  <div class="breadcrumb">
    <div class="inner">
      <?php bcn_display(); ?>
    </div>
  </div>
  <!-- /.breadcrumb -->

  <section class="single-blog">
    <div class="inner single-blog-inner">
      <div class="single-blog-main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="category-single single-blog-category">
              <?php my_the_post_category(true); ?>
            </div>
            <h2 class="single-title single-blog-title"><?php the_title(); ?></h2>
            <div class="single-blog-meta">
              <div class="single-blog-entry-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-n-j'); ?></div>
              <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
            </div>
            <div class="single-blog-thumbnail">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('large');
              } else {
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/picture/noimg.png" alt="">';
              }
              ?>
            </div>
            <article class="single-article single-blog-article">
              <?php the_content(); ?>
            </article> <!-- /.single-blog-article -->
        <?php
          endwhile;
        endif;
        ?>

        <div class="single-recommend">
          <h2 class="single-recommend-title">おすすめの記事</h2>
          <ul class="single-recommend-list">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'tag' => 'pickup',
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $posts = get_posts($args);
            foreach ($posts as $post) : setup_postdata($post);
            ?>
              <li class="single-recommend-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="single-recommend-item-head">
                    <?php
                    $category = get_the_category();
                    if ($category[0]) {
                      echo '<div class="category-label single-recommend-item-category">' . $category[0]->cat_name . '</div>';
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
                  <div class="single-recommend-item-body">
                    <div class="single-recommend-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-n-j'); ?></div>
                    <p class="single-recommend-item-title">
                      <?php
                      if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                        $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                      ?>
                    </p>
                  </div>
                </a>
              </li>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
          </ul>
        </div> <!-- /.single-recommend -->
      </div>
      <!-- /.single-blog-main -->


      <aside class="widget">
        <div class="widget-related">
          <h2 class="widget-title">関連記事</h2>
          <ul class="widget-list">
            <?php if (has_category()) {
              $post_cats = get_the_category();
              $cat_ids = array();
              foreach ($post_cats as $cat) {
                $cat_ids[] = $cat->term_id;
              }
            }

            $myposts  = get_posts(array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'post__not_in' => array($post->ID),
              'category__in' => $cat_ids,
              'orderby' => 'rand'
            ));
            if ($myposts) : ?>
              <?php foreach ($myposts as $post) : setup_postdata($post); ?>
                <li class="widget-item">
                  <a href="<?php the_permalink(); ?>">
                    <div class="widget-item-head">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                      } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/picture/noimg.png" alt="">';
                      }
                      ?>
                    </div>
                    <div class="widget-item-body">
                      <p class="widget-item-title">
                        <?php
                        if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                          $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                          echo $title . '...';
                        } else {
                          echo $post->post_title;
                        }
                        ?>
                      </p>
                    </div>
                  </a>
                </li>
              <?php
              endforeach;
            else :
              echo '関連記事はありません';
              ?>
            <?php
            endif;
            wp_reset_postdata();
            ?>
          </ul>
        </div> <!-- widget-related -->

        <div class="widget-category">
          <h2 class="widget-title">カテゴリー</h2>
          <ul class="widget-category-list">
            <?php
            $args = array(
              'parent' => 0,
              'orderby' => 'title',
              'order' => 'ASC'
            );
            $categories = get_categories($args);
            foreach ($categories as $category) :
            ?>
              <li class="widget-category-item"><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div> <!-- widget-category -->
      </aside>
      <!-- /.widget-blog-aside -->
    </div>
  </section>
  <!-- /.lower-blog -->

  <?php get_template_part('/template-parts/cta');  ?>
</main>

<?php get_footer();  ?>