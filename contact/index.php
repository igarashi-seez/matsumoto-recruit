<?php
$docRoot = $_SERVER['DOCUMENT_ROOT'];
$pageTitle = "お問い合わせ｜松本信用金庫 採用サイト";
$description = "";
/*include($docRoot . "/assets/inc/config.php");*/
$host = $_SERVER['HTTP_HOST'];
$scriptName = $_SERVER['SCRIPT_NAME'];
$ogpUri = 'https://'.$host.$scriptName;
$ogpType = "article";
?>

<html lang="ja">

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# <?php echo $ogpType; ?>: https://ogp.me/ns/<?php echo $ogpType; ?>#">
  <?php include($docRoot . "/assets/inc/head.php"); ?>
</head>

<body class="l-bg_gr">

<?php include($docRoot . "/assets/inc/header.php"); ?>


<main class="main">
  <div class="contact-ttl-wrap">
    <div class="c-headline01" data-en="CONTACT">
      <h2 class="c-headline01__ttl">お問い合わせ</h2>
    </div><!-- /c-headline01 -->
  </div><!-- /contact-ttl-wrap -->


  <div class="l-contents">

    <p class="contact-lead">採用についてのお問い合わせはお電話もしくはメールにてご連絡ください。</p>

    <section class="l-section">
      <div class="contact-box">
        <div class="contact-box__inner">
          <div class="contact-box__left">
            <div class="contact-tel">
              <p><a href="tel:000-1234-5678">0263-35-0094</a></p>
            </div><!-- /contact-tel -->
            <p class="contact-box__note contact-box__note--tel">受付時間／平日 8:30～17:00</p>
          </div>

          <div class="contact-box__right">
            <div class="contact-mail">
              <p>jinji@matsumoto-shinkin.jp</p>
            </div><!-- /contact-mail -->
            <p class="contact-box__note">松本信用金庫　採用担当</p>
          </div>
        </div>
      </div><!-- /contact-box -->
    </section><!-- /l-section -->

  </div><!-- /l-contents -->

</main>


<?php include($docRoot . "/assets/inc/footer.php"); ?>
<?php include($docRoot . "/assets/inc/footer-script.php"); ?>

</body>

</html>