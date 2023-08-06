<?php /*
  概要: topの画像付きカード（右）
    title: string
    description: string
    image: string
    button: string
*/ ?>

<div class="relative bg-white min-h-[500px] min-w-[80%]">
  <img src="<?php echo $image ?>" class="absolute top-8 left-0 max-w-1/2 max-h-[400px] aspect-auto z-20" />

  <div class="absolute top-0 right-4 max-w-[72%] max-h-[500px] -skew-x-12 overflow-hidden">
    <img src="<?php echo $image ?>" class="w-full h-auto skew-x-12 scale-125 aspect-auto opacity-20" />
  </div>

  <div class="absolute top-[250px] right-0 z-50">
    <?php $image = null ?>
    <?php include $uiPartsPath . '/card/card.php' ?>
  </div>

  <!-- relative要素の高さ算出 -->
  <script>
    var setHeight = () => {
      const parent = document.currentScript.parentNode;
      const card = parent.querySelector('.card');

      const parentTop = parent.getBoundingClientRect().top;
      const cardBottom = card.getBoundingClientRect().bottom;

      const parentHeight = cardBottom - parentTop;
      parent.style.height = `${parentHeight}px`;
    }
    setHeight()
  </script>
</div>