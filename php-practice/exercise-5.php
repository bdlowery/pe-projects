<?php
$firstNumber = 4;
$secondNumber = 2;
$message = "";

function sum($firstInput, $secondInput)
{
  return $firstInput + $secondInput;
}

function difference($firstInput, $secondInput)
{
  return $firstInput - $secondInput;
}

function product($firstInput, $secondInput)
{
  return $firstInput * $secondInput;
}

function quotient($firstInput, $secondInput)
{
  return $firstInput / $secondInput;
}


//check to see if the submit button has been clicked
if (isset($_POST["submit-button"])) {

  //if the submit button has been clicked, check if both input fields have something in them
  if (isset($_POST["first-number"]) && isset($_POST["second-number"])) {
    //Assign $firstNumber and $secondNumber to the values entered by the user.
    //Force those inputs to be numbers.
    $firstNumber = intval($_POST["first-number"]);
    $secondNumber = intval($_POST["second-number"]);
    //form a sentence for the user. This will be echoed out later.
  }
}

//store the totals of each function into a variable.
$sum = sum($firstNumber, $secondNumber);
$subtractNum = difference($firstNumber, $secondNumber);
$multiplyNum = product($firstNumber, $secondNumber);
$divideNum = quotient($firstNumber, $secondNumber);

$message =
  "<p> $firstNumber + $secondNumber = $sum</p> 
  <p> $firstNumber - $secondNumber = $subtractNum</p> 
  <p> $firstNumber * $secondNumber = $multiplyNum</p> 
  <p> $firstNumber / $secondNumber = $divideNum</p>";

// formatCode($addNum);
// formatCode($subtractNum);
// formatCode($multiplyNum);
// formatCode($divideNum);

//var_dump something (like $_POST) and format it nicely.
function formatCode($code)
{
  echo "<pre>";
  var_dump($code);
  echo "</pre>";
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
  <h1>Simple Math ☺</h1>
  <a href="./index.php">home</a>
</header>

<form method="POST">
  <div class="field">
    <label>What is the first number?</label>
    <input name="first-number" type="number" value="<?= $firstNumber ?>">
  </div>

  <div class="field">
    <label>What is the second number?</label>
    <input name="second-number" type="number" value="<?= $secondNumber ?>">
  </div>

  <button type="submit" name="submit-button">Submit</button>
</form>

<?php
echo $message;
formatCode($_POST);

?>