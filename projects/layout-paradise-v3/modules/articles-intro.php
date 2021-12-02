<articles-intro>

  <header>
    <?php if ($theme === "couple") { ?>
      <h2 class='attention-voice'>Tailored Experiences</h2>

      <p class='calm-voice'>Designed to ensure you feel inspired and can unwind in harmony, no matter if you come as a couple, family, or group, and no matter the age or desires.</p>
    <?php } else { ?>
      <h2 class='attention-voice'>Endless Entertainment</h2>

      <p class='calm-voice'>Children laughing and smiling as they splash in the waves. The bliss of a long-awaited, well-deserved spa day. We offer something special for everyone.</p>
    <?php } ?>
  </header>

  <article-grid>
    <!-- acting as an example database -->
    <?php if ($theme === "couple") { ?>
      <?php foreach ($coupleDatabase as $article) { ?>
        <?php include('article-card.php'); ?>
      <?php } ?>
    <?php } else { ?>
      <?php foreach ($familyDatabase as $article) { ?>
        <?php include('article-card.php'); ?>
      <?php } ?>
    <?php } ?>
  </article-grid>

</articles-intro>