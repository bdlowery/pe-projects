<?php require("./functions.php") ?>
<?php initializeDatabase() ?>
<?php require("./router.php") ?>
<?php require("./templates/components/head.php") ?>

<?php include("./templates/components/header.php") ?>
<main>
  <?php getRoute($route); ?>

  <?php include("./templates/pages/add-comment.php") ?>
  <?php if ($route == "home") { ?>
    <?php include("./templates/pages/add-comment.php") ?>
  <?php } ?>

  <?php
  $time = new DateTimeImmutable();
  $currentTime = $time->format('Y-m-d H:i:s');
  $comments = getComments()["items"];
  // var_dump($comments);
  ?>
  <ol>
    <?php foreach ($comments as $id => $comment) { ?>

      <li><?= $comment["name"]; ?>
        <ul>
          <li><?= $comment["comment"] ?></li>
          <?php if ($comment["expireDate"] > $currentTime) { ?>
            <li><a href=?page=delete&id=<?= $id ?>>Delete</a></li>
          <?php } ?>
          <li>Posted: <?= $comment["date"] ?></li>

        </ul>
      </li>

    <?php }
    ?>
  </ol>
</main>
<?php include("./templates/components/footer.php") ?>