<?php include __DIR__ . '/top/top.php' ?>

<div class="mt-12">
  <?php include 'balloon/balloon.php'; ?>
  <p class="text-center whitespace-pre-line mt-3">
    最新のトラックマンを導入した高精度な打球の分析と、
    ツアープロによるマンツーマンレッスンで、
    あなたのゴルフ上達を強力にサポート！<br />
    After Golf Studioは、ゴルフを愛する全ての人を応援します。
  </p>
</div>

<?php
$title = 'After Golf Studioのご紹介';
ob_start();
include 'introduction/introduction.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = 'レッスンスタッフのご紹介';
ob_start();
include 'lessonStaff/lessonStaff.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = '手ぶらでレッスン受講が可能!';
ob_start();
include 'handFree/handFree.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = 'ジュニアゴルフレッスンも大募集!';
ob_start();
include 'junior/junior.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php' ?>

<?php
$title = 'ゴルファー専門整体も併設';
ob_start();
include 'chiropractor/chiropractor.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php' ?>

<?php
$title = 'ニュース';
ob_start();
include $absoluteIncludePath . '/components/content/news/news.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php' ?>

<?php include $uiPartsPath . '/guidance/guidance.php'; ?>
<?php include $uiPartsPath . '/access/map.php'; ?>