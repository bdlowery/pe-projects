<div class="masthead">
  <a href="?page=home">
    <picture class="logo">

      <svg viewBox="0 0 401 151" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
        <path id="Artboard5" fill="none" d="M0 0h400.425v150.484H0z" />
        <text x="-8.588" y="146.642" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="200" fill="var(--black)">BDL</text>
      </svg>


  </a>
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
    <a href="?theme=<?php echo $themeToggle; ?>" class="site-link">Toggle Dark Mode</a>
  </nav>
</div>