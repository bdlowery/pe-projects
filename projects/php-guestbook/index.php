<?php require("./functions.php") ?>
<?php initializeDatabase() ?>
<?php require("./router.php") ?>
<?php require("./templates/components/head.php") ?>

<?php include("./templates/components/header.php") ?>
<main class="site-content">
  <?php getRoute($route); ?>

  <section class="display-comments">
    <div class="inner-column">
      <?php include("./templates/modules/display-comments.php") ?>
    </div>
  </section>
</main>
<?php include("./templates/components/footer.php") ?>