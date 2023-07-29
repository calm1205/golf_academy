<?php /*
  概要: topの画像付きカード（左）
    title: string
    description: string
    image: string
    button: string
*/ ?>

<div class="relative h-[510px]">
  <img src="<?php echo $image ?>" class="absolute top-8 right-0 w-1/2 h-[400px] z-20" />

  <div class="absolute top-0 left-4 w-[72%] h-full -skew-x-12 overflow-hidden">
    <img src="<?php echo $image ?>" class="w-full h-full skew-x-12 scale-125 opacity-20" />
  </div>

  <div class="absolute top-[280px] left-0 z-50">
    <?php $image = null ?>
    <?php include $uiPartsPath . '/card/card.php' ?>
  </div>
</div>