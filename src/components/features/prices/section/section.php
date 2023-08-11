<?php /*
  概要: 料金プランのセクション
  引数: 
    - title: string
    - description: string | null
    - table: string[]
*/ ?>

<section class="flex flex-col items-center gap-4 pt-24 -mt-24" id="<?php echo $id ?>">
  <h2 class="font-bold text-2xl"> <?php echo $title ?> </h2>

  <div class="flex flex-col items-center phone:my-4">
    <hr class="w-[100px] border-b border-solid border-[#333] mb-4">

    <?php if ($description) { ?>
      <p class="phone:hidden text-center whitespace-pre-wrap"> <?php echo $description ?> </p>
      <p class="hidden phone:block text-left whitespace-pre-wrap"> <?php echo $description ?> </p>
    <?php } ?>
  </div>

  <table class="border-collapse border 
  [&_th]:border [&_th]:w-[210px] [&_th]:px-10 [&_th]:py-4 [&_th]:font-normal
  [&_td]:border [&_td]:px-10 [&_td]:py-4
  ">
    <?php foreach ($table as $key => $value) { ?>
      <tr>
        <th><?php echo $key ?></th>
        <td><?php echo $value[0] ?></td>
      </tr>
    <?php }  ?>
  </table>

  <?php if ($note) { ?>

    <div class="flex flex-col items-center text-center phone:my-4">
      <p><span class="font-bold">通い放題つき（レッスン無し、練習のみ）</span><br><br>※月額会員プランの通い放題（レッスン無し、練習のみ）は専用の予約ページ＆お電話にて受付いたします。</p>
    </div>

  <?php } ?>

</section>