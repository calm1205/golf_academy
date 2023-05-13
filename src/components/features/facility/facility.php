<img class="h-52 w-full object-cover phone:mb-6" src="<?php echo $absoluteUriPath ?>/asset/facility/facility.png" />


<!-- トラックマンを使用した最新鋭の練習設備 -->
<?php
$title = 'トラックマンを使った<br class="hidden phone:block">最新鋭の練習設備';
ob_start();
include 'trackman/trackman.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<!-- ゴルフに理想的な身体を作る「ゴルフ整体」 -->
<?php
$title = 'ゴルフに理想的な身体を作る<br class="hidden phone:block">「ゴルフ整体」';
ob_start();
include 'chiropractor/chiropractor.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php' ?>

<!-- 施設概要 -->
<?php
$title = '施設概要';
ob_start();
include 'overview/overview.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php' ?>