//画面幅360以下だと縮小
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();


//トップへ戻るボタン
$(document).ready(function() {
  var pageTop = $('.c-page-top');

  pageTop.hide();
  $(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });

  //スムーススクロール設定
  var headerHeight = $('header').outerHeight();
  var urlHash = location.hash;

  //別ページからのリンク時
  if(urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $('body,html').stop().animate({scrollTop:position}, 500);
    }, 100);
  }

  //ページ内リンク時
  $('a[href^="#"]').click(function(){
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 500);
    return false;
  });
});



//先輩インタビュー詳細ページの一覧スライダー
$(document).ready(function(){
  $('.slider-interview-list').slick({
    autoplay: true, //自動再生
    autoplaySpeed: 5000, //自動再生速度
    infinite: true, //スライドをループ
    slidesToShow: 3, //表示スライド数
    slidesToScroll: 1, //スクロールスライド数
    prevArrow: '<div class="slider-interview-prev"></div>',
    nextArrow: '<div class="slider-interview-next"></div>',

    responsive: [{
      breakpoint: 1025, //1024px以下の場合
      settings: {
        slidesToShow: 2
      }
    },{
      breakpoint: 481, //480px以下の場合
      settings: {
        slidesToShow: 1
      }
    }]
  });
});


//ハンバーガーメニュー
$('#triggerAnimateHamb').on('click',function(){
  $(".l-hamb").show();
  setTimeout(function (){
    $("body").addClass("hambAnimateActive");
  }, 10)
});

$('#triggerAnimateHambClose').on('click',function(){
  $("body").removeClass("hambAnimateActive");
  setTimeout(function (){
    $(".l-hamb").hide();
  }, 500)
});

// Way animate
setTimeout(function () {
  var waypoints = jQuery('.wayTrigger').waypoint(function(direction) {
    $(this.element).addClass("wayActive");
  }, {
    offset: '70%'
  });
}, 200);

// スクロールアニメーション
$(".wayTrigger").each(function (i){
  $(this).find(".wayItem").each(function (i){
    delay = i/4;
    $(this).css("transitionDelay",delay + "s");
    console.log(this);
  });
});
