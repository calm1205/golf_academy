<?php /*
  概要: スマホ用Cardパーツ
    title: string
    description: string
    image: string
*/ ?>

<div class="mx-4 rounded-2xl border flex flex-col gap-4 items-center overflow-hidden ">
  <img src="<?php echo $image ?>" class="aspect-[7/4] w-full">


  <div class="flex flex-col px-4 items-start gap-2">

    <h3 class="font-bold text-blue-400 text-2xl"><?php echo $title ?></h3>
    <hr class="w-full border-b border-solid border-primary-default">
    <p class="text-lg mb-4"> <?php echo $description ?> </p>


  </div>

</div>