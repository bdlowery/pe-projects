<?php include("./database/project-database.php") ?>
<?php include("./modules/page-header.php") ?>

<section>
  <div class="inner-column">
    <div class="projects-intro">
      <h2 class="strong-voice">Personal Projects</h1>
        <p>These are projects I've made to learn and grow as a developer/designer.</p>
    </div>
    <div class="project-cards">

      <?php
      renderProjects($personalProjects);
      ?>

    </div>
  </div>
</section>

<section>
  <div class="inner-column">
    <div class="projects-intro">
      <h2 class="strong-voice">Client Projects</h1>
        <p>I also work with local businesses. I identify their goals as a business and apply those during the design and development of their website.</p>
    </div>
    <div class="project-cards">

      <?php
      renderProjects($clientProjects);
      ?>

    </div>
  </div>
</section>

<section>
  <div class="inner-column">
    <div class="projects-intro">
      <h2 class="strong-voice">Experiments</h1>
        <p>These are fun little one off creations I've made. I usually take these and apply them to a bigger client project or personal project.</p>
    </div>
    <div class="project-cards">

      <?php
      renderProjects($experimentProjects);
      ?>

    </div>
  </div>
</section>