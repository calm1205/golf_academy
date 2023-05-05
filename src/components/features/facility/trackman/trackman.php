<?php
$trackman2 = 'トッププロも使用する最先端の弾道測定器「トラックマン」を設置。
仕切りを設けてプライベート空間を維持した練習場を2打席用意しております。';

$data = 'トラックマンでは弾道や飛距離だけでなく、
クラブの軌道やスイングスピードも計測可能です。
取得したあらゆるデータをレスンに使用することで、理想のスイングを追求します。'
?>

<!-- desktop -->
<div class="flex phone:hidden flex-col gap-4">
  <div class="flex items-center">
    <img src="<?php echo $absoluteUriPath ?>/asset/facility/trackman/trackman1.png" />
    <div class="flex flex-col gap-4">
      <hr class="w-full border-b border-solid border-primary-default" />
      <p class="ml-4 text-base whitespace-pre-line">
        <?php echo $trackman2 ?>
      </p>
    </div>
  </div>

  <div class="flex items-center justify-end w-full">
    <div class="flex flex-col gap-4 w-full">
      <hr class="w-full border-b border-solid border-primary-default" />
      <p class="mr-4 text-base text-right whitespace-pre-line">
        <?php echo $data ?>
      </p>
    </div>
    <img src="<?php echo $absoluteUriPath ?>/asset/facility/trackman/trackman2.png" />
  </div>
</div>

<!-- phone -->
<div class="hidden phone:flex flex-col gap-8">
  <img src="<?php echo $absoluteUriPath ?>/asset/facility/trackman/trackman1.png" />
  <p class="ml-4 text-base">
    <?php echo $trackman2 ?>
  </p>
  <hr class="w-full border-b border-solid border-primary-default" />

  <img src="<?php echo $absoluteUriPath ?>/asset/facility/trackman/trackman2.png" />
  <p class="text-base">
    <?php echo $data ?>
  </p>
</div>