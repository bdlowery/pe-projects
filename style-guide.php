<?php include("./modules/page-header.php") ?>
<?php include("./database/style-guide-database.php") ?>
<?php include("./database/project-database.php") ?>
<?php include("./database/writing-database.php") ?>


<?php
$testProjects = [
  [
    "id" => "test",
    "image" => "https://peprojects.dev/alpha-2/purplebox.jpg",
    "name" => "Project Name",
    "tools" => "TOOLS USED",
    "projectType" => "Type of project",
    "description" => "This is the description of the project. It will be on multiple lines."
  ],
  [
    "id" => "test",
    "image" => "https://peprojects.dev/alpha-2/purplebox.jpg",
    "name" => "Project Name",
    "tools" => "TOOLS USED",
    "projectType" => "Type of project",
    "description" => "This is the description of the project. It will be on multiple lines."
  ],
  [
    "id" => "test",
    "image" => "https://peprojects.dev/alpha-2/purplebox.jpg",
    "name" => "Project Name",
    "tools" => "TOOLS USED",
    "projectType" => "Type of project",
    "description" => "This is the description of the project. It will be on multiple lines."
  ],

];

$testPost = [
  "title" => "This is an example title for an article on this website",
  "description" => "There will be a short description about the article included to give the reader an idea of what the article is about. It will be multiple lines.",
  "date" => "December 28, 2021",
]
?>

<section class="style-guide fonts">
  <div class="inner-column">
    <div class="style-guide-text">
      <h2 class="attention-voice">Fonts</h2>
      <hr>
    </div>
    <div class="marvin-visions-bold">
      <p style="font-family: 'Marvin Visions Big Bold'; font-size: 30px;">Marvin Visions Big Bold</p>
    </div>
    <div class="helvetica-neue">
      <p>Helvetica Neue</p>
    </div>
  </div>
</section>

<section class="style-guide type-patterns">
  <div class="inner-column">

    <div class="style-guide-text">
      <h2 class="attention-voice">Type Patterns</h2>
      <p>Different font sizes used throughout the site, classified into what I call "type patterns".</p>
      <hr>
    </div>
    <?php foreach ($typePatterns as $typePattern) { ?>
      <div class="<?= $typePattern["id"] ?> specific-pattern">
        <p class="<?= $typePattern["id"] ?>">
          <?= $typePattern["id"] ?>
          abcdefghijklmnopqrstuvwxyz</p>
      </div>
    <?php } ?>
  </div>
</section>

<section class="style-guide site-wide-nav">
  <div class="inner-column">
    <div class="style-guide-text">
      <h2 class="attention-voice">
        Site menu
      </h2>
      <hr>
    </div>
    <div class="site-wide-nav">
      <?php include("./modules/site-menu.php") ?>
    </div>
  </div>
</section>

<section class="style-guide home-section-intro">
  <div class="inner-column">
    <div class="style-guide-text">
      <h2 class="attention-voice">
        Section intro
      </h2>
      <hr>
    </div>
    <div class="section-intro">
      <h1 class="loud-voice">Section</h1>
      <p>This is the intro paragraph to a new section on the homepage. It will most likely be multiple lines, and it will introduce the section</p>
    </div>
  </div>
</section>

<section class="style-guide project-card-module">
  <div class="inner-column">
    <div class="style-guide-text">
      <h2 class="attention-voice">
        Project Card
      </h2>
      <hr>
    </div>
    <div class="individual-project">
      <?php renderProject($testProjects[0]) ?>
    </div>
  </div>
</section>

<section class="style-guide project-cards-module">
  <div class="inner-column">
    <div class="style-guide-text">
      <h2 class="attention-voice">
        Project Cards
      </h2>
      <hr>
    </div>
    <div class="multiple-projects">
      <?php renderProjects($testProjects) ?>

    </div>
  </div>
</section>

<section class="style-guide writing-card-module">
  <div class="inner-column">
    <div class="style-guide-text">
      <h2 class="attention-voice">
        Writing Card
      </h2>
      <hr>
    </div>
    <div class="individual-writing-card">
      <?php renderWriting($testPost) ?>

    </div>
  </div>
</section>

<section class=" style-guide writing-cards-module">
  <div class="inner-column">
    <div class="style-guide-text">
      <h2 class="attention-voice">
        Writing Cards
      </h2>
      <hr>
    </div>
    <div class="writing-cards">
      <?php renderWritings($featuredPosts) ?>

    </div>
  </div>
</section>