<?php
$docRoot = $_SERVER['DOCUMENT_ROOT'];
$pageTitle = "松本信用金庫 採用サイト";
$description = "";
/*include($docRoot . "/assets/inc/config.php");*/
$host = $_SERVER['HTTP_HOST'];
$scriptName = $_SERVER['SCRIPT_NAME'];
$ogpUri = 'https://'.$host.$scriptName;
$ogpType = "website";
?>

<html lang="ja">

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# <?php echo $ogpType; ?>: https://ogp.me/ns/<?php echo $ogpType; ?>#">
  <?php include($docRoot . "/assets/inc/head.php"); ?>
</head>

<style>
    #loading{
        background: #fff;
        position: fixed;
        z-index: 10000;
        width: 100%;
        height: 100%;
        left: 0px;
        top: 0px;
    }
    #loading > .inner{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: -moz-linear-gradient(45deg,  rgba(146,254,157,0.7) 0%, rgba(0,201,255,0.7) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(45deg,  rgba(146,254,157,0.7) 0%,rgba(0,201,255,0.7) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(45deg,  rgba(146,254,157,0.7) 0%,rgba(0,201,255,0.7) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b392fe9d', endColorstr='#b300c9ff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    }
    #loading .text{
        display: flex;
        width: 214px;
        justify-content: space-between;
        align-items: center;
        flex-wrap: nowrap;
        flex-direction: row-reverse;
        position: relative;
        top: -80px;
    }
    @media (max-width: 480px) {
        #loading .text{
            transform: scale(0.8);
        }
    }
    #loading .text > i{
        display: block;
        position: relative;
        filter: blur(4px);
        opacity: 0.1;
    }
    #loading .text .loading1{
        width: 38px;
        height: 300px;
        background: url("/assets/img/top/loading1.svg") no-repeat;
        top: -85px;
    }
    #loading .text .loading2{
        width: 36px;
        height: 250px;
        background: url("/assets/img/top/loading2.svg") no-repeat;
        top: -40px;
    }
    #loading .text .loading3{
        width: 39px;
        height: 520px;
        background: url("/assets/img/top/loading3.svg") no-repeat;
        top: 72px;
    }
</style>

<body>

<div id="loading">
    <div class="inner">
        <div class="text">
            <i class="loading1"></i>
            <i class="loading2"></i>
            <i class="loading3"></i>
        </div>
    </div>
</div>


<div class="l-home-wrapper">
  <div class="l-home-wrapper__left l-home-kv">
    <div id="loading2" class="l-home-kv-lead">
      <span class="l-home-kv-lead__line l-home-kv-lead__line--01"><img src="/assets/img/top/kv-lead1.svg" alt="この街の夢を"></span>
      <span class="l-home-kv-lead__line l-home-kv-lead__line--02"><img src="/assets/img/top/kv-lead2.svg" alt="私の想いを"></span>
      <span class="l-home-kv-lead__line l-home-kv-lead__line--03"><img src="/assets/img/top/kv-lead3.svg" alt="実現できる場所がある。"></span>
    </div>
    <div class="l-home-kv-txt">
      <p>MATSUMOTOSHINKIN<br>RECRUITMENT FOR FRESHERS</p>
    </div>
	  <div class="sp-scroll-down">
		  <div class="sp-scroll-down_inner">
			  <p>SCROLL</p>
				<div class="sp-scroll-down_arrow"></div>
		  </div>
	  </div>

  </div><!-- l-home-kv -->

  <div class="l-home-wrapper__right l-home-menu">

    <div class="l-home-menu-logo">
      <h1><img src="/assets/img/common/logo.png" alt="松本信用金庫 採用サイト"><span>RECRUITMENT SITE</span></h1>
    </div><!-- /l-home-menu-logo -->

    <nav class="l-home-menu-main">
      <a href="/about/" class="l-home-menu-main-item l-home-menu-main-item--01">
        <div class="l-home-menu-main-item__tab">For Your Future</div>
        <div class="l-home-menu-main-item__ttl">
          <p><span>地域の未来のために</span></p>
        </div>
      </a>
      <a href="/training/" class="l-home-menu-main-item l-home-menu-main-item--02">
        <div class="l-home-menu-main-item__tab">Training</div>
        <div class="l-home-menu-main-item__ttl l-home-menu-main-item__ttl_fs_sm">
          <p><span>人材育成</span></p>
          <p><span>キャリアステップ</span></p>
        </div>
      </a>
      <a href="/recruit/" class="l-home-menu-main-item l-home-menu-main-item--03">
        <div class="l-home-menu-main-item__tab">Information</div>
        <div class="l-home-menu-main-item__ttl">
          <p><span>採用情報</span></p>
        </div>
      </a>
      <a href="/interview/" class="l-home-menu-main-item l-home-menu-main-item--04">
        <div class="l-home-menu-main-item__tab">Interview</div>
        <div class="l-home-menu-main-item__ttl">
          <p><span>先輩インタビュー</span></p>
        </div>
      </a>
    </nav>

    <nav class="l-home-menu-sub">
      <div class="l-home-menu-sub__item l-home-menu-sub__item--01">
        <a href="/contact/" class="c-btn01 c-btn01--top"><span>CONTACT</span>お問い合わせ</a>
      </div>
      <div class="l-home-menu-sub__item l-home-menu-sub__item--02">
        <a href="https://job.mynavi.jp/24/pc/corpinfo/displayInternship/index?corpId=73016&amp;optNo=Rbhjm" target="_blank" class="c-btn01 c-btn01--top c-btn01--intern"><span>INTERNSHIP</span>インターンシップ</a>
      </div>
      <div class="l-home-menu-sub__item l-home-menu-sub__item--03">
        <a href="https://job.mynavi.jp/24/pc/search/corp73016/outline.html" target="_blank" class="c-btn01 c-btn01--top c-btn01--entry"><span>ENTRY</span>エントリー</a>
      </div>
    </nav>

  </div><!-- /l-home-menu -->

</div><!-- /l-home-wrapper -->

<?php /* include($docRoot . "/assets/inc/footer-script.php"); */ ?>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/jquery.waypoints.min.js"></script>
<script src="/assets/js/animation.js"></script>
<script src="/assets/js/common.js"></script>

</body>

</html>