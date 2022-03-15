<call-to-action>

	<?php if ($theme === "couple") { ?>
		<div class='text-content'>
			<h2 class='loud-voice'><?php echo $ctaCoupleHeading; ?></h2>

			<p class='calm-voice'><?php echo $ctaCoupleCopy; ?></p>

			<a href='#'>
				<span class='button'><?php echo $ctaCoupleAction; ?></span>
			</a>
		</div>
		<picture>
			<img src='images/<?php echo $ctaCoupleThumbnail; ?>' alt='$todo'>
		</picture>
	<?php } else { ?>
		<div class='text-content'>
			<h2 class='loud-voice'><?php echo $ctaFamilyHeading; ?></h2>

			<p class='calm-voice'><?php echo $ctaFamilyCopy ?></p>

			<a href='#'>
				<span class='button'><?php echo $ctaFamilyAction ?></span>
			</a>
		</div>
	<?php } ?>

</call-to-action>

<?php
$ctaCoupleThumbnail = "";
$ctaCoupleHeading = "";
$ctaCoupleCopy = "";
$ctaFamilyHeading = "";
$ctaFamilyCopy = "";
$ctaCoupleAction = "";
$ctaFamilyAction = "";
?>

<?php
foreach ($ctaCouple as $couple)
?>