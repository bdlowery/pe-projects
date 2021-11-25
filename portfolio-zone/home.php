<?php include("project-database.php") ?>

<section class="about-me-landing">

  <div class="inner-column">
    <div class="who-i-am">
      <h1 class="loud-voice">Who I am</h1>
      <p><strong>Hello!</strong> I'm a web developer and web designer who focuses on goal driven development and design for small businesses. I build a relationship with my clients and help them craft a cohesive goal driven website to enhance and compliment their business.</p>
    </div>


    <div class="extra-information">
      <div class="what-i-want">
        <h3 class="attention-voice">What I want</h3>
        <ul>
          <li>I'm looking for a paid internship as a Front-end Web Developer.</li>
          <li>Here's a list of all of my work, and all of my "experiments". </li>
          <li>If interested, let's get in touch.</li>
        </ul>
      </div>

      <div class="education">
        <h3 class="attention-voice">Education</h3>
        <ul>
          <li>2nd year Computer Science student at Sacramento State</li>
          <li>6 month internship at Perpetual Education</li>
          <li>Something else here to make this section longer</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="projects">
  <div class="inner-column">
    <div class="projects-intro">
      <h1 class="loud-voice">Projects</h1>
      <p>I like to stay busy and always have a project in the works. Here are the most recent projects I've designed and developed.</p>
    </div>
    <div class="project-cards">
      <?php foreach ($featuredProjects as $project) { ?>
        <a class="project-card-link" href="?page=detail&project=<?php $project["id"] ?>">
          <div class="project-card">
            <picture class="project-picture">
              <img src="<?= $project["image"] ?>" alt="$todo">
            </picture>
            <h2 class="stern-voice"><?= $project["name"] ?></h2>
            <p class="quiet-voice"><?= $project["tools"] ?></p>
            <p class="micro-voice"><em><?= $project["projectType"] ?></em></p>
          </div>
        </a>
      <?php } ?>
    </div>

    <a class="action-link" href="?page=my-work">View More →</a>
  </div>
</section>