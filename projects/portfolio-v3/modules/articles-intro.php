<articles-intro>

  <header>
    <h2 class='attention-voice'>This is and "Article grid" module. This is its heading.</h2>

    <p class='calm-voice'>Again, we totally just made that up. It's a box with boxes in it.</p>
  </header>

  <article-grid>
    <!-- acting as an example database -->
    <?php foreach ($articleDatabase as $article) {
      include('article-card.php');
    } ?>

  </article-grid>

</articles-intro>