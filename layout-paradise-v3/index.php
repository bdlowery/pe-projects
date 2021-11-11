<?php include('header.php'); ?>



<section class='welcome'>
	<inner-column>

		<?php include('modules/graphic-diptych.php'); ?>

	</inner-column>
</section>

<?php if ($theme === "couple") {
	$ctaCoupleThumbnail = $ctaCouple[0]["thumbnail"];
	$ctaCoupleHeading = $ctaCouple[0]["heading"];
	$ctaCoupleCopy = $ctaCouple[0]["copy"];
	$ctaCoupleAction = $ctaCouple[0]["action"];
	$style = "";
} else {
	$ctaFamilyHeading = $ctaFamily[0]["heading"];
	$ctaFamilyCopy = $ctaFamily[0]["copy"];
	$ctaFamilyAction = $ctaFamily[0]["action"];
	$style = "style='background-image: url(images/family-call-to-action-2.jpg)';";
} ?>
<section class='get-involved' <?php echo $style; ?>>
	<inner-column>
		<?php
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
	$ctaCoupleThumbnail = $ctaCouple[1]["thumbnail"];
	$ctaCoupleHeading = $ctaCouple[1]["heading"];
	$ctaCoupleCopy = $ctaCouple[1]["copy"];
	$ctaCoupleAction = $ctaCouple[1]["action"];

	echo "<section class='help-us'>";
} else {
	$ctaFamilyHeading = $ctaFamily[1]["heading"];
	$ctaFamilyCopy = $ctaFamily[1]["copy"];
	$ctaFamilyAction = $ctaFamily[1]["action"];
	echo "<section class='help-us' style='background-image: url(images/family-call-to-action.jpg);'>";
} ?>

<inner-column>

	<?php include('modules/call-to-action.php'); ?>

</inner-column>
</section>



<?php include('footer.php'); ?>