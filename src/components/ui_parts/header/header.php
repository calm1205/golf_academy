<header class="h-24 px-4 flex sticky top-0 w-full items-center justify-between bg-white z-50 gap-6">

  <a href="/" class="cursor-pointer flex items-center gap-3">
    <img class="" src="<?php echo $absoluteUriPath ?>/asset/header/logo.svg" />
  </a>

  <nav class="phone:hidden flex w-fit items-end h-24 pb-3">
    <?php include 'menu/menu.php' ?>
  </nav>

  <nav class="phone:flex hidden">
    <?php include 'menu/menu.phone.php' ?>
  </nav>
</header>