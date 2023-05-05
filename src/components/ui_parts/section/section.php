<?php /*
  概要: タイトル付きセクション
  引数:
    - title: タイトル
    - children: コンテンツ
*/ ?>


<section>
  <h2>
    <?php include $uiPartsPath . '/title/title.php'; ?>
  </h2>

  <div class="w-4/5 phone:w-[calc(100%-32px)] max-w-6xl mx-auto m-10 py-10 phone:py-4">
    <?php echo $children ?>
  </div>
</section>