
<section class='projects'>
<inner-column>

<h2 class='loud-voice'>Our work</h2>
	

<ol>
	<?php foreach ($project_data as $project) { ?>

		<?php
			$link = "?page=detail&project=" . $project["key"];
		?>

		<li class='<?=$project["key"]?>'>
			<project-card>
				<h2 class='attention-voice'><?=$project['name']?></h2>

				<a href='?page=detail&project=<?=$project["key"]?>'>See more</a>
			</project-card>
		</li>
	<?php } ?>
</ol>


</inner-column>
</section>
