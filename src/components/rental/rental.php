<?php include $absoluteIncludePath . '/components/rental/header/header.php'; ?>

<?php
$title = 'レンタルクラブ';
ob_start();
include $absoluteIncludePath . '/components/rental/club/club.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = 'レンタルシューズ';
ob_start();
include $absoluteIncludePath . '/components/rental/shoes/shoes.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = 'レンタルグローブ';
ob_start();
include $absoluteIncludePath . '/components/rental/glove/glove.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>
