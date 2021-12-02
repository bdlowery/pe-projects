<graphic-diptych>

	<?php if ($theme === "family") {
		echo '
		<picture class="diptych-image">
			<source media="(min-width: 700px)" srcset="images/landing-image.jpg" />
			<img src="images/landing-image-small.jpg" />
		</picture>';
	} else if ($theme === "couple") {
		echo '
		<picture class="diptych-image">
			<source media="(min-width: 700px)" srcset="images/couple-landing-image.jpg" />
			<img src="images/couple-landing-image.jpg" />
		</picture>';
	} else {
		echo '
		<picture class="diptych-image">
			<source media="(min-width: 700px)" srcset="images/landing-image.jpg" />
			<img src="images/landing-image-small.jpg" />
		</picture>';
	}


	?>


	<text-content>
		<h1 class='intro-voice'>Hello! This is a 'diptych'</h1>

		<p class='calm-voice'>You can call it whatever you want. It's a module that has an image and some supporting text. On the smaller screen it works nicely to stack. On a larger screen, it fits side by side.</p>
	</text-content>

</graphic-diptych>