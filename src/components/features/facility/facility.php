<?php
$title = '施設概要';
$image = $absoluteUriPath . '/asset/facility/facility.png';
include $uiPartsPath . '/header/headerImage/headerImage.php';
?>


<div class="flex flex-col gap-12 mt-14 mx-auto w-4/5  phone:px-4 phone:w-full">
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