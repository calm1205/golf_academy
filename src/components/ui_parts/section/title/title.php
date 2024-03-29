<?php /*
  概要: ページ内の青グラデーション背景のタイトル
  引数:
    - title: string
*/ ?>

<div class="flex phone:hidden justify-center items-center bg-gradient-to-r from-primary-light from-34% to-primary-default border-b-[3px] border-solid border-primary-dark">
  <img src="<?php echo $absoluteUriPath ?>/asset/title/logo.svg" alt="" class="h-[128px] mr-[32px]">
  <div class="inline-block phone:text-2xl text-[40px] text-white font-bold text-center">
    <?php echo $title ?>
  </div>
</div>

<div class="hidden phone:block relative bg-gradient-to-r from-primary-light from-34% to-primary-default border-b-[3px] border-solid border-primary-dark h-[128px] pt-[48px]">
  <img src="<?php echo $absoluteUriPath ?>/asset/title/logo.svg" alt="" class="h-[128px] mr-[32px] absolute left-[10%] top-0">
  <div class="h-full w-full phone:text-2xl text-[40px] text-white font-bold text-center">
    <?php echo $title ?>
  </div>
</div>