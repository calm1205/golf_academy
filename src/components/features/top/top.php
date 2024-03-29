<?php include 'header/header.php' ?>

<div class="mt-12 px-4">
  <?php include $uiPartsPath . '/balloon/balloon.php'; ?>
  <p class="text-center whitespace-pre-line mt-3">
    最新のトラックマンを導入した高精度な打球の分析と、
    ツアープロによるマンツーマンレッスンで、
    あなたのゴルフ上達を強力にサポート！
    ゴルトモアカデミーは、ゴルフを愛する全ての人を応援します。
  </p>
</div>

<div class="flex flex-col mt-14">
  <?php
  ob_start();
  include 'introduction/introduction.php';
  $children = ob_get_clean();
  $title = 'ゴルトモアカデミーのご紹介';
  include $uiPartsPath . '/section/section.php'
  ?>

  <?php
  ob_start();
  include 'lessonStaff/lessonStaff.php';
  $children = ob_get_clean();
  $title = 'レッスンスタッフのご紹介';
  include $uiPartsPath . '/section/section.php'
  ?>

  <?php
  ob_start();
  include 'facilityIntro/facilityInfo.php';
  $children = ob_get_clean();
  $title = '施設案内';
  include $uiPartsPath . '/section/section.php'
  ?>

  <?php
  ob_start();
  include 'news/news.php';
  $children = ob_get_clean();
  $title = 'ニュース・お知らせ';
  include $uiPartsPath . '/section/section.php'
  ?>
</div>

<?php include $uiPartsPath . '/guidance/guidance.php'; ?>
<?php include $uiPartsPath . '/access/map.php'; ?>