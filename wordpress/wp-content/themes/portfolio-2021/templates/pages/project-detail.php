<?php
$name = get_field("name");
$projectImage = get_field("project_image");
$description = get_field("description");
$projectHeaderImage = get_field("header_background_image")["url"];
incrementPostViews(get_the_ID());

if ($projectImage) {
  $projectImage = get_field("project_image");
} else {
  $projectImage = "https://peprojects.dev/alpha-2/purplebox.jpg";
}
?>

<article>
  <header class="page-header" style="background-image: url(<?= $projectHeaderImage ?>)">
    <div class="inner-column">
      <h1 class="title-voice"><?= $name ?></h1>
      <p class="regular-voice"><?= $description ?></p>
      <p><?= displayPostViews(get_the_ID()) ?></p>
      <?php
      $user = wp_get_current_user();
      if (in_array('administrator', (array) $user->roles) || in_array('editor', (array) $user->roles)) {
        edit_post_link(__('Edit Post'));
      }

      ?>
    </div>
  </header>


  <section class="post">

    <?php
    // this file builds the entire page based on the flexible content fields
    include(getFile("module-loop.php"));
    ?>
  </section>

</article>