<!-- タイトル付きセクション -->

<!-- 
  title: タイトル
  children: コンテンツ
 -->

<div class="mt-[100px]">
  <?php include $uiPartsPath . '/title/title.php'; ?>
</div>

<div class="w-4/5 phone:w-[calc(100%-32px)] max-w-6xl mx-auto m-10 py-10 phone:py-0 ">
  <?php echo $children ?>
</div>