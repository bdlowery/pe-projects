
<?php
	// foreach ($project_data as $record) {
	// 	if ($record["key"] == $current_project_id) {
	// 		$project = $record;
	// 		break;
	// 	}
	// }

	$project = findProject($project_data, $current_project_id);
?>

<section class='page-header'>
<inner-column>

	<h1 class='loud-voice'>
		<?=$project['name']?>
	</h1>

	<p class='calm-voice'><?=$project['name']?>'s detail page!</p>

</inner-column>
</section>



<?php foreach ( $project["details"] as $detail ) { ?>
	<section>
	<inner-column>

		<h2 class='attention-voice'><?=$detail["heading"]?></h2>

		<picture>
			<img src='<?=$detail["figure"]?>' alt=''>
		</picture>

		<p class='calm-voice'><?=$detail["description"]?></p>

	</inner-column>
	</section>
<?php } ?>



<section>
<inner-column>

	<?php 
		$without_current_project = [];
		foreach ($project_data as $record) {
			if ($record["key"] !== $current_project_id) {
				array_push($without_current_project, $record);
			}
		}
	?>
	<?php $project_data = $without_current_project; ?>
	<?php include('project-loop.php'); ?>

</inner-column>
</section>
