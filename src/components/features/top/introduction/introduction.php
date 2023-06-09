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
  include $uiPartsPath . '/card/imageCardRight.php' ?>

  <?php
  $title = "プロゴルファーのマンツーマンレッスン";
  $description = $lesson;
  $image = $absoluteUriPath . '/asset/introduction/lesson.png';
  include $uiPartsPath . '/card/imageCardLeft.php' ?>
</div>

<?php
// phone
?>
<div class="hidden phone:flex flex-col gap-8">
  <img src="<?php echo $absoluteUriPath ?>/asset/introduction/trackman.png" />
  <p class="ml-4 text-base">
    <?php echo $trackman ?>
  </p>
  <hr class="w-full border-b border-solid border-primary-default" />

  <img src="<?php echo $absoluteUriPath ?>/asset/introduction/lesson.png" />
  <p class="text-base">
    <?php echo $lesson ?>
  </p>
</div>

<div class="flex justify-center mt-8">
  <?php
  $button = 'レッスンの詳細を見る';
  include $uiPartsPath . '/button/button.php'
  ?>
</div>