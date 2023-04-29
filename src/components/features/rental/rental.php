<?php include 'header/header.php'; ?>

<?php
$title = 'レンタルクラブ';
ob_start();
include 'club/club.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = 'レンタルシューズ';
ob_start();
include 'shoes/shoes.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php
$title = 'レンタルグローブ';
ob_start();
include 'glove/glove.php';
$children = ob_get_clean();
include $uiPartsPath . '/section/section.php'
?>

<?php include $uiPartsPath . '/access/map.php'; ?>