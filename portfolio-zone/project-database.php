<?php

$projectData = [
  [
    "id" => "layout-in-paradise",
    "projectType" => "personal",
    "featured" => true,
    "name" => "Layout in Paradise",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS, PHP",
    "description" => "An exploration of PHP themeing and working with constraints",
  ],
  [
    "id" => "bookmarkly",
    "projectType" => "personal",
    "featured" => false,
    "name" => "Bookmarkly",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS, Javascript",
    "description" => "Practice making a website from a Figma design.",
  ],
  [
    "id" => "super-responsive",
    "projectType" => "personal",
    "featured" => false,
    "name" => "Super Responsive",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS",
    "description" => "A barebones responsive website using media queries and flexbox.",
  ],
  [
    "id" => "joyfully-clean",
    "projectType" => "client",
    "featured" => true,
    "name" => "Joyfully Clean",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS, Design, Development",
    "description" => "Identified the goals of a local cleaning company and used them to make an effective website",

  ],
  [
    "id" => "softseaweed",
    "projectType" => "client",
    "featured" => true,
    "name" => "Softseaweed",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS, Design, Development",
    "description" => "A SaaS company wanted to get seaweed farmers excited about their upcoming product.",
  ],
  [
    "id" => "arrow-animation",
    "projectType" => "experiments",
    "featured" => false,
    "name" => "Arrow Animation",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "GSap, CSS",
    "description" => "Explored timelines in GSap to get better at animation.",
  ],
  [
    "id" => "get-axed",
    "projectType" => "client",
    "featured" => false,
    "name" => "Get Axed",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS, Design, Development",
    "description" => "Overhauled a local businesses website from design to code.",
  ],
];

function getProjects($data, $key, $value)
{

  $projects = array_filter($data, function ($project) use ($key, $value) {
    return $project[$key] == $value;
  });

  return $projects;
}

$clientProjects = getProjects($projectData, "projectType", "client");
$personalProjects = getProjects($projectData, "projectType", "personal");
$experimentProjects = getProjects($projectData, "projectType", "experiments");
$featuredProjects = getprojects($projectData, "featured", true);
?>

<?php function renderProject($project)
{ ?>
  <a class="project-card-link" href="?page=detail&project=<?= $project["id"]; ?>">
    <div class="project-card my-work-project-card">
      <div class="project-card-text">
        <picture class="project-picture">
          <img src="<?= $project["image"] ?>" alt="$todo">
        </picture>
        <h2 class="stern-voice"><span><?= $project["name"] ?></span></h2>
        <p class="quiet-voice"><?= $project["tools"] ?></p>
        <p class="description-voice"><?= $project["description"]  ?></p>
      </div>

    </div>
  </a>

<?php } ?>

<?php
function renderProjects($projects)
{
  foreach ($projects as $project) {
    renderProject($project);
  }
}
?>

<!-- <div class="writing-cards">
      <div class="writing-card">
        <div class="writing-text">
          <time datetime="2021-11-27" class="quiet-voice">November 27, 2021</time>
          <h2 class="attention-voice">Learn how to use Flexbox with a few easy to follow steps</h2>
          <p class="regular-voice">Flexbox doesn't have to be hard, you just made it hard! I can break it down in a few simple steps to get you started on the right track.</p>
        </div>
        <span class="description-voice">read more →</span>
      </div>
    </div> -->