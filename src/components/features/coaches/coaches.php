<?php
$title = 'コーチ紹介';
$image = $absoluteUriPath . '/asset/prices/prices.png';
include $uiPartsPath . '/header/headerImage/headerImage.php';
?>

<div class="my-20 mx-auto flex flex-col w-4/5 phone:hidden">

  <div class="flex gap-6 mb-20">
    <?php
    $image = $absoluteUriPath . '/asset/coaches/coach1.png';
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
      <?php $image =  $absoluteUriPath . '/asset/coaches/twoSpuares.png'; ?>
      <img src="<?php echo $image ?>" class="">




    </div>

  </div>

  <div class="flex flex-row-reverse gap-6 mb-10">

    <?php
    $image = $absoluteUriPath . '/asset/coaches/coach2.png';
    ?>
    <img src="<?php echo  $image ?>">

    <div class="flex flex-col gap-4">

      <div>
        <h3 class="text-xl">Kokubo Yukari</h3>
        <h2 class="text-3xl font-bold mb-0">小久保由加里</h2>
      </div>

      <hr class="border-b border-solid border-primary-default self-stretch">

      <div class="flex flex-col gap-2">

        <div class="flex gap-2">
          <p class="text-white bg-gray-700 rounded text-center w-[136px]">所属</p>
          <p>一般社団法人 日本女子プロゴルフ協会員（入会：2010年8月1日（82期生））</p>
        </div>

        <div class="flex gap-2">
          <p class="text-white bg-gray-700 rounded text-center w-[136px] h-6">レッスンスタイル</p>
          <p>一人ひとりに合ったアドバイスで体に負担が少なく楽しいゴルフが出来るように、<br>お役に立てるレッスンをしたいと思います。</p>
        </div>

      </div>

      <p>高校卒業後バスケット女子日本リーグ一部の強豪・日本通運の社会人選手として活躍。6年後に退社し、以前から興味のあったプロゴルファーを目指しゴルフ場の研修生に。41歳史上2番目の年長記録でプロテストに合格。<br>現在レジェンズツアー参戦中。<br>将来を見据え新たな挑戦としてインドアゴルフスタジオのヘッドコーチに就任。<br>夫 小久保晃一プロの地元である埼玉県で二人三脚で皆様にゴルフの楽しさを伝える事を楽しみにしています。</p>

    </div>

  </div>

  <?php $image =  $absoluteUriPath . '/asset/coaches/twoSquaresReverse.png'; ?>
  <img src="<?php echo $image ?>" class="w-[100px] h-[100px]">

</div>

<!-- phone -->

<div class="my-10 mx-4 hidden phone:flex flex-col gap-10">

  <div class="flex flex-col gap-4">
    <?php
    $image = $absoluteUriPath . '/asset/coaches/coach1_responsive.png';
    ?>
    <img src="<?php echo  $image ?>" class="w-4/5 self-center">

    <div>
      <h3 class="text-xl">Kokubo Kouichi</h3>
      <h2 class="text-3xl font-bold mb-0">小久保晃一</h2>
    </div>

    <hr class="border-b border-solid border-primary-default self-stretch">

    <div class="">
      <p class="text-white bg-gray-700 font-bold text-sm rounded px-[12px] py-[6px] w-[56px] mb-[8px]">所属</p>
      <p>公益財団法人 日本プロゴルフ協会員 (入会：2002年)</p>
    </div>

    <div class="mb-4">
      <p class="text-white bg-gray-700 font-bold text-sm rounded px-[12px] py-[6px] w-[136px] mb-[8px]">レッスンスタイル</p>
      <p>流行りに左右されず、お客様に寄り添ったレッスンを行います。</p>
    </div>

    <p>現在50歳で、昨年よりPGAシニアツアーの出場を目指し、2年連続でQT決勝に進出している。<br>リアルトーナメントプレーヤーであり、自分のベースを作るために新たな挑戦として、インドアゴルフスタジオのヘッドコーチに就任した。<br>埼玉県に戻り、自身の出身地である場所でゴルフの楽しさを皆様に伝えるために頑張ります。</p>

    <?php $image =  $absoluteUriPath . '/asset/coaches/twoSpuares.png'; ?>
    <img src="<?php echo $image ?>" class="self-end">

  </div>


  <div class="flex flex-col gap-4">
    <?php
    $image = $absoluteUriPath . '/asset/coaches/coach2_responsive.png';
    ?>
    <img src="<?php echo  $image ?>" class="w-4/5 self-center">

    <div>
      <h3 class="text-xl">Kokubo Yukari</h3>
      <h2 class="text-3xl font-bold mb-0">小久保由加里</h2>
    </div>

    <hr class="border-b border-solid border-primary-default self-stretch">

    <div class="">
      <p class="text-white bg-gray-700 font-bold text-sm rounded px-[12px] py-[6px] w-[56px] mb-[8px]">所属</p>
      <p>一般社団法人 日本女子プロゴルフ協会員<br>（入会：2010年8月1日（82期生））</p>
    </div>

    <div class="mb-4">
      <p class="text-white bg-gray-700 font-bold text-sm rounded px-[12px] py-[6px] w-[136px] mb-[8px]">レッスンスタイル</p>
      <p>一人ひとりに合ったアドバイスで体に負担が少なく楽しいゴルフが出来るように、<br>お役に立てるレッスンをしたいと思います。</p>
    </div>

    <p>高校卒業後バスケット女子日本リーグ一部の強豪・日本通運の社会人選手として活躍。6年後に退社し、以前から興味のあったプロゴルファーを目指しゴルフ場の研修生に。41歳史上2番目の年長記録でプロテストに合格。<br>現在レジェンズツアー参戦中。<br>将来を見据え新たな挑戦としてインドアゴルフスタジオのヘッドコーチに就任。<br>夫 小久保晃一プロの地元である埼玉県で二人三脚で皆様にゴルフの楽しさを伝える事を楽しみにしています。</p>

    <?php $image =  $absoluteUriPath . '/asset/coaches/twoSquaresReverse.png'; ?>
    <img src="<?php echo $image ?>" class="self-start">

  </div>


</div>