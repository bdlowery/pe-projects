<?php
// you could simplify the $variables up here if you want....
// example
$thumbnail = $article["thumbnail"];
// it may or may not - be more readable
?>


<article-card>

	<picture style="background-image: url('images/<?php echo $thumbnail; ?>')" ;>
		<!-- <img src=' $thumbnail ?>' loading='lazy' alt='$todo'> -->
	</picture>

	<div class="article-card-text">
		<h2 class='neutral-voice'><?= $article["heading"] ?></h2>

		<p class='calm-voice'><?= $article["description"] ?></p>
	</div>

	<a class='link' href='#'>
		<span>Read more</span>
	</a>

</article-card>