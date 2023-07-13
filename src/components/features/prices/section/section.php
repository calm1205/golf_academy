<?php /*
  概要: 料金プランのセクション
  引数: 
    - title: string
    - description: string | null
    - table: string[]
*/ ?>

<section class="flex flex-col items-center gap-4">
  <h2 class="font-bold text-2xl"> <?php echo $title ?> </h2>

  <div class="flex flex-col items-center">
    <hr class="w-[100px] border-b border-solid border-[#333] mb-4">

    <?php if ($description) { ?>
      <p class="text-center whitespace-pre"> <?php echo $description ?> </p>
    <?php } ?>
  </div>

  <table class="border-collapse border 
  [&_th]:border [&_th]:w-[210px] [&_th]:py-4 [&_th]:font-normal
  [&_td]:border [&_td]:px-10 [&_td]:py-4
  ">
    <?php foreach ($table as $key => $value) { ?>
      <tr>
        <th><?php echo $key ?></th>
        <td><?php echo $value[0] ?></td>
      </tr>
    <?php }  ?>
  </table>
</section>