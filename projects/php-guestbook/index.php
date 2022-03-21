<?php require("./functions.php") ?>
<?php require("./router.php") ?>
<?php require("./templates/components/head.php") ?>

<?php include("./templates/components/header.php") ?>
<main>
  <?php getRoute($route);
  ?>

</main>
<?php include("./templates/components/footer.php") ?>