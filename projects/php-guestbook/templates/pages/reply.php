<?php
//retrieve &id=_____
$id = $_GET["id"];
$comments = getComments();
?>

<?php include("./templates/modules/reply-form.php") ?>
