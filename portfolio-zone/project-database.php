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
    "id" => "super-ultra-responsive",
    "projectType" => "personal",
    "featured" => false,
    "name" => "Super Ultra Responsive",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS",
    "description" => "A barebones responsive website using media queries and flexbox. Works on any screen size.",
  ],
  [
    "id" => "joyfully-clean",
    "projectType" => "client",
    "featured" => true,
    "name" => "Joyfully Clean",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS, Goal Driven Development",
    "description" => "Identified the goals of a local cleaning company and used those to make an effective website",

  ],
  [
    "id" => "softseaweed",
    "projectType" => "client",
    "featured" => true,
    "name" => "Softseaweed",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "HTML, CSS, Goal Driven Development",
    "description" => "A SaaS company wanted to get seaweed farmers excited about their upcoming product.",
  ],
  [
    "id" => "arrow-animation",
    "projectType" => "experiments",
    "featured" => false,
    "name" => "Arrow Animation",
    "image" => "https://peprojects.dev/alpha-2/blackbox.jpg",
    "tools" => "GSap, CSS",
    "description" => "Used a timeline in GSap. A way to get better at animation",
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
  <div class="project-card my-work-project-card">
    <div class="project-card-text">
      <picture>
        <img src="<?= $project["image"] ?>" alt="$todo">
      </picture>
      <h2 class="stern-voice"><?= $project["name"] ?></h2>
      <p class="quiet-voice"><?= $project["tools"] ?></p>
    </div>
    <a href="?page=detail&project=<?= $project["id"]; ?>">View</a>
  </div>

<?php } ?>

<?php
function renderProjects($projects)
{
  foreach ($projects as $project) {
    renderProject($project);
  }
}
?>