<?php
$trackman = 'トラックマンを採用した2打席のシミュレーター打席をご用意。
  ヘッドスピード・打ち出し角度・スピン量を確認しながらレッスンをおこないます。';
$lesson = 'After Golf Studioではツアーの最前線で活躍するプロゴルファーの上質なレッスンをマンツーマンで受けることができます。'
?>

<?php
// desktop 
?>
<div class="pt-16 pb-[100px] flex phone:hidden flex-col gap-10">
  <?php
  $title = "トラックマンを使用した最新鋭の練習設備";
  $description = $trackman;
  $image = $absoluteUriPath . '/asset/introduction/trackman.png';
  $button = null;
  include $uiPartsPath . '/card/imageCardRight.php' ?>

  <?php
  $title = "プロゴルファーのマンツーマンレッスン";
  $description = $lesson;
  $image = $absoluteUriPath . '/asset/introduction/lesson.png';
  $button = null;
  include $uiPartsPath . '/card/imageCardLeft.php' ?>
</div>

<?php
// phone
?>
<div class="mt-6 flex-col gap-6 hidden phone:flex">

  <?php
  $title = "トラックマンを使用した<br>最新鋭の練習設備";
  $description = $trackman;
  $image = $absoluteUriPath . '/asset/introduction/trackman.png';
  $button = null;
  include $uiPartsPath . '/card/card.php' ?>

  <?php
  $title = "プロゴルファーの<br>マンツーマンレッスン";
  $description = $lesson;
  $image = $absoluteUriPath . '/asset/introduction/lesson.png';
  $button = null;
  include $uiPartsPath . '/card/card.php' ?>

</div>

<div class="flex justify-center mt-8">
  <?php
  $button = 'レッスンの詳細を見る';
  include $uiPartsPath . '/button/button.php'
  ?>
</div>