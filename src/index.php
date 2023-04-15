<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ゴルフレッスンサイト</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text x=%2250%%22 y=%2250%%22 style=%22dominant-baseline:central;text-anchor:middle;font-size:90px;%22>⛳️</text></svg>">
  <link rel="stylesheet" href="./dist/output.css" />
  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
  <!-- パスの定義 -->
  <?php
  $absolutePath = __DIR__; // 絶対パス
  $assetPath = $absolutePath . '/asset';
  $uiPartsPath = $absolutePath . '/components/ui_parts' // ui_parts
  ?>



  <?php include './components/header/header.php'; ?>
  <?php include './components/content/content.php'; ?>
  <?php include './components/footer/footer.php'; ?>
</body>

</html>