<?php
$docRoot = $_SERVER['DOCUMENT_ROOT'];
$pageTitle = "採用情報｜松本信用金庫 採用サイト";
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
  <div class="recruit-ttl-wrap">
    <div class="c-headline01" data-en="INFORMATION">
      <h2 class="c-headline01__ttl">採用情報</h2>
    </div><!-- /c-headline01 -->
  </div><!-- /recruit-ttl-wrap -->

	
<div class="l-bottom-links recuruit_btn">
  <div class="recuruit_btn__inner">
    <div class="l-bottom-links__item">
      <a href="https://recruit.m-shinkin.com/recruit/new-graduate/" class="c-btn-recruit"><div class="c-btn-recruit__inner"><span>New graduate</span>新卒採用情報</div></a>
    </div>
	 <div class="l-bottom-links__item">
      <a href="https://recruit.m-shinkin.com/recruit/career/" class="c-btn-recruit"><div class="c-btn-recruit__inner"><span>Career</span>中途採用情報</div></a>
    </div>
  </div>
</div><!-- /l-bottom-links -->

</main>


<?php include($docRoot . "/assets/inc/footer_recruit.php"); ?>
<?php include($docRoot . "/assets/inc/footer-script.php"); ?>

</body>

</html>