<meta charset="UTF-8">
<title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<meta property="og:type" content="<?php echo $ogpType; ?>">
<meta property="og:url" content="<?php echo $ogpUri; ?>">
<meta property="og:image" content="<?php echo $docRoot; ?>/assets/img/common/ogpimage.jpg">
<meta property="og:title" content="<?php echo $pageTitle; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:locale" content="ja_JP">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K8RJ0WJQFP"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-218766558-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K8RJ0WJQFP');
  gtag('config', 'UA-218766558-1');
</script>

<link rel="icon" href="/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<!-- css -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Work+Sans:ital,wght@0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/slick.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/animation.css">
<link rel="stylesheet" href="/assets/css/menu.css">

<link rel="canonical" href="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $host . $scriptName; ?>">


<script src="/assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
