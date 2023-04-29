<?php
$trackman = 'トラックマンを採用した2打席のシミュレーター打席をご用意。
  ヘッドスピード・打ち出し角度・スピン量を確認しながらレッスンをおこないます。';

$lesson = 'After Golf Studioではツアーの最前線で活躍するプロゴルファーの上質なレッスンをマンツーマンで受けることができます。'
?>

<?php
// desktop 
?>
<div class="flex phone:hidden flex-col gap-8">
  <div class="flex items-center">
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/trackman.png" />
    <div class="flex flex-col gap-4">
      <hr class="w-full border-b border-solid border-primary-default" />
      <p class="ml-4 text-base">
        <?php echo $trackman ?>
      </p>
    </div>
  </div>

  <div class="flex items-center justify-end w-full">
    <div class="flex flex-col gap-4 w-full">
      <hr class="w-full border-b border-solid border-primary-default" />
      <p class="mr-4 text-base text-right">
        <?php echo $lesson ?>
      </p>
    </div>
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/lesson.png" />
  </div>
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