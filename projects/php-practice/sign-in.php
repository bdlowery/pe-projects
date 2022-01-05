<?php
$error = "";
$success = "";
if (isset($_POST["submit-button"])) {
  $enteredUsername = $_POST["username"];
  $enteredPassword = $_POST["password"];

  if (empty($enteredUsername)) {
    $error = "<strong>ERROR:</strong> The username field is empty";
  }

  if (empty($enteredPassword)) {
    $error = "<strong>ERROR:</strong> The password field is empty";
  }

  if (empty($enteredPassword) && empty($enteredUsername)) {
    $error = "<strong>ERROR:</strong> The username field is empty <br>
    <strong>ERROR:</strong> The password field is empty";
  }

  function userExists($username, $password)
  {
  }
}


$database = [
  [
    "username" => "bob",
    "password" => "bob123",
  ],
  [
    "username" => "brian",
    "password" => "password123",
  ],
];

function formatCode($code)
{
  echo "<pre>";
  var_dump($code);
  echo "</pre>";
}
?>

<header>
  <h1>Sign in!</h1>
</header>

<main>
  <p><?= $error; ?></p>
  <section class="sign-in-form">

    <form method="POST">
      <div class="field">
        <label for="">Username</label>
        <input type="text" name="username">
      </div>

      <div class="field">
        <label for="">Password</label>
        <input type="password" name="password">
      </div>

      <button type="submit" name="submit-button">Sign in</button>

    </form>
  </section>
</main>