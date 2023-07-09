<div class="phone:hidden shadow-lg">
  <div class=" flex justify-start items-center ">

    <img src="<?php echo $absoluteUriPath ?>/asset/rental/club.png" class="w-[540px] h-[420px]" />

    <div class="flex flex-col">
      <h3 class="text-3xl font-bold text-blue-400 px-10 ">レンタルクラブ</h3>
      <hr class="w-full border-b border-solid border-primary-default self-stretch mt-6">
      <p class="text-base whitespace-pre-line px-10 ">
        ゴルフクラブはドライバーからパターまで、すべての種類をご用意。<br>レッスン内容に応じたゴルフクラブをレンタル可能です。
      </p>
    </div>
  </div>
</div>

<h2 class="border-b-4 m-0 p-0 mb-1 border-blue-400 mt-[100px] font-bold text-2xl">
  セットリスト
</h2>

<?php include 'clubTable.php' ?>
<?php include 'clubTable.phone.php' ?>