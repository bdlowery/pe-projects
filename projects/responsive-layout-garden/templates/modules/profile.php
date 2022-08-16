<?php 
	
	$heading = $section['heading'] ?? 'This is a default heading';
	$subHeading = $section['subHeading'] ?? 'This is a default sub heading';
	$content = $section['content'] ?? 'This is some default content';
	$attributes = $section['attributes'] ?? '‹ These • are • default • attributes ›';
	$image = $section['image'] ?? 'color1.jpg'


?>



<div class="profile">

	<picture>
		<img src="images/<?=$image?>" alt="">
	</picture>

	<div class="profile-text">
		<h2><?=$heading?>
			<span><?=$subHeading?></span>
		</h2>
		<p><?=$content?> <small><?=$attributes?></small></p>
	</div>

</div>