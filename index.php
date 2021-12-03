<!DOCTYPE html>

<?php

require("router.php");



function getTemplate($pageName)
{
  include("$pageName.php");
}


$themeClass = '';
if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
  $themeClass = 'dark-theme';
}



?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Brian Lowery</title>
  <!-- Meta Tags-->
  <meta name="description" content="Brian Lowery, Web Developer and Designer in California"" />
  <meta property=" og:image" content="[[meta image source]]" />

  <!-- Styles -->
  <link rel="stylesheet" href="./styles/style.css" />

</head>

<body class="site <?php echo $themeClass; ?>">
  <header class="site-header">
    <div class="inner-column">
      <?php include('site-menu.php') ?>
    </div>
  </header>

  <main class="site-content">

    <?php getTemplate($page); ?>

  </main>

  <footer>
    <div class="inner-column site-footer">
      <div class="footer-text">
        <h3 class="regular-voice"><strong>Brian Lowery</strong></h3>
        <p>Last updated <time datetime="2021-11-25"> November 25th, 2021</time></p>
      </div>
      <nav class="site-menu footer-links">
        <a href="https://www.linkedin.com/in/bdlowery/">LinkedIn</a>
        <a href="https://twitter.com/bdlowery2">Twitter</a>
        <a href="https://codepen.io/bdlowery">CodePen</a>
        <a href="https://github.com/bdlowery">GitHub</a>
    </div>

  </footer>

  <script src="./scripts.js" defer></script>
</body>

</html>