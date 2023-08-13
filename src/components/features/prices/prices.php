<?php
$title = '料金プラン';
$image = $absoluteUriPath . '/asset/prices/prices.png';
include $uiPartsPath . '/header/headerImage/headerImage.php';
?>

<div class="w-full flex justify-center">
  <div class="w-4/5 pt-10 pb-[100px] flex flex-col gap-20 items-center bg-white phone:w-full phone:mx-4 px-4 phone:px-0 phone:text-left">
    <!-- 入会金 -->
    <?php include 'section/sections/initialFee.php' ?>

    <!-- 概要 -->
    <?php include 'overview/overview.pc.php'; ?>
    <?php include 'overview/overview.phone.php'; ?>

    <!-- 基本コース -->
    <?php include 'section/sections/basicCourse.php' ?>
    <!-- しっかり上達コース -->
    <?php include 'section/sections/proCourse.php' ?>
    <!-- ジュニア エンジョイコース -->
    <?php include 'section/sections/juniorEnjoy.php' ?>
    <!-- ジュニア プロ育成コース -->
    <?php include 'section/sections/juniorPro.php' ?>
    <!-- オプションコース -->
    <?php include 'section/sections/optionCourse.php' ?>
    <!-- ゴルフ整体コース -->
    <?php include 'section/sections/golfTherapy.php' ?>

    <!-- 備考 -->
    <?php include 'notes/notes.php' ?>
  </div>
</div>