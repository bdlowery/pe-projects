<!DOCTYPE html>

<?php

require("router.php");



function getTemplate($pageName)
{
  include("$pageName.php");
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Brian Lowery</title>
  <!-- Meta Tags-->
  <meta name="description" content="[[insert description]]" />
  <meta property="og:image" content="[[meta image source]]" />

  <!-- Styles -->
  <link rel="stylesheet" href="style.css" />
</head>

<body class="site">
  <header class="site-header">
    <div class="inner-column">
      <?php include('site-menu.php') ?>
    </div>
  </header>

  <main class="site-content">
    test
    <?php getTemplate($page); ?>
    test2
  </main>

  <footer>
    <div class="inner-column">
      <p>perpetual.education student</p>
    </div>
</body>

</html>