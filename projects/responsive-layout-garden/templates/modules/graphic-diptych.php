<?php 
	$heading = $section['heading'] ?? 'This is a default heading';
	$content = $section['content'] ?? 'This is some default content';
	$link = $section['link'] ?? 'bdlowery.dev';
	$linkText = $section['linkText'] ?? 'click me';
	$image = $section['image'] ?? 'color1';

	$flipped = $section['flipped'] ?? false;


 ?>



<graphic-diptych class="<?php if($flipped) echo "flipped"; ?>">
	<div class="text-content">
		<h2 class='title-voice'><?=$heading?></h2>
		<p class='regular-voice'><?=$content?></p>
		<a href="<?=$link?>" class='button'><?=$linkText?></a>
	</div>
	
	<picture>
		<img src="images/<?=$image?>" alt="">
	</picture>
</graphic-diptych>