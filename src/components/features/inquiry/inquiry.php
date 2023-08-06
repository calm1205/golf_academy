<div class="w-screen h-60 bg-white flex justify-center items-center border-blue-400 border-2">
  <h1 class="text-blue-400 text-5xl">お問い合わせ</h1>
</div>

<div class="max-w-5xl py-20 phone:my-10 flex flex-col gap-20 phone:gap-6 mx-auto phone:mx-4 bg-white">
  <div class="flex flex-col gap-[14px] items-center">
    <h3 class="text-xl font-bold">お急ぎの方はお電話にてご連絡ください！</h3>

    <div class="flex gap-2 border items-center border-blue-400 rounded-4 rounded p-[10px]">
      <i class="fa-solid fa-phone text-blue-400"></i>
      <a href="tel:0480-53-3334">
        <p class="text-blue-400 font-bold">0480-53-3334</p>
      </a>
    </div>

    <p>営業時間：10:00〜21:00 | 定休日：水曜日</p>
  </div>

  <form class="flex flex-col gap-10 w-[750px] phone:w-full mx-auto ">
    <div class="flex flex-col gap-2">
      <p class="font-bold">名前（必須）</p>
      <input type="text" name="NAME" class="border w-full" required>
    </div>

    <div>
      <p class="font-bold">ふりがな（必須）</p>
      <input type="text" class="border w-full" required>
    </div>

    <div>
      <p class="font-bold">電話番号（必須）</p>
      <input type="number" class="border w-full" required>
    </div>

    <div>
      <p class="font-bold">メールアドレス</p>
      <input type="email" class="border w-full">
    </div>

    <div>
      <p class="font-bold">お問い合わせ内容（必須）</p>
      <textarea cols="30" rows="10" class="border w-full" required></textarea>
    </div>

    <button type="submit" class="w-60 h-[60px] flex items-center justify-center text-white bg-blue-400 mx-auto rounded-[30px]">送信する</button>

  </form>

</div>