<site-map>

	<nav class='site-menu'>
		<a class='logo' href='#'>
			<img src="icons/<?php echo $logo ?>.svg" alt="<?php echo $logoAlt	?>">
		</a>
		<a href='./'>Home</a>
		<a href='404.php?theme=
		<?php
		if ($theme === "family" || $theme === "couple") {
			echo $theme;
		} else {
			echo "default";
		}
		?>'>404 error</a>
	</nav>

	<nav class='user-menu'>
		<h3>Resort</h3>
		<a href='#'>Reserve</a>
	</nav>

	<nav class='legal-menu'>
		<h3>Legal</h3>
		<a href='#'>Terms of Service</a>
		<a href='#'>Privacy Policy</a>
	</nav>

	<nav class='social-menu'>
		<h3>Social Menu</h3>
		<a href='#'>Twitter</a>
		<a href='#'>Instagram</a>
		<a href='#'>Facebook</a>
		<a href='#'>TikTok</a>
	</nav>

</site-map>