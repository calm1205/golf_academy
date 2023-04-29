<!-- After Golf Studioのご紹介 -->
<div class="flex flex-col gap-4">
  <div class="flex items-center phone:flex-col phone:gap-4">
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/trackman.png" class="w-[calc(100%-32px)]" />
    <div class="flex flex-col gap-6">
      <hr class="w-full border-b border-solid border-primary-default phone:hidden" />
      <p class="ml-4 text-base">トラックマンを採用した2打席のシミュレーター打席をご用意。
        ヘッドスピード・打ち出し角度・スピン量を確認しながらレッスンをおこないます。</p>
    </div>
  </div>

  <hr class="w-full border-b border-solid border-primary-default hidden phone:inline phone:my-8" />

  <div class="flex items-center justify-end w-full phone:flex-col-reverse phone:gap-6">
    <div class="flex flex-col gap-4 w-full">
      <hr class="w-full border-b border-solid border-primary-default phone:hidden" />
      <p class="mr-4 text-base text-right phone:text-left">After Golf Studioではツアーの最前線で活躍するプロゴルファーの<br class="phone:hidden" />上質なレッスンをマンツーマンで受けることができます。</p>
    </div>
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/lesson.png" class="w-[calc(100%-32px)]" />
  </div>

  <div class="flex justify-center phone:mt-6">
    <?php
    $button = 'レッスンの詳細を見る';
    include $uiPartsPath . '/button/button.php'
    ?>
  </div>
</div>