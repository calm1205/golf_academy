<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- パスの定義 -->
  <?php
  $absoluteIncludePath = get_template_directory();
  $absoluteUriPath = get_template_directory_uri();
  $uiPartsPath = $absoluteIncludePath . '/components/ui_parts'
  ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>After Golf Studio</title>
  <link rel="icon" type="image/svg+xml" href='<?php echo $absoluteUriPath ?>/asset/logo.svg' />
  <link rel="stylesheet" href="<?php echo $absoluteUriPath ?>/style.css" />
  <link rel="stylesheet" href="<?php echo $absoluteUriPath ?>/global.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <?php include $absoluteIncludePath . '/components/header/header.php'; ?>
  <?php include $absoluteIncludePath . '/components/content/content.php'; ?>
  <?php include $absoluteIncludePath . '/components/footer/footer.php'; ?>
</body>

</html>