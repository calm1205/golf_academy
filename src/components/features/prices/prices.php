<?php
$title = '料金プラン';
$image = $absoluteUriPath . '/asset/prices/prices.png';
include $uiPartsPath . '/header/headerImage/headerImage.php';
?>

<div class="w-full flex justify-center">
  <div class="w-4/5 pt-10 pb-[100px] flex flex-col gap-20 items-center bg-white phone:w-full phone:mx-4 px-4 phone:px-0 phone:text-left">
    <?php
    $title = '入会金・事務手数料';
    $table = [
      "入会金" => ["11,000円(税込)"],
      "事務手数料" => ["3,000円(税込)"]
    ];
    $description = null;
    $note = null;
    include 'section/section.php';
    ?>

    <!-- desktop -->
    <div class="mx-auto flex gap-4 text-lg phone:hidden">
      <?php $image = $absoluteUriPath . '/asset/prices/arrow.png'; ?>

      <a href="#basic">
        <div class="w-[180px] py-4 border rounded-3xl text-center">
          気軽にに始める<br>基本コース
          <img src="<?php echo $image ?>" class="mx-auto pt-2">
        </div>
      </a>

      <a href="#middle">
        <div class="w-[180px] py-4 border rounded-3xl text-center">
          しっかり<br>上達コース
          <img src="<?php echo $image ?>" class="mx-auto pt-2">
        </div>
      </a>

      <a href="#beginner">
        <div class="w-[180px] py-4 border rounded-3xl text-center">
          エンジョイ<br>初心者コース
          <img src="<?php echo $image ?>" class="mx-auto pt-2">
        </div>
      </a>

      <a href="#pro">
        <div class="w-[180px] py-4 border rounded-3xl text-center">
          プロ育成<br>コース
          <img src="<?php echo $image ?>" class="mx-auto pt-2">
        </div>
      </a>


    </div>
    <!-- phone -->
    <div class="hidden mx-auto phone:flex gap-4 text-lg">
      <?php $image = $absoluteUriPath . '/asset/prices/arrow.png'; ?>

      <div class="hidden mx-auto phone:flex gap-4 text-lg flex-col">
        <a href="#basic">
          <div class="w-[180px] py-4 border rounded-3xl text-center">
            気軽に始める<br>基本コース
            <img src="<?php echo $image ?>" class="mx-auto pt-2">
          </div>
        </a>

        <a href="#beginner">
          <div class="w-[180px] py-4 border rounded-3xl text-center">
            エンジョイ<br>初心者コース
            <img src="<?php echo $image ?>" class="mx-auto pt-2">
          </div>
        </a>
      </div>

      <div class="hidden mx-auto phone:flex gap-4 text-lg flex-col">

        <a href=" #middle">
          <div class="w-[180px] py-4 border rounded-3xl text-center">
            しっかり<br>上達コース
            <img src="<?php echo $image ?>" class="mx-auto pt-2">
          </div>
        </a>


        <a href="#pro">
          <div class="w-[180px] py-4 border rounded-3xl text-center">
            プロ育成<br>コース
            <img src="<?php echo $image ?>" class="mx-auto pt-2">
          </div>
        </a>
      </div>



    </div>

    <?php
    $title = '気軽に始める基本コース';
    $description = "どうやったらゴルフを上手くなれるんだろう？自分のゴルフスタイルは正しいのかな？
そのような疑問を感じている方には、お気軽に通える基本コースがおすすめです。

基本コースでも教えてくれるコーチはツアープロ！レッスンにはトラックマンも活用！
スイング姿勢からスコアアップまでの具体的な道筋まで、マンツーマンでレクチャーいたします。";
    $table = [
      "レッスン料金" => ["13,000円"],
      "レッスン時間" => ["1回/50分"],
      "レッスン回数" => ["月/2回"],
    ];
    $id = 'basic';
    $note = '※';
    include 'section/section.php';
    ?>

    <?php
    $title = 'しっかり上達コース';
    $description = "いまのスコアよりももっとスコアアップしたい！
狙った弾道を描いて理想のアプローチができるようになりたい！
そんな悩みが出てくる中級者から上級者の方におすすめなのが、しっかり上達コースです。

トラックマンを活用して個人の癖や弾道の特性を解析し、改善点をコーチがレクチャー。
データを見ながらレッスンを受けられるので、上達した実感をすぐに得ることができます。";
    $table = [
      "レッスン料金" => ["25,000円"],
      "レッスン時間" => ["1回/50分"],
      "レッスン回数" => ["月/4回"]
    ];
    $id = 'middle';
    $note = '※';
    include 'section/section.php';
    ?>

    <?php
    $title = '【ジュニア】エンジョイ初心者コース(高校生以下)';
    $description = "このプログラムでは、仲間たちと一緒に楽しみながら学ぶことができるグループレッスン制となってます。
    コミュニケーションや協力を通じて、ゴルフの基本スキルを身につけることができます。

    友情を深めながら、ゴルフの楽しさを共有しましょう。
    初めての方も歓迎していますので、お友達と一緒に参加して、素晴らしいゴルフ体験を楽しんでください！";
    $table = [
      "レッスン料金" => ["10,000円"],
      "レッスン時間" => ["1回/50分"],
      "レッスン回数" => ["週/1回"],
      "レッスン形態" => ["少人数制グループレッスン"]
    ];
    $id = 'beginner';
    $note = null;
    include 'section/section.php';
    ?>

    <?php
    $title = '【ジュニア】プロ育成コース(高校生以下)';
    $description = "ゴルトモアカデミーでは、次代のゴルフを担うジュニアゴルファーの指導にも力を入れています！
    ジュニアコースではゴルフレッスンを通してのスコアアップももちろんですが、
    特に意識しているのは、ゴルフを通してマナーを学んでいただくことです。

    プレッシャーのかかる環境でのマインドコントロール、他のプレイヤーへの配慮など、
    ゴルフから学べることは非常に多いのです。
    人格は一生の財産。アフターゴルフではスコアだけでなく若い頃からゴルフに親しむことによる
    人格育成を意識したレッスンをおこなっています。";
    $table = [
      "レッスン料金" => ["15,000円"],
      "レッスン時間" => ["1回/50分"],
      "レッスン回数" => ["週/2回"],
      "レッスン形態" => ["個人レッスン"]
    ];
    $id = 'pro';
    $note = null;
    include 'section/section.php';

    ?>

    <?php
    $title = 'オプションコース';
    $description = "お客様のご要望にお応えするために、様々なオプションをご用意しております。

可能な限りお客様のご要望にはお応えしたいと思っておりますので、
このオプションにない内容も、お気軽にご相談ください。";
    $table = [
      "追加レッスン" => ["気軽に始める基本コース:1回/6,000円<br>しっかり上達コース:1回/4,000円"],
      "ラウンドレッスン" => ["都度ご案内"]
    ];
    $note = null;
    include 'section/section.php';
    ?>

    <?php
    $title = 'ゴルフ整体';
    $description = "アフターゴルフの提供しているゴルフ専門整体は、練習やラウンドの疲労を軽減するだけでなく、
正しい姿勢でゴルフに臨める身体作りにもおすすめです。

施術内容は柔道整復師の資格を取得したスタッフが監修して作成をしております。
ぜひお試しください。";
    $table = [
      "施術料金" => ["1回/6,000円"],
    ];
    $note = null;
    include 'section/section.php';
    ?>

    <?php include 'notes/notes.php' ?>

  </div>
</div>