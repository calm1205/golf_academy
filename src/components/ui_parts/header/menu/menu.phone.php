<?php
// スマホ用メニュー開くボタン
?>
<div id="menuButtonOpen" class="flex flex-col justify-evenly px-1 w-10 h-10 border border-primary-light rounded cursor-pointer ">
  <?php for ($i = 0; $i < 3; $i++) { ?>
    <hr class=" border-primary-light" />
  <?php } ?>
</div>

<?php
// スマホ用メニュー閉じるボタン
?>
<div id="menuButtonClose" class="hidden justify-center items-center w-10 h-10 border border-primary-light rounded cursor-pointer">
  <?php include "close.svg" ?>
</div>

<?php
// スマホ用メニューをクリック時に展開されるメニュー
?>
<div id="expandedMenu" class="hidden top-24 left-0 z-50 bg-primary-dark h-screen w-screen px-4">
  <ul class="flex flex-col  [&_li]:text-white [&_li]:border-b [&_li]:border-white [&_li]:py-4">
    <li>
      <a href="facility"> 施設概要 </a>
    </li>
    <li>
      <a href="rental"> レンタル用品 </a>
    </li>
    <li>
      <a href="coaches"> コーチ紹介 </a>
    </li>
    <li>
      <a href="prices"> 料金プラン </a>
    </li>
    <li>
      <a href="/top#guidance"> アクセス </a>
    </li>
    <li>
      <a href="/inquiry">お問い合わせ</a>
    </li>
    <li>
      <a href="https://coubic.com/goltomo" target="_blank">お申し込み</a>
    </li>
    <li>
      <a href="/terms">利用規約</a>
    </li>
    <li>
      <a href="/privacy">プライバシーポリシー</a>
    </li>
    <li>
      <a href="/commercial">特定商取引法に基づく表記</a>
    </li>
  </ul>
</div>

<script src="<?php echo $absoluteUriPath . "/components/ui_parts/header/menu/menu.phone.js" ?>"></script>