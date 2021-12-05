<a href="?page=detail&post=<?= $post["id"] ?>" class="writing-card-link">
  <div class="writing-text">
    <time datetime="2021-11-27" class="quiet-voice"><?= $post["date"] ?></time>
    <h2 class="attention-voice"><?= $post["title"] ?></h2>
    <p class="description-voice"><?= $post["description"]  ?></p>
  </div>
  <span class="quiet-voice read-more">read more →</span>
</a>