<div class="w-screen h-60 bg-white flex justify-center items-center border-blue-400 border-2">
  <h1 class="text-blue-400 text-5xl">お問い合わせ</h1>
</div>

<div class="my-20 flex flex-col gap-20 mx-auto">

  <!-- denwa -->
  <div class="flex flex-col gap-[14px] items-center">
    <h3>お急ぎの方はお電話にてご連絡ください！</h3>

    <div class="flex gap-2 border border-blue-400 rounded-4 p-[10px]">
      <?php $image = $absoluteUriPath . '/asset/inquiry/phone.png'; ?>
      <img src="<?php echo $image ?>">
      <p>0480-53-3334</p>
    </div>

    <p>営業時間：10:00〜21:00 | 定休日：水曜日</p>
  </div>

  <!-- fo-mu -->
  <form class="flex flex-col gap-10 w-[750px] mx-auto">

    <div class="flex flex-col gap-2">
      <p>名前（必須）</p>
      <input type="text" name="NAME" class="border w-full">
    </div>

    <div>
      <p>ふりがな（必須）</p>
      <input type="text" class="border w-full">
    </div>

    <div>
      <p>電話番号（必須）</p>
      <input type="number" class="border w-full">
    </div>

    <div>
      <p>メールアドレス</p>
      <input type="email" class="border w-full">
    </div>

    <div>
      <p>お問い合わせ内容（必須）</p>
      <textarea cols="30" rows="10" class="border w-full"></textarea>
    </div>

    <button type="submit">送信する</button>

  </form>

</div>