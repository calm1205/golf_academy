<!-- コンテンツ ヘッダー -->
<div class=" sticky top-[48px] w-full">
  <img src='./asset/golf.jpg' alt="" class="h-40 w-full object-cover">
  <div class="absolute top-0 flex justify-center items-center h-full w-full">

    <div class=" w-4/5">
      <h2 class="text-white text-lg font-bold">News</h2>
      <hr class=" border border-solid border-white" />
    </div>
  </div>
</div>

<!-- 記事 -->
<div class="flex justify-center mt-10">
  <section class="w-4/5 mt-2 flex flex-col gap-4">
    <?php for ($i = 0; $i <= 10; $i++) { ?>
      <article class="flex flex-col gap-2">
        <span class="text-[10px] text-white bg-sky-600 p-1 w-fit">2022/10/10</span>
        <h3 class="text-base">ゴルフシーズン期間限定キャンペーン実施中</h3>
        <p class="text-[10px] text-gray-600">コンセプトは、「楽しく」「もっと早く上達を！」です。東京から60kmと大変近く、人気の基礎ゴルフ場GOLF STUDIOで開催しています。ゴルフ界隈ではタブーな打ち直しが...</p>
        <hr class=" border border-solid border-gray-300" />
      </article>
    <?php } ?>
  </section>
</div>