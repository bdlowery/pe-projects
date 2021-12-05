<?php include("./database/project-database.php");
include("./database/writing-database.php");


if (isset($_GET["project"])) {
  $projectId = $_GET["project"];

  foreach ($projectData as $project) {
    if ($projectId == $project["id"]) {
      //set detail equal to the inidividual project in the object.
      $detail = $project;
    }
  }
}

if (isset($_GET["post"])) {
  $postId = $_GET["post"];

  foreach ($writingData as $post) {
    if ($postId == $post["id"]) {
      //set detail equal to the inidividual project in the object.
      $detail = $post;
    }
  }
}
?>

<?php if (isset($detail) && isset($project)) {  ?>

  <header class="page-header">
    <div class="inner-column">
      <h1 class="title-voice">
        <?= $detail["name"] ?>
      </h1>
      <p><?= $detail["description"]  ?></p>
    </div>
  </header>


<?php } elseif (isset($detail) && isset($post)) { ?>

  <header class="page-header">
    <div class="inner-column">
      <h1 class="loud-voice">
        <?= $detail["title"] ?>
      </h1>
      <p><?= $detail["description"]  ?></p>
    </div>
  </header>
<?php } else { ?>

  <header class="page-header">
    <div class="inner-column">
      <h1 class="title-voice">
        Page not found
      </h1>
      <p>You've navigated to the wrong page. Go to <a href="./?page=home">The Homepage</a> and try again</p>
    </div>
  </header>
<?php } ?>