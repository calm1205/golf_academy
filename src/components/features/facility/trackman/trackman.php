<?php
$trackman2 = 'トッププロも使用する最先端の弾道測定器「トラックマン」を設置。
仕切りを設けてプライベート空間を維持した練習場を2打席用意しております。';

$data = 'トラックマンでは弾道や飛距離だけでなく、クラブの軌道やスイングスピードも計測可能です。<br>取得したあらゆるデータをレッスンに使用することで、理想のスイングを追求します。'
?>

<!-- desktop -->
<div class="pt-16 pb-[100px] flex phone:hidden flex-col gap-10">

  <?php
  $title = "トラックマンを使用した最新鋭の練習設備";
  $description = "トッププロも使用する最先端の弾道測定器「トラックマン」を設置。
  仕切りを設けてプライベート空間を維持した練習場を2打席用意しております。";
  $image = $absoluteUriPath . '/asset/introduction/trackman.png';
  include $uiPartsPath . '/card/imageCardRight.php'; ?>

  <?php
  $title = "データをもとに理想のスイングを追求";
  $description = "トラックマンでは弾道や飛距離だけでなく、クラブの軌道やスイングスピードも計測可能です。
  取得したあらゆるデータをレッスンに使用することで、理想のスイングを追求します。";
  $image = $absoluteUriPath . '/asset/facility/trackman/trackman2.png';
  include $uiPartsPath . '/card/imageCardLeft.php'; ?>
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