<articles-intro>

  <header>
    <h2 class='attention-voice'>This is and "Article grid" module. This is its heading.</h2>

    <p class='calm-voice'>Again, we totally just made that up. It's a box with boxes in it.</p>
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