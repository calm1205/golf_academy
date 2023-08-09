<?php
$title = "レンタルクラブ";
$description = "ゴルフクラブはドライバーからパターまで、すべての種類をご用意。<br>レッスン内容に応じたゴルフクラブをレンタル可能です。";
$image = $absoluteUriPath . '/asset/rental/clubs.jpg';
$button = null;
include $uiPartsPath . '/card/card.php'; ?>

<h2 class="border-b-4 m-0 p-0 mb-1 border-blue-400 mt-[100px] font-bold text-2xl">
  セットリスト
</h2>

<?php include 'clubTable.php' ?>
<?php include 'clubTable.phone.php' ?>