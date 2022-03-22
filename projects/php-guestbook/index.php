<?php require("./functions.php") ?>
<?php initializeDatabase() ?>
<?php require("./router.php") ?>
<?php require("./templates/components/head.php") ?>

<?php include("./templates/components/header.php") ?>
<main>
  <?php getRoute($route); ?>

  <?php include("./templates/pages/add-comment.php") ?>

  <?php
  $comments = getComments()["items"];
  // var_dump($comments);

  foreach ($comments as $id => $comment) { ?>
    <ol>
      <li><?= $comment["name"]; ?>
        <ul>
          <li><?= $comment["comment"] ?></li>
        </ul>
      </li>
    </ol>
  <?php }
  ?>

</main>
<?php include("./templates/components/footer.php") ?>