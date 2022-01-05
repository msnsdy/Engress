<?php get_header(); ?>

<main>

  <!-- breadcrumb -->
  <div class="breadcrumb">
    <div class="inner">
      <?php bcn_display(); ?>
    </div>
  </div>
  <!-- /.breadcrumb -->

  <section class="single-news">
    <div class="inner">
      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
      <h2 class="single-title single-news-title"><?php the_title(); ?></h2>
      <div class="single-news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-n-j'); ?></div>
      <article class="single-article single-news-article">
        <?php the_content(); ?>
      </article> <!-- /.single-news-article -->
      <?php
        endwhile;
        endif;
      ?>
    </div>
  </section>
  <!-- /.lower-blog -->

  <?php get_template_part('/template-parts/cta'); ?>
</main>

<?php get_footer(); ?>