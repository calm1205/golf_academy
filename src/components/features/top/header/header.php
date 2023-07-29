<?php
// コンテンツ ヘッダー 
?>

<div class="relative h-fit w-full">
  <!-- desktop -->
  <img src='<?php echo $absoluteUriPath ?>/asset/top/top.png' class="phone:hidden phone:h-60 phone:object-cover phone:object-left object-contain w-screen">

  <!-- phone -->
  <img src='<?php echo $absoluteUriPath ?>/asset/top/topResponsive.png' class="hidden phone:block phone:h-60 w-screen">

  <div class="hidden absolute top-0 phone:flex justify-center items-center h-full w-full overflow-hidden  bg-[#003C74] bg-opacity-[0.5]">
    <img src="<?php echo $absoluteUriPath ?>/asset/top/title_responsive.png" class="h-3/5 phone:h-4/5 phone:px-4 phone:object-contain object-cover" />
  </div>
</div>