<?php
function formatCode($code) {
  echo "<pre>";
  var_dump($code);
  echo "</pre>";
}
  $json = file_get_contents("alpha-4.json");
  $studentsDecode = json_decode($json, true);

  $students = $studentsDecode["studentData"];

  foreach($students as $student) {
    echo $student["id"];
  }


 

