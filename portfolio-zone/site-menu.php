<div class="masthead">
  <picture class="logo">
    <img src="./images/BDL.svg" alt="">
  </picture>

  <nav class="site-menu">
    <a href="?page=home" class="site-link 
    <?php if ($page == "home") {
      echo "active";
    } ?>"><span>Home</span></a>

    <a href="?page=my-work" class="site-link 
    <?php if ($page == "my-work") {
      echo "active";
    } ?>"><span>Work</span></a>

    <a href="?page=experiments" class="site-link 
    <?php if ($page == "experiments") {
      echo "active";
    } ?>"><span>Experiments</span></a>

    <a href="?page=suggest" class="site-link 
    <?php if ($page == "suggest") {
      echo "active";
    } ?>"><span>Suggest</span></a>
  </nav>
</div>