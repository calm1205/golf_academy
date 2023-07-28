<?php
$title = 'コーチ紹介';
$image = $absoluteUriPath . '/asset/prices/prices.png';
include $uiPartsPath . '/header/headerImage/headerImage.php';
?>

<div class="my-20 mx-auto flex flex-col gap-20 w-4/5 ">

  <div class="flex gap-6">
    <?php
    $image = $absoluteUriPath . '/asset/coachesA/coach.png';
    ?>
    <img src="<?php echo  $image ?>">

    <div class="flex flex-col items-end justify-between">

      <div class="flex flex-col gap-4">

        <div>
          <h3 class="text-xl">Kokubo Kouichi</h3>
          <h2 class="text-3xl font-bold mb-0">小久保晃一</h2>
        </div>

        <hr class="border-b border-solid border-primary-default self-stretch">

        <div class="flex flex-col gap-2">

          <div class="flex gap-2">
            <p class="text-white bg-gray-700 rounded text-center w-[136px]">所属</p>
            <p>公益財団法人 日本プロゴルフ協会員 (入会：2002年)</p>
          </div>

          <div class="flex gap-2">
            <p class="text-white bg-gray-700 rounded text-center w-[136px]">レッスンスタイル</p>
            <p>流行りに左右されず、お客様に寄り添ったレッスンを行います。</p>
          </div>

        </div>

        <p>現在50歳で、昨年よりPGAシニアツアーの出場を目指し、2年連続でQT決勝に進出している。<br>リアルトーナメントプレーヤーであり、自分のベースを作るために新たな挑戦として、インドアゴルフスタジオのヘッドコーチに就任した。<br>埼玉県に戻り、自身の出身地である場所でゴルフの楽しさを皆様に伝えるために頑張ります。</p>

      </div>
      <?php $image =  $absoluteUriPath . '/asset/coachesA/twoSpuare.png'; ?>
      <img src="<?php echo $image ?>" alt="">




    </div>

  </div>

  <div class="flex flex-row-reverse gap-6">

  </div>

</div>