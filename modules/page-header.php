<?php require("./router.php") ?>

<?php
$pagesData = [
  [
    "id" => "my-work",
    "title" => "My work",
    "intro" => "<p>A directory for all of my work, past and present.</p>"
  ],
  [
    "id" => "writing",
    "title" => "Writing",
    "intro" => "<p>Some intro thing I don't know what to put here please send help please and thank you those are the magic words.</p>"
  ],
  [
    "id" => "experiments",
    "title" => "Experiments",
    "intro" => "<p>Welcome to my experimental lab... Watch out, you may find some super cool stuff!</p>"
  ],
  [
    "id" => "style-guide",
    "title" => "Portfolio Style-Guide",
    "intro" => "<p>Every page will have a heading like <strong>this</strong>. It will also have a short intro like <em>this too</em></p>

    <p>There might even be a <mark>second paragraph</mark>. Probably not, but it could happen </p>",
  ]
];

function currentPage($pagesData, $route)
{
  foreach ($pagesData as $pageData) {
    if ($pageData["id"] == $route) {
      return $pageData;
    }
  }
}
$currentPage = currentPage($pagesData, $page);
?>

<header class="page-header">
  <div class="inner-column">
    <h1 class="title-voice">
      <?= $currentPage["title"] ?>
    </h1>
    <?= $currentPage["intro"] ?>
  </div>
</header>