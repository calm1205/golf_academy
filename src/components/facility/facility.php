<img class="h-52 w-full object-cover" src="<?php echo $absoluteUriPath ?>/asset/facility/facility.png" />


<?php
$title = 'トラックマンを使った最新鋭の練習設備';
ob_start();
include 'trackman/trackman.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>