<form method="POST">
  <?php
  $date = new DateTimeImmutable();

  $expireDate = $date->modify('+5 min');
  ?>

  <div class="field">
    <label for="name">Name</label>
    <input name="name" type="text" value="<?= $name; ?>">
  </div>

  <div class="field">
    <label for="comment">Comment</label>
    <textarea name="comment" rows="8" cols="50"><?= $comment; ?></textarea>
    <input type="hidden" value="<?= $date->format('Y-m-d H:i:s'); ?>" name="date">
    <input type="hidden" value="<?= $date->format('F j, Y, g:i a'); ?>" name="pretty-date">
    <input type="hidden" value="<?= $expireDate->format('Y-m-d H:i:s'); ?>" name="expire-date">
  </div>

  <button name="submit-button" type="submit">add comment</button>
</form>