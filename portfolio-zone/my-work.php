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

        <?php
        renderProjects($personalProjects);
        ?>

      </div>
  </div>
</section>

<section>
  <div class="inner-column">
    <h2>Client Projects</h1>
      <p>Every client has an underlying goal with their website. It was my job to identify that goal and build a website accomplishing it.</p>
      <div class="project-cards">

        <?php
        renderProjects($clientProjects);
        ?>

      </div>
  </div>
</section>

<section>
  <div class="inner-column">
    <h2>Experiments</h1>
      <p>Things I've made that are too small for a full fledged personal project.</p>
      <div class="project-cards">

        <?php
        renderProjects($experimentProjects);
        ?>

      </div>
  </div>
</section>