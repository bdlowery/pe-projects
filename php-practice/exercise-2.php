<?php

//Create a program that PROMPTS for an INPUT STRING and DISPLAYS output
//that **shows the input string and the numbers of characters the string contains**

$inputValue = "";
$error = "";

if (isset($_POST["submit-button"])) {
  if (isset($_POST["input-name"])) {
    $inputValue = $_POST["input-name"];
    echo "Your word is $inputValue, which is " . strlen($inputValue) . " characters long";
  }
}

?>

<header>
  <h1>Counting the Number of Characters ☺</h1>
  <a href="./index.php">home</a>
</header>

<form method="POST">

  <div class="field">
    <label>Enter a word</label>
    <input type="text" name="input-name" value="<?= $inputValue ?>">
  </div>

  <button type="submit" name="submit-button">Submit</button>

</form>