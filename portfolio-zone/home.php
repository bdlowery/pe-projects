<?php include("project-database.php") ?>

<section class="about-me-landing">

  <div class="inner-column">
    <div class="who-i-am">
      <h1>Who I am</h1>
      <p>I'm a web developer and web designer who focuses on goal driven development and design for small businesses. I build a relationship with my clients and help them craft a cohesive goal driven website to enhance and compliment their business.</p>
    </div>


    <div class="extra-information">
      <div class="what-i-want">
        <h3>What I want</h3>
        <ul>
          <li>I'm looking for a paid internship as a Front-end Web Developer.</li>
          <li>Here's a list of all of my work, and all of my "experiments". </li>
          <li>If interested, let's get in touch.</li>
        </ul>
      </div>

      <div class="education">
        <h3>Education</h3>
        <ul>
          <li>2nd year Computer Science student at Sacramento State</li>
          <li>• 6 month internship at Perpetual Education</li>
          <li>• Something else here to make this section longer</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="projects">
  <div class="inner-column">
    <h1>Projects</h1>
    <p>Three of my favorite projects. All of them are completely responsive and built mobile first.</p>

    <div class="project-cards">
      <?php foreach ($featuredProjects as $project) { ?>
        <div class="project-card">
          <picture>
            <img src="<?= $project["image"] ?>" alt="$todo">
          </picture>
          <h2><?= $project["name"] ?></h2>
          <p><?= $project["tools"] ?></p>
          <p><?= $project["type"] ?></p>
        </div>
      <?php } ?>
    </div>

    <a class="action-link" href="?page=my-work">View More →</a>
  </div>
</section>