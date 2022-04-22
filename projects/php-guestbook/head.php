<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>P(E)HP Guestbook</title>
  <!-- Meta Tags-->
  <meta name="description" content="P(E)HP Guestbook" />
  <meta property="og:image" content="[[meta image source]]" />

  <!-- script for changing theme of site. load first to prevent flash -->
  <!-- <script src="./toggleTheme.js"></script> -->


  <!-- Styles -->
  <link rel="stylesheet" href="site-min.css" />

  <script>
    // if (window.localStorage.getItem("theme")) {
    //   body.dataset.theme = window.localStorage.getItem("theme");
    // }
  </script>

  <?php
  $colors = [
    "#D8BFD8",
    "#A0522D",
    "#483D8B",
    "#66CDAA",
    "#DEB887",
    "#FFE4E1",
    "#2E8B57",
    "#7B68EE",
    "#90EE90",
    "#228B22",
    "#FF7F50",
    "#EE82EE",
    "#A52A2A",
    "#4B0082",
    "#000000",
    "#AFEEEE",
    "#D3D3D3",
    "#9370DB",
    "#7FFFD4",
    "#7CFC00",
    "#40E0D0",
    "#FF6347",
    "#FFE4B5",
    "#20B2AA",
    "#FFF0F5",
    "#FF8C00",
    "#800000",
    "#98FB98",
    "#F08080",
    "#FFDAB9"
  ]
  ?>

  <style type="text/css">
    <?php
    $i = 1;
    foreach ($colors as $color) {
      echo ".comment-group:nth-of-type(" . count($colors) . "n+" . $i . ")::before { background-color: " . $color . "}";
      $i++;
    }
    ?>
  </style>
</head>