<?php include 'header/header.php'; ?>

<div class="w-4/5 phone:w-[calc(100%-32px)] max-w-6xl mx-auto m-10 py-10 phone:py-4">

  <?php include 'club/club.php'; ?>

  <div class="mt-16"></div>
  <?php
  $title = "レンタルシューズ";
  $description = "運動に適した服装でご来場いただければレッスンは可能ですが、お仕事帰りやお出かけ帰りにもご利用いただきやすいようにレンタルシューズもご用意しております。";
  $image = $absoluteUriPath . '/asset/rental/shoes.png';
  $button = null;
  include $uiPartsPath . '/card/card.php';
  ?>

  <div class="mt-16"></div>

  <?php
  $title = "レンタルグローブ";
  $description = "レンタルグローブは男性用のほかレディースサイズとジュニアサイズもご用意。
  グローブを忘れてしまった、レッスン中に破れてしまったなどのトラブルがあった際はご利用ください。";
  $image = $absoluteUriPath . '/asset/rental/glove.png';
  $button = null;
  include $uiPartsPath . '/card/card.php';
  ?>

</div>

<?php include $uiPartsPath . '/access/map.php'; ?>