</main>
<footer>
  <div class="inner-column site-footer">
    <div class="footer-text">
      <h3 class="regular-voice"><strong>Brian Lowery</strong></h3>
      <p>Last updated <time datetime="2021-11-25"> November 25th, 2021</time></p>
    </div>
    <div class="footer-links-group">
      <nav class="site-menu footer-links">
        <!-- <a href="?page=style-guide" class="">style-guide</a> -->
        <?php
        //display logout link
        if (is_user_logged_in()) { ?>
          <a href="account-info">Account Info</a>
          <?php wp_loginout(home_url()); ?>
        <?php } else { ?>
          <a href="sign-in">sign-in</a>
        <?php }
        ?>
      </nav>
      <nav class="site-menu footer-links">
        <a href="https://www.linkedin.com/in/bdlowery/">LinkedIn</a>
        <a href="https://twitter.com/bdlowery2">Twitter</a>
        <a href="https://codepen.io/bdlowery">CodePen</a>
        <a href="https://github.com/bdlowery">GitHub</a>
      </nav>
    </div>
    <div class="views-counter">
      <?php
      $file = getFile("views.txt");

      // add the previous counter value if the file exists    
      if (file_exists($file)) {
        $counter = file_get_contents($file);
      } else {
        $counter = 0;
      }
      $counter++;
      file_put_contents($file, $counter);
      ?>

      <?= $counter; ?>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>