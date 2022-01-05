<?php

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  set_post_thumbnail_size(760, 485);
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('scroll-hint', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), '1.0.0', 'all');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('scroll-hint', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * カテゴリーを1つだけ表示
 *
 * @param boolean $anchor aタグで出力するかどうか.
 * @param integer $id 投稿id.
 * @return void
 */

function my_the_post_category($anchor = true, $id = 0)
{
  global $post;
  //引数が渡されなければ投稿IDを見るように設定
  if (0 === $id) {
    $id = $post->ID;
  }

  //カテゴリー一覧を取得
  $this_categories = get_the_category($id);
  if ($this_categories[0]) {
    if ($anchor) { //引数がtrueならリンク付きで出力
      echo '<a href="' . esc_url(get_category_link($this_categories[0]->term_id)) . '">' . esc_html($this_categories[0]->cat_name) . '</a>';
    } else { //引数がfalseならカテゴリー名のみ出力
      echo esc_html($this_categories[0]->cat_name);
    }
  }
}

/**
 * 新固定ページ命名規則
 * 子ページ（download-thanks,contact-thanks）を
 * テンプレートファイルとして認識させる
 */
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates)
{
  global $wp_query;

  $template = get_page_template_slug();
  $pagename = $wp_query->query['pagename'];

  if ($pagename && !$template) {
    $pagename = str_replace('/', '-', $pagename);
    $decoded = urldecode($pagename);

    if ($decoded == $pagename) {
      array_unshift($templates, "page-{$pagename}.php");
    }
  }

  return $templates;
}

/**
 * WP Mail SMTPでメール送信元が効かなかったので設定。（証明書エラーとは関係ない）
 */
add_filter('wp_mail_from', function () {
  return 'info@gmail.com'; // 送信元メールアドレス
});

// これ以降が証明書エラーのための設定。
function my_wp_mail_smtp_custom_options($phpmailer)
{
  if (isset($phpmailer->SMTPAuth)) {
    if ($phpmailer->SMTPAuth == true) {
      $phpmailer->SMTPOptions = array('ssl' =>
      array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      ));
    }
  }
  return $phpmailer;
}
add_filter("wp_mail_smtp_custom_options", "my_wp_mail_smtp_custom_options");

/* お問い合わせフォーム 入力チェックエラー文言のカスタマイズ */
function my_error_message($error, $key, $rule)
{
  if ($key === 'your-company' && $rule === 'noempty') {
    return '会社名が入力されていません';
  }
  if ($key === 'your-name' && $rule === 'noempty') {
    return '氏名が入力されていません';
  }
  if ($key === 'your-email' && $rule === 'noempty') {
    return 'メールアドレスが入力されていません';
  }
  if ($key === 'your-tel' && $rule === 'noempty') {
    return '電話番号が入力されていません';
  }
  if ($key === 'your-select' && $rule === 'required') {
    return 'お問いわせ種別が選択されていません';
  }
  if ($key === 'your-comment' && $rule === 'noempty') {
    return 'お問い合わせ内容が入力されていません';
  }
  if ($key === 'your-privacy' && $rule === 'required') {
    return 'プライバシーポリシーがチェックされていません';
  }
  return $error;
}
add_filter('mwform_error_message_mw-wp-form-2287', 'my_error_message', 10, 3);

add_filter('mwform_content_wpautop_mw-wp-form-2287', '__return_false');

// Breacrumb navXT のトップページの表記を書き換える
function nskw_bcn_breadcrumb_title_filter($title, $type = null)
{
  
  if (is_page('price')) {
    $title = '料金体系';
  }

  if (is_post_type_archive('news')) {
    $title = 'お知らせ';
  }

  if ('home' === $type[0]) {
    $title = 'ホーム';
  }

  return $title;
}
add_filter('bcn_breadcrumb_title', 'nskw_bcn_breadcrumb_title_filter', 10, 2);
