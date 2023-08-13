<?php /*
  概要: topページのカード
    title: string
    description: string
    button: string
    image: string
*/ ?>

<!-- desktop -->
<div class="card flex phone:hidden bg-white shadow-lg
<?php if (!$image) echo "max-w-[800px] py-10"; ?> ">

  <?php if ($image) { ?>
    <img class="aspect-square max-w-[50%]" src="<?php echo $image ?>" />
  <?php } ?>

  <div class="flex flex-col justify-center pr-10 gap-4">
    <h2 class="pl-6 text-blue-400 text-3xl font-bold">
      <? echo $title ?>
    </h2>

    <hr class="border-b border-solid border-primary-default">
    <p class="pl-6 gap-10"> <?php echo $description ?> </p>

    <?php if ($button) { ?>
      <div class="ml-[24px] mt-2">
        <?php include $uiPartsPath . '/button/button.php'; ?>
      </div>
    <?php } ?>
  </div>
</div>

<!-- phone -->
<div class="hidden phone:flex mx-4 rounded-2xl border flex-col gap-4 items-center overflow-hidden bg-white">
  <img src="<?php echo $image ?>" class="aspect-square w-full max-h-[400px] object-cover">

  <div class="flex flex-col px-4 items-start gap-2">
    <h3 class="font-bold text-blue-400 text-2xl"> <?php echo $title ?> </h3>
    <hr class="w-full border-b border-solid border-primary-default">
    <p class="text-lg mb-4 whitespace-pre-line"> <?php echo $description ?> </p>
  </div>
</div>