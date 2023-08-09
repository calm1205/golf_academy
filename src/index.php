<!DOCTYPE html>
<html lang="ja">

<head>
  <?php
  // パス定義
  $absoluteIncludePath = get_template_directory();
  $absoluteUriPath = get_template_directory_uri();
  $featuresPath = $absoluteIncludePath . '/components/features';
  $uiPartsPath = $absoluteIncludePath . '/components/ui_parts';
  ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ゴルトモアカデミー</title>
  <link rel="icon" type="image/png" href='<?php echo $absoluteUriPath ?>/asset/favicon.png' />
  <link rel="stylesheet" href="<?php echo $absoluteUriPath ?>/style.css" />
  <link rel="stylesheet" href="<?php echo $absoluteUriPath ?>/tailwind.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<?php include $uiPartsPath . '/header/header.php'; ?>


<body>
  <div class="bg-[url('asset/top/backgroundLogo.png')] bg-[50%] bg-repeat opacity-5 h-screen w-screen fixed top-0 z-0"></div>
  <div class="relative top-0 z-10">
    <?php
    $path = $_SERVER['REQUEST_URI'];

    if (strstr($path, 'rental')) : include $featuresPath . '/rental/rental.php';
    elseif (strstr($path, 'facility')) : include $featuresPath . '/facility/facility.php';
    elseif (strstr($path, 'prices')) : include $featuresPath . '/prices/prices.php';
    elseif (strstr($path, 'coaches')) : include $featuresPath . '/coaches/coaches.php';
    elseif (strstr($path, 'inquiry')) : include $featuresPath . '/inquiry/inquiry.php';
    elseif (strstr($path, 'news')) : include $featuresPath . '/news/news.php';
    else : include $featuresPath . '/top/top.php';
    endif;
    ?>
</body>

<?php include $uiPartsPath . '/footer/footer.php'; ?>

</html>