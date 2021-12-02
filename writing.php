<?php include("writing-database.php");


if (isset($_GET["post"])) {
  $postId = $_GET["post"];
}


foreach ($writingData as $post) {

  if ($postId == $post["id"]) {
    //set detail equal to each individual post in the object.
    $detail = $post;
  }
}


?>

<?php if (isset($detail)) {  ?>

  <header class="page-header">
    <div class="inner-column">
      <h1 class="loud-voice">
        <?= $detail["title"] ?>
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