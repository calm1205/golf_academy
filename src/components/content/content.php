<!-- コンテンツ ヘッダー -->
<div class="absolute top-[48px] w-full">
  <img src='./asset/golf.jpg' alt="" class="h-52 w-full object-cover">
  <div class="absolute top-0 flex justify-center items-center h-full w-full">

    <div class=" w-4/5">
      <h2 class="text-white text-lg font-bold">After Golf Studio</h2>
      <hr class=" border border-solid border-white" />
    </div>
  </div>
</div>
<div class="h-80"></div>

<div class="h-28 flex justify-center items-center">
  [未]ゴルフをこれから始める人も！
  もっと上達したい人も！ 大歓迎！
</div>

<?php
$title = 'After Golf Studioのご紹介';
$children = file_get_contents($absolutePath . '/components/content/introduction/introduction.php');
include $uiPartsPath . '/section/section.php' ?>

<?php
$title = 'レッスンスタッフのご紹介';
$children = file_get_contents($absolutePath . '/components/content/lessonStaff/lessonStaff.php');
include $uiPartsPath . '/section/section.php' ?>

<?php
$title = '手ぶらでレッスン受講が可能!';
$children = file_get_contents($absolutePath . '/components/content/handFree/handFree.php');
include $uiPartsPath . '/section/section.php' ?>

<?php
$title = 'ジュニアゴルフレッスンも大募集!';
$children = file_get_contents($absolutePath . '/components/content/junior/junior.php');
include $uiPartsPath . '/section/section.php' ?>

<?php
$title = 'ゴルファー専門整体も併設';
$children = file_get_contents($absolutePath . '/components/content/chiropractor/chiropractor.php');
include $uiPartsPath . '/section/section.php' ?>

<?php
$title = 'ニュース';
ob_start();
include $absolutePath . '/components/content/news/news.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php' ?>