<div class="flex phone:flex-col justify-start items-center gap-10">
  <img src="<?php echo $absoluteUriPath ?>/asset/rental/club.png" class="phone:w-[calc(100%-32px)]" />

  <div class="flex flex-col">
    <p class="text-base whitespace-pre-line">
      ゴルフクラブはドライバーからパターまで、すべての種類をご用意。
      レッスン内容に応じたゴルフクラブをレンタル可能です。
    </p>
  </div>
</div>

<h2 class="border-b-4 m-0 p-0 mb-1 border-blue-400 mt-[100px] font-bold text-2xl">
  セットリスト
</h2>

<?php include 'clubTable.php' ?>
<?php include 'clubTable.phone.php' ?>