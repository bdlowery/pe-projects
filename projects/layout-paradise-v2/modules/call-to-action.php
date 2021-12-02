<call-to-action>
	<div class='text-content'>
		<h2 class='loud-voice'>This module is a&nbsp;'call to action'</h2>

		<p class='calm-voice'>These aren't names you should memorize. We're just making them up. Sometimes things get called something so many times, that it sticks. This is a pretty common pattern</p>

		<a href='#'>
			<span class='button'>Here's the action!</span>
		</a>
	</div>
	<?php if ($theme === "couple") { ?>
		<picture>
			<img src='images/<?php echo $ctaThumbnail ?>' alt=''>
		</picture>
	<?php } ?>
</call-to-action>

<?php $ctaThumbnail = ""; ?>