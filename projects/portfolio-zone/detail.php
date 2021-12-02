<?php include("project-database.php");


if (isset($_GET["project"])) {
  $projectId = $_GET["project"];
}


foreach ($projectData as $project) {
  if ($projectId == $project["id"]) {
    //set detail equal to the inidividual project in the object.
    $detail = $project;
  }
}


?>

<?php if (isset($detail)) {  ?>

  <header class="page-header">
    <div class="inner-column">
      <h1 class="title-voice">
        <?= $detail["name"] ?>
      </h1>
      <p><?= $detail["description"]  ?></p>
      <p></p>
    </div>
  </header>


<?php } else { ?>

  <header class="page-header">
    <div class="inner-column">
      <h1 class="title-voice">
        No Project Found
      </h1>
      <p>You've navigated to the wrong page. Go to <a href="./?page=my-work">My Work</a> and try again</p>
    </div>
  </header>
<?php } ?>