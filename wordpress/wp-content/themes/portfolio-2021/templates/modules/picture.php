<?php
$imageHeading = get_sub_field("heading");
$image = get_sub_field("image")["url"];
$imageDescription = get_sub_field("description");
$has_intro = get_sub_field("has_intro");
$intro = get_sub_field("intro");
?>

<section class="picture-module">
  <div class="inner-column">
    <?php if ($imageHeading) { ?>
      <h2><?= $imageHeading; ?></h2>
    <?php } ?>

    <?php if ($has_intro) { ?>
      <?= $intro ?>
    <?php } ?>
    <picture>
      <img src="<?= $image; ?>" alt="">
    </picture>
    <?= $imageDescription; ?>
  </div>
</section>