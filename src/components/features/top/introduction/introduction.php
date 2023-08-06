<?php
$trackman = '正確なデータを元にボールとクラブの動きを正確に計測します。これにより、スイングやボールの飛び方に関する詳細なデータを確認・分析することで自分のスイングに潜む課題や改善点を明らかにすることができます。<br>データはコーチやプレーヤーがスイングの調整や改善を行う際に役に立ちます。また、トラックマンで収集したデータはボールとクラブの相互作用を詳細に解析するため、最適なクラブ選びにも役立ちます。<br><br>正確なデータに基づいたフィードバックは、プレーヤーのモチベーションを高め、自己の成長を可視化できることで、より意欲的にトレーニングに取り込むことができます。';
$lesson = 'ゴルトモアカデミーではツアーの最前線で活躍するプロゴルファーの上質なレッスンをマンツーマンで受けることができます。'
?>

<?php
// desktop 
?>
<div class="pt-16 pb-[100px] flex phone:hidden flex-col gap-16">
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