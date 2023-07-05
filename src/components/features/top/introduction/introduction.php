<?php
$trackman = 'トラックマンを採用した2打席のシミュレーター打席をご用意。
  ヘッドスピード・打ち出し角度・スピン量を確認しながらレッスンをおこないます。';

$lesson = 'After Golf Studioではツアーの最前線で活躍するプロゴルファーの上質なレッスンをマンツーマンで受けることができます。'
?>

<?php
// desktop 
?>
<div class="pt-16 pb-[100px] flex phone:hidden flex-col gap-10 items-center relative">
  <div class="h-[510px]">
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/trackman.png" width="600" height="360" class="absolute top-[42px] left-0" />
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/newTrackman.png" width="910" height="510" class="absolute top-0 right-0 -skew-x-12 z-10" />
    <div class=" w-[800px] flex flex-col pt-10 pr-[24px] pb-10 items-start gap-4 bg-white shadow absolute top-[240px] right-0 z-50">
      <h2 class="pl-[24px] text-blue-400">
        トラックマンを使用した最新鋭の練習設備
      </h2>
      <hr class="w-full border-b border-solid border-primary-default self-stretch">
      <p class="flex flex-col pl-[24px] gap-10 self-stretch">
        <?php echo $trackman ?>
      </p>
    </div>
  </div>



  <div class="">

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