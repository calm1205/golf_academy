<?php /*
  概要: カード（レンタル用品）
  引数: 
    - title: タイトル
    - description: 説明文
    - image: 画像URL
*/ ?>

<div class="phone:hidden bg-white border h-[400px]">
  <div class="flex justify-start items-center pr-10">
    <img class="h-[400px]" src="<?php echo $image ?>" />

    <div class="flex flex-col w-full">
      <h3 class="text-3xl text-primary-default font-bold px-10">
        <?php echo $title ?>
      </h3>
      <hr class="border-b border-solid border-primary-default self-stretch mt-6">
      <p class="text-base whitespace-pre-line pl-10">
        <?php echo $description ?>
      </p>
    </div>
  </div>
</div>