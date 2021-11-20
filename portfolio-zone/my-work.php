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
    <h2>Personal</h1>
      <p>Projects that I've made for extra practice and fun!</p>

      <div class="my-work-cards">
        <?php foreach ($myWorkPersonal as $personal) { ?>
          <div class="project-card">
            <div class="project-card-text">
              <picture>
                <img src="<?= $personal["image"]; ?>" alt="$todo">
              </picture>
              <h3><?= $personal["name"]; ?></h3>
              <p><?= $personal["tools"]; ?></p>
              <p><?= $personal["description"]; ?></p>
            </div>
            <a href="?page=detail&project=<?= $personal["id"]; ?>">View</a>
          </div>
        <?php } ?>
      </div>
  </div>
</section>

<section>
  <div class="inner-column">
    <h2>Client</h2>
    <p>Every website had a goal, and it was my job to identify the goal and build a website to accomplish that goal.</p>

    <div class="my-work-cards">
      <?php foreach ($myWorkClient as $client) { ?>
        <div class="project-card">
          <picture>
            <img src="<?= $client["image"]; ?>" alt="$todo">
          </picture>
          <h3><?= $client["name"]; ?></h3>
          <p><?= $client["tools"]; ?></p>
          <p><?= $client["description"]; ?></p>
          <a href="?page=detail&project=<?= $client["id"]; ?>">View</a>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<section>
  <div class="inner-column">
    <h2>Experiments</h1>

      <div class="my-work-cards">
        <?php foreach ($myWorkExperiments as $experiment) { ?>
          <div class="project-card">
            <picture>
              <img src="<?= $experiment["image"]; ?>" alt="$todo">
            </picture>
            <h3><?= $experiment["name"]; ?></h3>
            <p><?= $experiment["tools"]; ?></p>
            <p><?= $experiment["description"]; ?></p>
            <a href="?page=detail&project=<?= $experiment["id"]; ?>">View</a>
          </div>
        <?php } ?>
      </div>
  </div>
</section>