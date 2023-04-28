<?php include $absoluteIncludePath . '/components/rental/header.php'; ?>

<?php
$title = 'レンタルシューズ';
ob_start();
include $absoluteIncludePath . '/components/rental/shoes.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = 'レンタルグローブ';
ob_start();
include $absoluteIncludePath . '/components/rental/glove.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>
