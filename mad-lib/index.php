<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Mad Lib</title>
</head>

<body>
  <header>
    <h1>mad lib challenge</h1>
  </header>
  <main>
    <?php
    $firstNoun = "pocket";
    $buttons = "buttons";
    $verbOne = "subtract";
    $verbTwo = "memorize";
    $bodyPart = "brain";
    $adjectiveOne = "bright";
    $pluralNoun = "cats";
    $adjectiveTwo = "amazing";
    ?>

    <section class="mad-lib">
      <p> Today, every student has a computer small enough to fit into their _____. You can solve any math problem by simply pushing the computer’s little _____.</p>

      <p> Computers can add, multiply, divide, and _____. They can also _______ better than a human.</p>

      <p> Some computers have their own _____. Other’s have a/an _____ screen that shows all kinds of _____ and _____ figures.</p>
    </section>
    <section class="mad-lib-filled-in">
      <p>
        Today, every student has a computer small enough to fit into their
        <b><?php
            echo $firstNoun; ?></b>.
        You can solve any math problem by simply pushing the computer’s little
        <b>
          <?php
          echo $buttons;
          ?></b>.
      </p>

      <p>
        Computers can add, multiply, divide, and <b><?php echo $verbOne; ?></b>. They can also <b><?php echo $verbTwo; ?></b> better than a human.
      </p>

      <p>
        Some computers have their own <b><?php echo $bodyPart ?></b>. Other’s have a/an <b><?php echo $adjectiveOne; ?></b> screen that shows all kinds of <b><?php echo $pluralNoun ?></b> and <b><?php echo $adjectiveTwo ?></b> figures.
      </p>
    </section>
  </main>
</body>

</html>