<!-- 記事 -->
<div class="flex justify-center mt-10">
  <section class="w-4/5 max-h-80 mt-2 flex flex-col overflow-y-scroll">
    <?php for ($i = 0; $i <= 10; $i++) { ?>
      <a href="#" class="flex justify-between items-center border-b p-3">
        <article class="flex gap-6 w-full">
          <span class="text-[8px] text-white bg-sky-600 p-1">
            2022/10/10
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