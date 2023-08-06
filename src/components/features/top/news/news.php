<!-- desktop -->
<div class="flex flex-col items-center phone:hidden mt-10 p-8 bg-white gap-8">
  <section class="w-4/5 max-h-80 flex flex-col overflow-y-scroll gap-5 ">
    <?php for ($i = 0; $i < 10; $i++) { ?>
      <a href="#" class="flex justify-between items-center border-b p-3 ">
        <article class="flex gap-8 w-full">
          <span class="text-[8px] text-white bg-primary-light p-1 rounded">
            2022.10.10
          </span>
          <p class="max-w-[80%] text-base text-gray-600 tracking-wider font-extralight text-ellipsis whitespace-nowrap overflow-hidden">
            ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
            ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
            ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
          </p>
        </article>

        <i class="fa-solid fa-chevron-right text-gray-600 font-extralight"></i>
      </a>
    <?php } ?>

  </section>
  <?php $button = "ニュース・お知らせ一覧を見る" ?>
  <?php $href = "/news" ?>
  <?php include $uiPartsPath . '/button/button.php'; ?>
</div>

<!-- phone -->
<div class="hidden phone:flex justify-center mt-10 py-8 bg-white">
  <section class="w-[calc(100%-32px)] max-h-80 flex flex-col overflow-y-scroll gap-5 ">
    <?php for ($i = 0; $i < 10; $i++) { ?>
      <a href="#" class="flex justify-between items-center border-b p-3 ">
        <article class="flex gap-8 w-full">
          <span class="text-[8px] text-white bg-primary-light p-1 rounded">
            2022.10.10
          </span>
          <p class="max-w-[80%] text-base text-gray-600 tracking-wider font-extralight text-ellipsis whitespace-nowrap overflow-hidden">
            ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
            ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
            ニュース仮テキスト〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
          </p>
        </article>

        <i class="fa-solid fa-chevron-right text-gray-600 font-extralight"></i>
      </a>
    <?php } ?>
  </section>
</div>