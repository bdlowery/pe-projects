<graphic-diptych>

	<?php if ($theme === "couple") { ?>

		<picture class="diptych-image">
			<source media="(min-width: 700px)" srcset="images/couple-landing-image.jpg" />
			<img src="images/couple-landing-image.jpg" />
		</picture>

		<text-content>
			<h1 class='intro-voice'>Escape Into Luxury</h1>

			<p class='calm-voice'>Each of our resorts offers a unique experience for adults looking to escape the everyday and delight in the warm rhythm of an intimate, tropical getaway. Begin the journey - or write the next chapter to your love story.</p>
		</text-content>

	<?php } else { ?>

		<picture class="diptych-image">
			<source media="(min-width: 700px)" srcset="images/landing-image.jpg" />
			<img src="images/landing-image-small.jpg" />
		</picture>

		<text-content>
			<h1 class='intro-voice'>Family friendly resorts for the kid in everyone</h1>

			<p class='calm-voice'>Take family fun to the next level in vibrant, colorful beachfront locations! Enjoy activities that the whole family can play together.</p>
		</text-content>

	<?php } ?>


	<!-- <text-content>
		<h1 class='intro-voice'>Hello! This is a 'diptych'</h1>

		<p class='calm-voice'>You can call it whatever you want. It's a module that has an image and some supporting text. On the smaller screen it works nicely to stack. On a larger screen, it fits side by side.</p>
	</text-content> -->

</graphic-diptych>