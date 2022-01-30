<?php
$title = get_the_title();
$permalink = get_the_permalink();
$description = get_the_excerpt();
$date = get_the_date();
$dateNumbersOnly = get_the_date("Y-m-d")
?>




<a href="<?= $permalink ?>" class="writing-page-card">
  <div class="writing-text">
    <h2 class="strong-voice"><span><?= $title; ?></span></h2>
    <time datetime="<?= $dateNumbersOnly  ?>" class="quiet-voice"><?= $date; ?></time>
    <p class="description-voice"><?= $description ?></p>
  </div>
</a>