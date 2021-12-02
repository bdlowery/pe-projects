<!doctype html>

<html lang='en'>
<?php include('head.php'); ?>
<?php $theme = $_GET["theme"];

//if theme is this, then do this. if it's not, do this. if it's empty to this.
// if it DOESN'T = this, do this.
?>
<?php include('modules/articles_data.php'); ?>


<body class="<?php
							if ($theme === "family" || $theme === "couple") {
								echo $theme;
							} else {
								echo "default";
							}
							?>">
	<header class='site-header'>
		<inner-column>

			<?php include('modules/masthead.php'); ?>

		</inner-column>
	</header>


	<main class='page-content'>
		<!-- STUFF -->