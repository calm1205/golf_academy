<?php /*
  概要: topページのカード
    title: string
    description: string
    button: string
*/ ?>

<div class="w-[800px] flex flex-col py-10 pr-6 gap-4 bg-white shadow-lg">
  <h2 class="pl-6 text-blue-400 text-3xl font-bold">
    <? echo $title ?>
  </h2>

  <hr class="w-full border-b border-solid border-primary-default">
  <p class="pl-6 gap-10"> <?php echo $description ?> </p>

  <?php if ($button) { ?>
    <div class="ml-[24px] mt-2">
      <?php include $uiPartsPath . '/button/button.php'; ?>
    </div>
  <?php } ?>
</div>