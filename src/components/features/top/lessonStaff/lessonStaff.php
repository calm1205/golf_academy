<!-- desktop -->
<div class="phone:hidden px-10 py-16 drop-shadow-lg bg-white rounded-2xl">
  <div class="flex justify-start items-center gap-10 ">
    <img class="max-w-sm w-2/5" src="<?php echo $absoluteUriPath . '/asset/lesson/staff.jpeg' ?>" />
    <div class="flex flex-col w-full">
      <h3 class="text-2xl">
        レッスンスタッフのご紹介
      </h3>

      <hr class="border-b border-solid border-primary-default self-stretch mt-6">

      <p class="text-base whitespace-pre-line">
        After Golf Studioのメインコーチを務めるタイガー・ウッズです。
        私がこれまでのゴルフ人生で得た知識・経験を、これからゴルフを上達したい！
        という方にお伝えしたいと思っております。
        ゴルフの魅力を広め、ゴルフを愛する人をひとりでも増やしていけるように尽力いたします。
      </p>
    </div>
  </div>

  <div class="mt-10 text-center">
    <?php include $uiPartsPath . '/button/button.php' ?>
  </div>
</div>

<!-- phone -->
<?php
$image = $absoluteUriPath . '/asset/lesson/staff.jpeg';
?>

<div class="hidden phone:flex flex-col justify-start items-center gap-10 ">
  <img src='<?php echo $image ?>' class="px-20 w-4/5" />

  <div class="flex flex-col">
    <h3 class="text-2xl">
      代表コーチ
      〇〇プロ
    </h3>
    <p class="text-base whitespace-pre-line">
      After Golfのメインコーチを務める〇〇です。<br>私がこれまでのゴルフ人生で得た知識・経験を、これからゴルフを上達したい！<br>という方にお伝えしたいと思っております。<br>ゴルフの魅力を広め、ゴルフを愛する人をひとりでも増やしていけるように尽力いたします。
    </p>
  </div>

  <?php
  $button = 'スタッフ紹介を見る';
  ?>
  <?php include $uiPartsPath . '/button/button.php' ?>
</div>