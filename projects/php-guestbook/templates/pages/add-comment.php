<?php
$name = "";
$comment = "";
if (isset($_POST["submit-button"])) {
  if (isset($_POST["name"])) {
    $name = trim($_POST["name"]);
  }
  if (isset($_POST["comment"])) {
    $comment = trim($_POST["comment"]);
  }

  $newComment = [
    "name" => $name,
    "comment" => $comment
  ];

  addComment($newComment);
}

?>
<section>
  <!-- <h1>This is the add comments page</h1> -->
  <?php
  include("./templates/modules/form.php");
  ?>
</section>