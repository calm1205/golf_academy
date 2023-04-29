<header class="h-24 p-2 flex sticky top-0 w-full items-center justify-between bg-white z-50">

  <a href="/" class="cursor-pointer flex items-center gap-3">
    <?php include $absoluteIncludePath . '/asset/logo.svg' ?>
    <img src="<?php echo $absoluteUriPath ?>/asset/header/afterGolfStudio.png" alt="" />
  </a>

  <div class="flex items-end h-24 pb-3">
    <?php include __DIR__ . '/menu.php' ?>
  </div>
</header>