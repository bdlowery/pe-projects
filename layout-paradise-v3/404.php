<?php include('header.php'); ?>



<section class='not-found'>
	<inner-column>

		<call-to-action>

			<h2 class='attention-voice'>Oh no! The page you are looking for... does not exist!</h2>

			<p class='calm-voice'>Looks like you've followed a broken link or entered a URL that doesn't exist on this site.</p>

			<a href='index.php?theme=<?php
																if ($theme === "family" || $theme === "couple") {
																	echo $theme;
																} else {
																	echo "default";
																}
																?>'>
				<span>Back to our site</span>
			</a>

		</call-to-action>

	</inner-column>
</section>



<?php include('footer.php'); ?>