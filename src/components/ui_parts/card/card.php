<?php /*
  概要: カード
  引数: 
    - title: タイトル
    - description: 説明文
    - image: 画像URL
    - button: ボタンの表示テキスト
*/ ?>

<div class="phone:hidden px-10 py-16 drop-shadow-lg bg-white rounded-2xl">
  <div class="flex justify-start items-center gap-10 ">
    <img src="<?php echo $image ?>" />
    <div class="flex flex-col w-full">
      <h3 class="text-2xl">
        <?php echo $title ?>
      </h3>

      <hr class="border-b border-solid border-primary-default self-stretch mt-6">

      <p class="text-base whitespace-pre-line">
        <?php echo $description ?>
      </p>
    </div>
  </div>

  <div class="mt-10 text-center">
    <?php include $uiPartsPath . '/button/button.php' ?>
  </div>
</div>