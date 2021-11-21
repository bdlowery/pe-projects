<?php include("project-database.php") ?>
<header class="page-header">
  <div class="inner-column">
    <h1>
      Project Directory
    </h1>
    <p>A directory for all of my work, past and present.</p>
  </div>
</header>

<section>
  <div class="inner-column">
    <h2>Personal Projects</h1>
      <p>Projects that I've made for extra practice and fun.</p>
      <div class="project-cards">
        <?php foreach ($personalProjects as $personal) { ?>
          <div class="project-card">
            <div class="project-card-text">
              <picture>
                <img src="<?= $personal["image"] ?>" alt="$todo">
              </picture>
              <h2><?= $personal["name"] ?></h2>
              <p><?= $personal["tools"] ?></p>
            </div>
            <a href="?page=detail&project=<?= $personal["id"]; ?>">View</a>
          </div>

        <?php } ?>
      </div>
  </div>
</section>

<section>
  <div class="inner-column">
    <h2>Client Projects</h1>
      <p>Every client has an underlying goal with their website. It was my job to identify that goal and build a website accomplishing it.</p>
      <div class="project-cards">
        <?php foreach ($clientProjects as $client) { ?>
          <div class="project-card">
            <div class="project-card-text">
              <picture>
                <img src="<?= $client["image"] ?>" alt="$todo">
              </picture>
              <h2><?= $client["name"] ?></h2>
              <p><?= $client["tools"] ?></p>
            </div>
            <a href="?page=detail&project=<?= $clientProject["id"]; ?>">View</a>
          </div>

        <?php } ?>
      </div>
  </div>
</section>

<section>
  <div class="inner-column">
    <h2>Experiments</h1>
      <p>Things I've made that are too small for a full fledged personal project.</p>
      <div class="project-cards">
        <?php foreach ($experimentProjects as $experiment) { ?>
          <div class="project-card">
            <div class="project-card-text">
              <picture>
                <img src="<?= $experiment["image"] ?>" alt="$todo">
              </picture>
              <h2><?= $experiment["name"] ?></h2>
              <p><?= $experiment["tools"] ?></p>
            </div>
            <a href="?page=detail&project=<?= $experiment["id"]; ?>">View</a>
          </div>

        <?php } ?>
      </div>
  </div>
</section>