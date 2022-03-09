<?php
$text = get_sub_field('content');
$id = get_sub_field("id");
?>
<section class=" <?= $id ?> text-module">
  <div class="inner-column">
    <div class="text-content">
      <?= $text ?>
    </div>
  </div>
</section>