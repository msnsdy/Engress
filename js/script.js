jQuery(function ($) {
  new ScrollHint('.js-scrollable', {
    remainingTime: 5000,
    i18n: {
      scrollable: 'スクロールできます'
    }
  });

  /* ハンバーガーメニュー表示 */
  $('.hamburger-icon').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('is-open');
    $('.hamburger-box').toggleClass('is-open');
    $('.hamburger-background').toggleClass('is-open');
    $('body').toggleClass('fixed');
  });

  /* ハンバーガーメニュー非表示 */
  $('.hamburger-background').on('click', function (e) {
    e.preventDefault();
    $(this).removeClass('is-open');
    $('.hamburger-icon').removeClass('is-open');
    $('.hamburger-box').removeClass('is-open');
    $('body').removeClass('fixed');
  })

  /* faqのドロワー*/
  $('.faq-item dt').click(function () {
    $(this).next().slideToggle(200);
    $(this).toggleClass('is-open');
    $(this).next().toggleClass('is-open');
  });
});