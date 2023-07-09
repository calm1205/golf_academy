<?php
$chiropractor = "After Golfは整体を併設しているので、レッスン後やラウンド後の身体のケアもおこなえます。 また、ラウンドの前日に施術を受けることで、ゴルフに使用する背中や肩甲骨・股関節付近の筋肉をほぐし、リラックスした状態でゴルフに望むことができます。"
?>


<div class="pt-16 pb-[100px] flex phone:hidden flex-col gap-10">
  <div class="relative h-[550px]">

    <img src="<?php echo $absoluteUriPath ?>/asset/chiropractor/chiropractor.png" class="absolute top-8 left-0 w-1/2 h-[400px] z-20" />

    <div class="absolute top-0 right-4 w-[72%] h-full -skew-x-12  inline-block overflow-hidden">
      <img src="<?php echo $absoluteUriPath ?>/asset/chiropractor/chiropractor.png" class="w-full h-full skew-x-12 scale-125 opacity-20" />
    </div>

    <div class="w-[72%] flex flex-col pt-10 pr-[24px] pb-10 items-start gap-4 bg-white shadow-lg absolute top-[280px] right-0 z-50">
      <h2 class="pl-[24px] text-blue-400 text-3xl font-bold">
        ゴルフに理想的な身体を作る「ゴルフ整体」
      </h2>
      <hr class="w-full border-b border-solid border-primary-default self-stretch">
      <p class="flex flex-col pl-[24px] gap-10 self-stretch">
        <?php echo $chiropractor ?>
      </p>
    </div>

  </div>
</div>