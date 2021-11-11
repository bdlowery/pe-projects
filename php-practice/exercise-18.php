<?php
//Convert temperatures 
//FROM Farenheit to Celsius or FROM Celsius to Fahrenheit.

//Prompt for a starting temperature.
//Prompt for the type of conversion.
//Perform the conversion

//Formulas:
// C = (F - 32) x 5/9
// F = (C x 9/5) + 32

$initialValue = 10;

function convertToCelsius($number)
{
  $celsius = ($number - 32) * 5 / 9;
  return $celsius;
}

function convertToFahrenheit($number)
{
  $fahrenheit = ($number * 9 / 5) + 32;
  return $fahrenheit;
}

//only run this code when the submit button has been clicked.
if (isset($_POST["submit-button"])) {
  $initialValue = $_POST["initial-value"];
  $convertFromSelection = $_POST["convert-from-units"];
  $convertToSelection = $_POST["convert-to-units"];
  $fromCelsius = $_POST["from-celsius"];
  $fromFahrenheit = $_POST["from-fahrenheit"];
  $toCelsius = $_POST["to-celsius"];
  $toFahrenheit = $_POST["to-fahrenheit"];

  if (isset($initialValue)) {
    if ((isset($convertFromSelection) && $convertFromSelection === "C"  && isset($convertToSelection)) && $convertToSelection === "F") {
      $message = "<p>The new temperature is" . convertToFahrenheit($toFahrenheit) . " °F</p>";
    } else {
      echo "select a unit";
    }
  }
}

function formatCode($code)
{
  echo "<pre>";
  var_dump($code);
  echo "</pre>";
}
?>

<style>
  form,
  .field,
  button {
    margin-top: 15px;
  }
</style>

<header>
  <h1>Temperature Converter ☺</h1>
  <a href="./index.php">home</a>
</header>

<p>Use <strong>C</strong> to convert from Fahrenheit to Celsius. <br> Use <strong>F</strong> to convert from Celsius to Fahrenheit.</p>
<form method="POST">

  <div class="field">
    <label>Value to convert</label>
    <input name="initial-value" type="number" value="<?= $initialValue ?>">
  </div>

  <div class="field">
    <label>From:</label>
    <select name="convert-from-units" id="convert-from-unit-selection">
      <option name="from-celsius" value="C">C</option>
      <option name="from-fahrenheit" value="F">F</option>
    </select>
  </div>

  <div class="field">
    <label>To:&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="convert-to-units" id="convert-to-unit-selection">
      <option name="to-fahrenheit" value="F">F</option>
      <option name="to-celsius" value="C">C</option>
    </select>
  </div>

  <button name="submit-button" type="submit">Calculate</button>

</form>

<?php
formatCode($_POST);
echo $message; ?>