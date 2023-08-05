<!-- desktop -->
<div class="phone:hidden px-10 py-16 drop-shadow-lg bg-white rounded-2xl">
  <div class="flex justify-start items-center gap-10 ">
    <img class="max-w-sm w-2/5 rounded-2xl" src="<?php echo $absoluteUriPath . '/asset/lesson/staff.png' ?>" />
    <div class="flex flex-col w-full">
      <h3 class="text-2xl">
        小久保晃一 / Kokubo Kouichi<br>
        小久保由加里 / Kokubo Yukari
      </h3>

      <hr class="border-b border-solid border-primary-default self-stretch mt-6">

      <p class="text-base whitespace-pre-line">
        心からのおもてなしをお届けする加須市のゴルフスタジオ「ゴルトモアカデミー」へようこそ！私たちはシニア世代から現役世代、そしてジュニアまで、ゴルフを愛するすべての方々を対象に、最高のレッスン環境を提供しています。

        ゴルトモアカデミーは、ゴルフ愛好者のための特別な場所です。技術の向上と共に、楽しさと満足感を提供いたします。ぜひ、私たちのスタジオでゴルフの新たな次元を体感してください。お待ちしております！
      </p>
    </div>
  </div>

  <div class="mt-10 text-center">
    <?php include $uiPartsPath . '/button/button.php' ?>
  </div>
</div>

<!-- phone -->
<?php
$image = $absoluteUriPath . '/asset/lesson/staff.png';
?>

<div class="hidden phone:flex flex-col justify-start items-center gap-10 ">
  <img src='<?php echo $image ?>' class="w-full rounded-3xl" />

  <div class="flex flex-col">
    <h3 class="text-2xl">
      小久保晃一 / Kokubo Kouichi<br>
      小久保由加里 / Kokubo Yukari
    </h3>
    <hr class="border-b border-solid border-primary-default self-stretch mt-6">
    <p class="text-base whitespace-pre-line">
      心からのおもてなしをお届けする加須市のゴルフスタジオ「ゴルトモアカデミー」へようこそ！私たちはシニア世代から現役世代、そしてジュニアまで、ゴルフを愛するすべての方々を対象に、最高のレッスン環境を提供しています。

      ゴルトモアカデミーは、ゴルフ愛好者のための特別な場所です。技術の向上と共に、楽しさと満足感を提供いたします。ぜひ、私たちのスタジオでゴルフの新たな次元を体感してください。お待ちしております！
    </p>
  </div>

  <?php
  $button = 'スタッフ紹介を見る';
  ?>
  <?php include $uiPartsPath . '/button/button.php' ?>
</div>