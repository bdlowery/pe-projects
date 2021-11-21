<?php include("project-database.php") ?>

<?php
$projectName = "";
$projectDescription = "";
$projectNameError = false;
$projectDescriptionError = false;
$submitted = false;
if (isset($_POST["submit-button"])) {


  if (isset($_POST["projectName"])) {
    $projectName = $_POST["projectName"];

    if (strlen($projectName) > 0) {
      $hasProjectName = true;
    } else {
      $projectNameError = "Enter a project name!";
    }
  }

  if (isset($_POST["projectDescription"])) {
    $projectDescription = $_POST["projectDescription"];

    if (strlen($projectDescription) > 0 && strlen(trim($projectDescription)) > 0) {
      $hasProjectDescription = true;
    } else {
      $projectDescriptionError = "Enter a project description!!";
    }
  }

  if ($hasProjectName && $hasProjectDescription) {
    $submitted = "Your idea has been submitted, thank you!";

    $suggestedProject = [
      "name" => $projectName,
      "description" => $projectDescription,
    ];

    $suggestedProjectJson = json_encode($suggestedProject);
    file_put_contents("suggestedProjects.json", $suggestedProjectJson);

    $projectName = "";
    $projectDescription = "";
  }
}
?>

<header class="page-header">
  <div class="inner-column">
    <h1>
      Suggest a Project
    </h1>
    <p>Have an interesting idea for a project? Suggest it here!</p>
  </div>
</header>

<section>
  <div class="inner-column">
    <form method="POST">

      <div class="field">
        <label>Project Name</label>
        <input type="text" name="projectName" value="<?= trim($projectName) ?>">
        <?php if ($projectNameError) { ?>
          <p><?= $projectNameError ?></p>
        <?php } ?>
      </div>

      <div class="field">
        <label>Project Description</label>
        <textarea name="projectDescription" type="text" rows="4" cols="40"><?= trim($projectDescription) ?></textarea>
        <?php if ($projectDescriptionError) { ?>
          <p><?= $projectDescriptionError ?></p>
        <?php } ?>
      </div>

      <button name="submit-button" type="submit" class="submit-button">Suggest</button>
    </form>

    <p><?= $submitted ?></p>
  </div>
</section>