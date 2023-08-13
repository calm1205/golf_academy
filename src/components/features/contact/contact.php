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

    <!-- mail フォーム -->
    <div class="mt-8 min-w-2/4 
      [&_form]:flex [&_form]:flex-col [&_form]:gap-10
      [&_p]:flex [&_p]:justify-center
      
      <!-- error box -->
      [&_.screen-reader-response>ul]:hidden
      
      <!-- label -->
      [&_label]:font-bold [&_label]text-base [&_label]:w-full
      
      <!-- input -->
      [&_input]:border [&_input]:w-full [&_input]:p-2 [&_input]:font-normal [&_input]:rounded
      [&_input.wpcf7-not-valid]:border-red-600 [&_input.wpcf7-not-valid]:bg-red-100

      <!-- textarea -->
      [&_textarea]:border [&_textarea]:w-full [&_textarea]:p-2 [&_textarea]:font-normal

      <!-- button -->
      [&_input.wpcf7-submit]:bg-primary-light [&_input.wpcf7-submit]:rounded-full [&_input.wpcf7-submit]:text-white
      [&_input.wpcf7-submit]:w-[200px] [&_input.wpcf7-submit]:cursor-pointer

      <!-- error message -->
      [&_span_span]:text-red-600 [&_span>span]:text-sm [&_span>span]:font-normal
    ">
      <?php echo do_shortcode('[contact-form-7 id="33"]'); ?>
    </div>
  </div>
</div>