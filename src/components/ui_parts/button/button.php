<?php
// button: string
// href: string
?>

<a href="<?php echo $href ? $href : "#" ?>">
  <button class="border-2 rounded-3xl py-4 px-10 border-blue-400 text-blue-400 bg-white">
    <span class=" text-blue-400">
      <?php echo $button; ?>
    </span>
    <i class="fa-solid fa-chevron-right pl-4 text-blue-400"></i>
  </button>
</a>