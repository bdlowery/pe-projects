<?php 
	$heading = $section['heading'] ?? 'This is a default heading';
	$items = $section['items'] ?? 'no items';
?>




<div class="detailed-description">
	<h2><?=$heading?></h2>

	<div class="items">
		<?php foreach($items as $item) { ?>
			<div class="item">
				<picture>
					<img src="images/<?=$item['image']?>" alt="">
				</picture>
				<div class="description">
					<h3><?=$item['subHeading']?></h3>
					<p><?=$item['description']?></p>
				</div>
			</div>
		<?php } ?>
	</div>

</div>