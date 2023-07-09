<!-- desktop -->
<div class="phone:hidden px-10 py-16 drop-shadow-lg bg-white">
  <div class=" flex justify-start items-center gap-10 ">

    <img src="<?php echo $absoluteUriPath ?>/asset/lesson/staff.png" />

    <div class="flex flex-col">
      <h3 class="text-2xl">代表コーチ<br> タイガー・ウッズプロ</h3>
      <hr class="w-full border-b border-solid border-primary-default self-stretch mt-6">
      <p class="text-base whitespace-pre-line">
        After Golf Studioのメインコーチを務めるタイガー・ウッズです。
        私がこれまでのゴルフ人生で得た知識・経験を、これからゴルフを上達したい！
        という方にお伝えしたいと思っております。
        ゴルフの魅力を広め、ゴルフを愛する人をひとりでも増やしていけるように尽力いたします。
      </p>
    </div>

  </div>
  <div class="mt-10 text-center">
    <?php
    $button = 'スタッフ紹介を見る';
    include $uiPartsPath . '/button/button.php'
    ?>
  </div>
</div>

<!-- phone -->
<div class="hidden phone:flex flex-col justify-start items-center gap-10 ">
  <img src="<?php echo $absoluteUriPath ?>/asset/lesson/staff.png" class="w-full" />

  <div class="flex flex-col">
    <h3 class="text-2xl">代表コーチ<br> タイガー・ウッズプロ</h3>
    <p class="text-base whitespace-pre-line">
      After Golf Studioのメインコーチを務めるタイガー・ウッズです。
      私がこれまでのゴルフ人生で得た知識・経験を、これからゴルフを上達したい！
      という方にお伝えしたいと思っております。
      ゴルフの魅力を広め、ゴルフを愛する人をひとりでも増やしていけるように尽力いたします。
    </p>
  </div>

</div>