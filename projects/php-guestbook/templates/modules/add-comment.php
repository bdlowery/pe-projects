<?php
//after form is submitted make the variables empty.
$name = "";
$comment = "";
$date = "";

//checks if the form is submitted.
if (isset($_POST["submit-button"])) {
  if (isset($_POST["name"])) {
    $name = trim($_POST["name"]);
  }
  if (isset($_POST["comment"])) {
    $comment = trim($_POST["comment"]);
  }

  //error handling.
  if (!empty($name) && !empty($comment)) {
    $date = $_POST["date"];
    $expireDate = $_POST["expire-date"];
    $prettyDate = $_POST["pretty-date"];
    $newComment = [
      "name" => $name,
      "comment" => $comment,
      "date" => $date,
      "expireDate" => $expireDate,
      "prettyDate" => $prettyDate
    ];
    //$name and $comment have values, so add them to the json.
    addComment($newComment);
    //redirect page to itself to 
    header('Location: ?page=home');
  } elseif (empty($name)) {
    echo "enter name";
  } elseif (empty($comment)) {
    echo "enter comment";
  }
}

?>
  <?php
  include("./templates/components/form.php");
  ?>
