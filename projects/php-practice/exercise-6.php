<?php
//Create a program that DETERMINES how many *years you have left until retirement*, and the *year you can retire*.

//It should PROMPT for your *current age*, and the *age you want to retire*.
//DISPLAY the *output*
//Output: You have __ years left until you can retire.
// It's ____, so you can retire in 2055.
$retireAge = 0;
$currentAge = 0;
$currentYear = date("Y");

function calcRetirement($age, $retireAge)
{
  return $retireAge - $age;
}

function calcRetirementYear($year, $retireAge)
{
  return $year + $retireAge;
}

if (isset($_POST["submit-button"])) {
  if (isset($_POST["current-age"]) && isset($_POST["retire-age"])) {
    $currentAge = $_POST["current-age"];
    $retireAge = $_POST["retire-age"];

    if ($currentAge > $retireAge) {
      $message = "You can already retire!";
    } else {
      $yearsToRetirement = calcRetirement($currentAge, $retireAge);
      $retirementYear = calcRetirementYear($currentYear, $retireAge);

      $message = "<p> You have $yearsToRetirement years left until you can retire.</p>
    <p> It's $currentYear, so you can retire in $retirementYear</p>";
    }
  }
} else {
  $message = "Enter number values!";
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
  <h1>Retirement Calculator ☺</h1>
  <a href="./index.php">home</a>
</header>

<form method="POST">
  <div class="field">
    <label>What is your current age?</label>
    <input name="current-age" type="number" value="<?= $currentAge ?>">
  </div>

  <div class="field">
    <label>At what age would you like to retire?</label>
    <input name="retire-age" type="number" value="<?= $retireAge ?>">
  </div>

  <button name="submit-button" type="submit">Submit</button>
</form>

<?php
echo $message; ?>