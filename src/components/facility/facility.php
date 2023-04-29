<img class="h-52 w-full object-cover" src="<?php echo $absoluteUriPath ?>/asset/facility/facility.png" />


<?php
$title = 'トラックマンを使った最新鋭の練習設備';
ob_start();
include 'trackman/trackman.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = 'ゴルフに理想的な身体を作る「ゴルフ整体」';
ob_start();
include 'chiropractor/chiropractor.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php' ?>

<?php
$title = '施設概要';
ob_start();
include 'overview/overview.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php' ?>