<?php /*
  概要: ページ内の青グラデーション背景のタイトル
  引数:
    - title: string
*/ ?>

<div class="py-3 flex justify-center items-center bg-gradient-to-r from-primary-light from-34% to-primary-default border-b-[3px] border-solid border-primary-dark">
  <?php include __DIR__ . '/line.php' ?>
  <div class="inline-block text-[40px] text-white font-bold"><?php echo $title ?></div>
  <?php include __DIR__ . '/line.php' ?>
</div>