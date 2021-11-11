<?php

// create a program that PROMPTS for a quote and an author.
// DISPLAY the quotation and author as shown in the example output.

$quote = "";
$author = "";
$statement = "";

//This will work if it's placed at the bottom of the form.
//Just the form values will not be populated with the $_POST data, 
//since the $quote variable will have been reset at the very top of the page.
if (isset($_POST["submit-button"])) {
  if (isset($_POST["quote"]) && isset($_POST["author"])) {
    $quote = $_POST["quote"];
    $author = $_POST["author"];

    $statement = $author . ' says, ' . '"' . $quote . '"';
  }
}

?>

<style>
  .field+.field,
  .field+button,
  header+form {
    margin-top: 15px;
  }
</style>

<header>
  <h1>Printing Quotes ☺</h1>
  <a href="./index.php">home</a>
</header>

<form method="POST">
  <div class="field">
    <label>What is the quote?</label>
    <input name="quote" type="text" value="<?= $quote ?>">
  </div>

  <div class="field">
    <label>Who said it?</label>
    <input name="author" type="text" value="<?= $author ?>">
  </div>

  <button type="submit" name="submit-button">Submit</button>
</form>

<?php

echo $statement;

function showPost($showThis)
{
  echo "<pre>";
  var_dump($showThis);
  echo "</pre>";
}

showPost($_POST);

?>