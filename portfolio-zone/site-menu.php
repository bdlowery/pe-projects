<div class="masthead">
  <picture class="logo">
    <img src="./images/BDL.svg" alt="">
  </picture>

  <nav class="site-menu">
    <a href="?page=home" class="
    <?php if ($page == "home") {
      echo "active";
    } ?>">Home</a>

    <a href="?page=my-work" class="
    <?php if ($page == "my-work") {
      echo "active";
    } ?>">Work</a>

    <a href="?page=experiments" class="
    <?php if ($page == "experiments") {
      echo "active";
    } ?>">Experiments</a>

    <a href="?page=suggest" class="
    <?php if ($page == "suggest") {
      echo "active";
    } ?>">Suggest</a>
  </nav>
</div>