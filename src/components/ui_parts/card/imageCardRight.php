<?php /*
  概要: topの画像付きカード（右）
    title: string
    description: string
    image: string
    button: string
*/ ?>

<div class="relative h-[510px]">
  <img src="<?php echo $image ?>" class="absolute top-8 left-0 w-1/2 h-[400px] z-20" />
  <div class="absolute top-0 right-4 w-[72%] h-full -skew-x-12 overflow-hidden">
    <img src="<?php echo $image ?>" class="w-full h-full skew-x-12 scale-125" />
  </div>
  <div class="absolute top-0 right-4 w-[72%] h-full -skew-x-12 overflow-hidden bg-white opacity-80"></div>

  <div class="absolute top-[280px] right-0 z-50">
    <?php include $uiPartsPath . '/card/card.php' ?>
  </div>
</div>