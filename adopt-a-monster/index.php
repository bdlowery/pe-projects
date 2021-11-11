<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
  <title>Adopt a Monster</title>
  <meta name="description" content="Adopt a Monster TODAY!!" />
  <meta property="og:image" content="https://peprojects.dev/alpha-2/bdlowery/adopt-a-monster/images/meta-img.jpg" />
</head>

<body>
  <?php

  $codey = [
    "id" => "1",
    "name" => "Codey",
    "favoriteFood" => "Mountain Dew Code Red",
    "age" => "7",
    "adopted" => true,
    "portrait" => "./images/codey.jpg",
  ];

  $limabean = [
    "id" => "2",
    "name" => "Limabean",
    "favoriteFood" => "Lima beans",
    "age" => "4",
    "adopted" => false,
    "portrait" => "./images/limabean.jpg",
  ];

  $reads = [
    "id" => "3",
    "name" => "Miss reads-a-lot",
    "favoriteFood" => "Madeline cookies",
    "age" => "9",
    "adopted" => false,
    "portrait" => "./images/miss-reads-a-lot.jpg",

  ];

  $fragoo = [
    "id" => "4",
    "name" => "Fragoo",
    "favoriteFood" => "Strawberries",
    "age" => "5",
    "adopted" => false,
    "portrait" => "./images/fragoo.jpg",

  ];

  $mrBanana = [
    "id" => "5",
    "name" => "Mr Banana",
    "favoriteFood" => "Banana's",
    "age" => "10",
    "adopted" => false,
    "portrait" => "./images/mr-banana.jpg",
  ];

  $orangina = [
    "id" => "6",
    "name" => "Orangina",
    "favoriteFood" => "Oranges",
    "age" => "3",
    "adopted" => true,
    "portrait" => "./images/orangina.jpg",

  ];

  $shadow = [
    "id" => "7",
    "name" => "Shadow",
    "favoriteFood" => "Raisins",
    "age" => "8",
    "adopted" => true,
    "portrait" => "./images/shadow.jpg",
  ];

  $monsters = [$codey, $limabean, $reads, $fragoo, $mrBanana, $orangina, $shadow];
  ?>


  <header class="site-header">
    <div class="inner-column">
      <h1 class="site-logo">Adopt A <span class="monster-font">Monster</span></h1>
      <img class="heart-left" src="./images/heart.svg" alt="">
      <img class="heart-right" src="./images/heart.svg" alt="">
    </div>
  </header>

  <section class="monsters">
    <div class="inner-column">
      <div class="monsters-flex">
        <?php
        foreach ($monsters as $monster) {
          $id = $monster["id"];
          $name = $monster["name"];
          $favoriteFood = $monster["favoriteFood"];
          $age = $monster["age"];
          $adopted = $monster["adopted"];
          $portrait = $monster["portrait"];
          $adoptedClass = "default";
          $adoptedText = "unknown";
          $monstersCardClass = "default";

          if ($adopted === true) {
            $adoptedClass = "adopted";
            $adoptedText = "Adopted";
            $monstersCardClass = "monster-adopted";
          } else {
            $monstersCardClass = "monster-not-adopted";
            $adoptedClass = "not-adopted";
            $adoptedText = "Adopt";
          }
        ?>

          <div class="monsters-card <?php echo $monstersCardClass ?>" id="<?php echo $id; ?>">
            <div class="portrait" style="background-image: url(<?php echo $portrait ?>)">
            </div>
            <div class="card-text">
              <h2><?php echo $name; ?></h2>
              <p>Age: <?php echo $age; ?></p>
              <p>Favorite Food: <?php echo $favoriteFood; ?></p>
              <a href="#" class="<?php echo $adoptedClass ?>"><?php echo $adoptedText; ?></a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>


</body>

</html>