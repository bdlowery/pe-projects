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
  //error handling.
  if (!empty($name) && !empty($comment)) {
    $date = $_POST["date"];
    $expireDate = $_POST["expire-date"];
    $newComment = [
      "name" => $name,
      "comment" => $comment,
      "date" => $date,
      "expireDate" => $expireDate
    ];
    //$name and $comment have values, so add them to the json.
    addComment($newComment);
    //redirect page to itself to 
    header('Location:' . $_SERVER['REQUEST_URI']);
  } elseif (empty($name)) {
    echo "enter name";
  } elseif (empty($comment)) {
    echo "enter comment";
  }
}

?>
<section>
  <!-- <h1>This is the add comments page</h1> -->
  <?php
  include("./templates/modules/form.php");
  ?>
</section>