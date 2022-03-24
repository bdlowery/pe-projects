<?php
$date = $comment["date"];
$expireDate = $comment["expireDate"];
if (isset($_POST["edit-button"])) {
  if (isset($_POST["name"])) {
    $name = trim($_POST["name"]);
  }
  if (isset($_POST["comment"])) {
    $comment = trim($_POST["comment"]);
  }

  if (!empty($name) && !empty($comment)) {
    $editedComment = [
      "name" => $name,
      "comment" => $comment,
      "date" => $date,
      "expireDate" => $expireDate
    ];
  }

  editComment($id, $editedComment);
  header('Location: ?page=edit&id=' . $id);
}
?>
<form method="POST">

  <div class="field">
    <label for="name">Name</label>
    <input name="name" type="text" value="<?= $comment["name"] ?>">
  </div>

  <div class="field">
    <label for="comment">Comment</label>
    <textarea name="comment" rows="8" cols="50"><?= $comment["comment"] ?></textarea>
  </div>

  <button name="edit-button" type="submit">update</button>
</form>