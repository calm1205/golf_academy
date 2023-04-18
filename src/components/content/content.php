<?php include __DIR__ . '/top/top.php' ?>

<div class="h-80"></div>

<?php include 'baloon/baloon.php'; ?>
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


<div class="w-4/5 mx-auto my-20">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4775.708365596702!2d-122.27141947242467!3d38.34834107527733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80850400b7f7d393%3A0x95218919c7014838!2z44K344Or44OQ44Op44O844OJ44O744Oq44K-44O844OI44O744Ki44Oz44OJ44O744K544OR!5e0!3m2!1sja!2sjp!4v1681611742874!5m2!1sja!2sjp" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

<?php
$button = 'レンタル用品一覧を見る';
include $uiPartsPath . '/button/button.php'
?>

<?php include 'guidance/guidance.php'; ?>