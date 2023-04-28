<?php include $absoluteIncludePath . '/components/rental/header.php'; ?>

<?php
$title = 'レンタルグローブ';
ob_start();
include $absoluteIncludePath . '/components/rental/glove.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>
