<!-- After Golf Studioのご紹介 -->
<div class="flex flex-col gap-4">
  <div class="flex items-center">
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/trackman.png" />
    <div class="flex flex-col gap-4">
      <hr class="w-full border-b border-solid border-primary-default" />
      <p class="ml-4 text-base">トラックマンを採用した2打席のシミュレーター打席をご用意。
        ヘッドスピード・打ち出し角度・スピン量を確認しながらレッスンをおこないます。</p>
    </div>
  </div>

  <div class="flex items-center justify-end w-full">
    <div class="flex flex-col gap-4 w-full">
      <hr class="w-full border-b border-solid border-primary-default" />
      <p class="mr-4 text-base text-right">After Golf Studioではツアーの最前線で活躍するプロゴルファーの<br />上質なレッスンをマンツーマンで受けることができます。</p>
    </div>
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/lesson.png" />
  </div>

  <div class="flex justify-center">
    <?php
    $button = 'レッスンの詳細を見る';
    include $uiPartsPath . '/button/button.php'
    ?>
  </div>
</div>