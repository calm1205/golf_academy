<?php
$chiropractor = "ゴルトモアカデミーは整体を併設しているので、レッスン後やラウンド後の身体のケアもおこなえます。 
またラウンドの前日に施術を受けることで、
ゴルフに使用する背中や肩甲骨・股関節付近の筋肉をほぐし、
リラックスした状態でゴルフに望むことができます。"
?>

<div class="pt-16 pb-[100px] flex min-w-[80%] max-w-[1280px] phone:hidden flex-col gap-10">
  <?php
  $title = "ゴルフに理想的な身体を作る「ゴルフ整体」";
  $description = $chiropractor;
  $image = $absoluteUriPath . '/asset/chiropractor/chiropractor.png';
  $button = null;
  include $uiPartsPath . '/card/imageCardRight.php' ?>
</div>

<div class="pb-[100px] phone:flex hidden flex-col gap-10">
  <?php
  $title = "ゴルフに理想的な身体を作る<br>「ゴルフ整体」";
  $description = $chiropractor;
  $image = $absoluteUriPath . '/asset/chiropractor/chiropractor.png';
  $button = null;
  include $uiPartsPath . '/card/card.php' ?>
</div>