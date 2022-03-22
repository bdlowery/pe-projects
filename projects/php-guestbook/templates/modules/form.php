<form method="POST">
  <div class="field">
    <label for="name">Name</label>
    <input name="name" type="text" value="<?= $name; ?>">
  </div>

  <div class="field">
    <label for="comment">Comment</label>

    <textarea name="comment" rows="8" cols="50" value=""><?= trim($comment); ?></textarea>
  </div>

  <button name="submit-button" type="submit">add comment</button>
</form>