<div class="w-screen h-60 bg-white flex justify-center items-center border-blue-400 border-2">
  <h1 class="text-blue-400 text-5xl">
    お知らせ
  </h1>
</div>

<?php
$title = "ゴルフシーズン期間限定キャンペーン実施中";
$date = "2022.10.10";
$content = "ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇"
?>

<div class="flex justify-center">
  <div class="px-12 py-20 bg-white max-w-5xl gap-4">
    <?php for ($i = 0; $i < 10; $i++) { ?>
      <!-- desktop -->
      <article class="flex phone:hidden justify-between items-center border-b-2 border-[rgb(209, 209, 209)] py-6 gap-6">
        <div class="flex flex-col gap-4 w-full">
          <div class="flex items-center gap-4">
            <span class="text-sm font-bold text-white bg-primary-light px-2 py-[6px] rounded"> <?php echo $date ?> </span>
            <p class="text-base font-bold"> <?php echo $title ?> </p>
          </div>

          <p class="text-base text-gray-600 text-ellipsis line-clamp-2 overflow-hidden"> <?php echo $content ?> </p>
        </div>

        <a href="#" class="flex-shrink-0">
          <button class="border border-gray-600 rounded-full px-6 py-2">
            詳細を見る
          </button>
        </a>
      </article>

      <!-- phone -->
      <article class="phone:block hidden border-b-2 border-[rgb(209, 209, 209)] py-6 gap-6">
        <div class="flex flex-col items-start gap-2">
          <span class="text-sm font-bold text-white bg-primary-light px-2 py-[6px] rounded"> <?php echo $date ?> </span>
          <p class="text-base font-bold mt-2"> <?php echo $title ?> </p>
          <p class="text-base text-gray-600 text-ellipsis line-clamp-5 overflow-hidden"> <?php echo $content ?> </p>
        </div>

        <div class="flex justify-center mt-4">
          <a href="#">
            <button class="border border-gray-600 rounded-full px-6 py-2">
              詳細を見る
            </button>
          </a>
        </div>
      </article>
    <?php } ?>
  </div>
</div>