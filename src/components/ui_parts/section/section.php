<?php /*
  概要: タイトル付きセクション
  引数:
    - title: タイトル
    - children: コンテンツ
*/ ?>


<h2 class="mt-[100px]">
  <?php include $uiPartsPath . '/title/title.php'; ?>
</h2>

<div class="w-4/5 max-w-6xl mx-auto m-10 py-10">
  <?php echo $children ?>
</div>