<a class="project-card-link" href="?page=detail&project=<?= $project["id"] ?>">
  <div class="project-card">
    <picture class="project-picture">
      <img src="<?= $project["image"] ?>" alt="$todo">
    </picture>
    <h2 class="stern-voice"><span><?= $project["name"] ?></span></h2>
    <p class="quiet-voice"><?= $project["tools"] ?></p>
    <p class="micro-voice"><em><?= $project["projectType"] ?></em></p>
  </div>
</a>