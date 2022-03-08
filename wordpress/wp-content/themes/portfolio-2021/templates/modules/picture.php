<?php
$imageHeading = get_sub_field("heading");
$image = get_sub_field("image")["url"];
$imageDescription = get_sub_field("description");

$hasIntro = get_sub_field("has_intro");
$intro = get_sub_field("intro");

$hasSecondImage = get_sub_field("has_second_image");
$secondImage = get_sub_field("second_image")["url"];
$secondDescription = get_sub_field("second_description");
?>

<section class="picture-module">
  <div class="inner-column">
    <?php if ($imageHeading) { ?>
      <h2><?= $imageHeading; ?></h2>
    <?php } ?>

    <?php if ($hasIntro) { ?>
      <?= $intro ?>
    <?php } ?>
    <picture>
      <img src="<?= $image; ?>" alt="">
    </picture>
    <?= $imageDescription; ?>

    <?php if ($hasSecondImage) { ?>
      <picture>
        <img src="<?= $secondImage; ?>" alt="">
      </picture>
      <?= $secondDescription ?>
    <?php } ?>
  </div>
</section>