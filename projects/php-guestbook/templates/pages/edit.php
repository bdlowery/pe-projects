<?php
//retreive the id from the url &id=_____
$id = $_GET["id"];

//open the database and retrieve the comments
$comments = getComments()["items"];

//check if the id in the url matches the id in the json
foreach ($comments as $commentId => $comment) {
  if ($id == $commentId) {
    include("templates/modules/edit-form.php");
  }
}

?>

<section>
  edit.php
</section>