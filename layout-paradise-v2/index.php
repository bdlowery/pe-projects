<?php include('header.php'); ?>



<section class='welcome'>
	<inner-column>

		<?php include('modules/graphic-diptych.php'); ?>

	</inner-column>
</section>

<?php if ($theme === "couple") {
	$style = "";
} else {
	$style = "style='background-image: url(images/family-call-to-action-2.jpg)';";
} ?>
<section class='get-involved' <?php echo $style; ?>>
	<inner-column>
		<?php
		$ctaThumbnail = $ctaDatabase[0]["ctaThumbnail"];
		include('modules/call-to-action.php');
		?>

	</inner-column>
</section>



<section class='stuff'>
	<inner-column>

		<?php include('modules/articles-intro.php'); ?>

	</inner-column>
</section>


<?php if ($theme === "couple") {
	$ctaThumbnail = $ctaDatabase[1]["ctaThumbnail"];

	echo "<section class='help-us'>";
} else {
	echo "<section class='help-us' style='background-image: url(images/family-call-to-action.jpg);'>";
} ?>

<inner-column>

	<?php include('modules/call-to-action.php'); ?>

</inner-column>
</section>



<?php include('footer.php'); ?>