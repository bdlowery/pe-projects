<?php include("./database/project-database.php") ?>
<?php include('./database/writing-database.php') ?>

<section class="about-me-landing">

  <div class="inner-column">
    <div class="who-i-am">
      <h1 class="loud-voice">Who I am</h1>
      <p><strong>Hello!</strong> I'm a web developer and web designer who focuses on goal driven development and design for small businesses. I build a relationship with my clients and help them craft a cohesive goal driven website to enhance and compliment their business.</p>
    </div>


    <div class="extra-information">
      <div class="what-i-want">
        <h2 class="attention-voice">What I want</h3>
          <ul>
            <li>I'm looking for a paid internship as a Front-end Web Developer.</li>
            <li>Here's a list of all of my work, and all of my "experiments". </li>
            <li>If interested, let's get in touch.</li>
          </ul>
      </div>

      <div class="education">
        <h2 class="attention-voice">Education</h3>
          <ul>
            <li>2nd year Computer Science student at Sacramento State</li>
            <li>6 month internship at Perpetual Education</li>
            <li>Attending a Web Development / Web Design Bootcamp</li>
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
        <?php include("./modules/project-card.php") ?>
      <?php } ?>
    </div>

    <a class="action-link" href="?page=my-work">View More →</a>
  </div>
</section>

<section class="writing">
  <div class="inner-column">
    <div class="writing-intro">
      <h1 class="loud-voice">Writing</h1>
      <p>Some intro thing I don't know what to put here please send help please and thank you those are the magic words.</p>
    </div>
    <div class="writing-cards">
      <?php renderWritings($featuredPosts) ?>
    </div>
    <a href="?page=writing" class="action-link">View More →</a>
  </div>
</section>