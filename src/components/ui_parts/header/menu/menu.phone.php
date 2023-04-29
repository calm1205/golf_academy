<?php
// スマホ用メニューボタン
?>
<div id="menuButton" class="flex flex-col justify-evenly px-1 w-10 h-10 border border-primary-light rounded cursor-pointer">
  <?php for ($i = 0; $i < 3; $i++) { ?>
    <hr class=" border-primary-light" />
  <?php } ?>
</div>

<?php
// スマホ用メニューをクリック時に展開されるメニュー
?>
<div id="expandedMenu" class="hidden top-24 left-0 z-50">
  <div class="h-screen w-screen bg-primary-dark p-4">
    <ul class="flex flex-col gap-4 [&_li]:text-white [&_li]:border-b [&_li]:border-white [&_li]:py-2 ">
      <li>
        <a href="facility"> 施設概要 </a>
      </li>
      <li>
        <a href="rental"> レンタル用品 </a>
      </li>
      <li>
        <a href="#"> スタッフ紹介 </a>
      </li>
      <li>
        <a href="#"> アクセス </a>
      </li>
    </ul>
  </div>
</div>


<script src="<?php echo $absoluteUriPath . "/components/ui_parts/header/menu/menu.phone.js" ?>">
</script>