<?php
$trackman2 = 'トッププロも使用する最先端の弾道測定器「トラックマン」を設置。
仕切りを設けてプライベート空間を維持した練習場を2打席用意しております。';

$data = 'トラックマンでは弾道や飛距離だけでなく、クラブの軌道やスイングスピードも計測可能です。<br>取得したあらゆるデータをレッスンに使用することで、理想のスイングを追求します。'
?>

<!-- desktop -->
<div class="pt-16 pb-[100px] flex phone:hidden flex-col gap-10">
  <div class="relative h-[510px]">
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/trackman.png" class="absolute top-8 left-0 w-1/2 h-[400px]" />
    <img src="<?php echo $absoluteUriPath ?>/asset/introduction/newTrackman.png" class="absolute top-0 right-4 -skew-x-12 z-10 w-[72%] h-[510px]" />
    <div class="w-[72%] flex flex-col pt-10 pr-[24px] pb-10 items-start gap-4 bg-white shadow-lg absolute top-[280px] right-0 z-50">
      <h2 class="pl-[24px] text-blue-400 text-3xl font-bold">
        トラックマンを使用した最新鋭の練習設備
      </h2>
      <hr class="w-full border-b border-solid border-primary-default self-stretch">
      <p class="flex flex-col pl-[24px] gap-10 self-stretch">
        <?php echo $trackman2 ?>
      </p>
    </div>
  </div>



  <div class="relative h-[510px]">
    <img src="<?php echo $absoluteUriPath ?>/asset/facility/trackman/trackman2.png" class="absolute top-8 right-0 w-1/2 h-[400px]" />
    <img src="<?php echo $absoluteUriPath ?>/asset/facility/trackman/newTrackman2.png" class="absolute top-0 left-6 -skew-x-12 z-10 w-[72%] h-[510px]" />
    <div class="w-[72%] flex flex-col pt-10 pr-[24px] pb-10 items-start gap-4 bg-white shadow-lg absolute top-[280px] left-0 z-50">
      <h2 class="pl-[24px] text-blue-400 text-3xl font-bold">
        データをもとに理想のスイングを追求
      </h2>
      <hr class="w-full border-b border-solid border-primary-default self-stretch">
      <p class="flex flex-col pl-[24px] gap-10 self-stretch">
        <?php echo $data ?>
      </p>
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