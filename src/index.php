<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- パスの定義 -->
  <?php
  $absoluteIncludePath = get_template_directory();
  $absoluteUriPath = get_template_directory_uri();
  $featuresPath = $absoluteIncludePath . '/components/features';
  $uiPartsPath = $absoluteIncludePath . '/components/ui_parts';
  ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>After Golf Studio</title>
  <link rel="icon" type="image/svg+xml" href='<?php echo $absoluteUriPath ?>/asset/logo.svg' />
  <link rel="stylesheet" href="<?php echo $absoluteUriPath ?>/style.css" />
  <link rel="stylesheet" href="<?php echo $absoluteUriPath ?>/tailwind.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- header -->
<?php include $uiPartsPath . '/header/header.php'; ?>

<body>
  <?php $path = $_SERVER['REQUEST_URI'] ?>
  <?php if (strstr($path, 'rental')) : ?>
    <?php include $featuresPath . '/rental/rental.php'; ?>
  <?php elseif (strstr($path, 'facility')) : ?>
    <?php include $featuresPath . '/facility/facility.php'; ?>
  <?php else :  ?>
    <?php include $featuresPath . '/top/content.php'; ?>
  <?php endif; ?>
</body>

<!-- footer -->
<?php include $uiPartsPath . '/footer/footer.php'; ?>

</html>