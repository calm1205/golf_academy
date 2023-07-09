<img class="h-52 w-full object-cover phone:mb-6" src="<?php echo $absoluteUriPath ?>/asset/facility/facility.png" />

<div class="flex flex-col gap-12 mt-14 w-4/5 mx-auto">
  <?php
  // トラックマンを使用した最新鋭の練習設備
  include 'trackman/trackman.php';
  ?>


  <?php
  // ゴルフに理想的な身体を作る「ゴルフ整体」
  include 'chiropractor/chiropractor.php';
  ?>
</div>

<!-- 施設概要 -->
<?php
include 'overview/overview.php';
?>