<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Exercise 1</title>
  <!-- Meta Tags-->
  <meta name="description" content="[[insert description]]" />
  <meta property="og:image" content="[[meta image source]]" />

  <!-- Styles -->
  <link rel="stylesheet" href="style.css" />

  <style>
    form {
      max-width: 300px;
    }

    button[type="submit"] {
      margin-top: 20px;
    }

    .field {
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>

  <?php
  $firstName = "";
  $lastName = "";
  $age = 0;
  if (isset($_POST["submit-button"])) {
    if (isset($_POST["first-name"])) {
      $firstName = $_POST["first-name"];
    }

    if (isset($_POST["last-name"])) {
      $lastName = $_POST["last-name"];
    }

    if (isset($_POST["age"])) {
      $age = $_POST["age"];
    }

    echo "Your name is: $firstName $lastName and you are $age years old";
  }
  ?>
  <header>
    <h1>Form Practice ☺</h1>
    <a href="./index.php">home</a>
  </header>

  <main>
    <section class="form-practice">

      <form method="POST">
        <p>This is a form to practice with</p>

        <div class="field">
          <label for="">Enter your first name</label>
          <input type="text" name="first-name" value="<?php echo $firstName ?>">
        </div>

        <div class="field">
          <label for="">Enter your last name</label>
          <input type="text" name="last-name" value="<?php echo $lastName ?>">
        </div>

        <div class="field">
          <label for="">Enter your age</label>
          <input type="number" name="age" value="<?php echo $age ?>">
        </div>

        <button type="submit" name="submit-button">Submit Details</button>
      </form>

    </section>
  </main>
</body>

</html>