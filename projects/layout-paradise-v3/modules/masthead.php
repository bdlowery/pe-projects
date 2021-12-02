<mast-head>

	<nav class='site-menu'>
		<a class='logo' href='index.php?theme=<?php echo $theme ?>'>
			<?php if ($theme === "couple") {
				$logo = "couple-logo";
				$logoAlt = "Black and white pixel drawing of a sun setting with a heart floating in the ocean";
			} else {
				$logo = "palm-tree";
				$logoAlt = "Palm tree on an island, with a backdrop of an orange sky and a sun on the top left corner.";
			}
			?>
			<img src="icons/<?php echo $logo ?>.svg" alt="<?php echo $logoAlt	?>">
		</a>

		<a href='?theme=family'>
			<span>Family</span>
		</a>

		<a href='?theme=couple'>
			<span>Couples</span>
		</a>
	</nav>


	<nav class='user-menu'>
		<a href='#' class="button user-button">
			<span>Reserve</span>
		</a>
	</nav>

</mast-head>