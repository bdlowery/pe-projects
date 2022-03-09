<?php
$figureHeading = get_sub_field("heading");
$figureImage = get_sub_field("image")["url"];
$figureAttributionUrl = get_sub_field("attribution")["url"];
$figureAttributionTitle = get_sub_field("attribution")["title"];
$figureCaption = get_sub_field("caption");
$figureAttributionTest = get_sub_field("attribution");
$id = get_sub_field("id");

?>
<section class="<?= $id ?>figure-module">
  <div class="inner-column">
    <h2><?= $figureHeading; ?></h2>
    <figure>
      <picture>
        <img src="<?= $figureImage; ?>" alt="">
      </picture>
      <figcaption>
        <?= $figureCaption ?>

        <?php

        if (!empty($figureAttributionUrl) && !empty($figureAttributionUrl)) { ?>
          <a href="<?= esc_url($figureAttributionUrl); ?>"><?= esc_html($figureAttributionTitle) ?></a>

        <?php }; ?>
      </figcaption>
    </figure>
  </div>
</section>