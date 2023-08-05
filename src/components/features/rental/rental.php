<?php include 'header/header.php'; ?>

<div class="w-4/5 phone:w-[calc(100%-32px)] max-w-6xl mx-auto m-10 py-10 phone:py-4">

  <?php include 'club/club.php'; ?>

  <div class="mt-16"></div>
  <?php
  $title = "レンタルシューズ";
  $description = "レンタルシューズも各サイズご用意しております。
  サンダルやブーツで来場いただいても、シューズを履き替えてレッスンを受講いただけます。";
  $image = $absoluteUriPath . '/asset/rental/shoes.png';
  $button = null;
  include $uiPartsPath . '/card/card.php'; ?>

  <div class="mt-16"></div>
  <?php
  $title = "レンタルグローブ";
  $description = "レンタルグローブは男性用のほかレディースサイズとジュニアサイズもご用意。
  グローブを忘れてしまった、レッスン中に破れてしまったなどのトラブルがあった際はご利用ください。";
  $image = $absoluteUriPath . '/asset/rental/glove.png';
  $button = null;
  include $uiPartsPath . '/card/card.php'; ?>

</div>

<?php include $uiPartsPath . '/access/map.php'; ?>