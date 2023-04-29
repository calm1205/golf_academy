<?php // タイトルの斜め線 
?>
<?php $width = 40; ?>


<?php // 斜めの長さを三平方の定理で算出 
?>
<?php $line_length = round(sqrt(2 * ($width * $width))); ?>

<div class="h-10" style="width: <?php echo $width; ?>px">
  <div class="h-10 border-b-[3px] border-solid border-white -rotate-45 origin-bottom-left" style="width: <?php echo $line_length; ?>px"></div>
</div>