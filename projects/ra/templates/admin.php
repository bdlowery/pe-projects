
<section>
<inner-column>

	<?php if ( isLoggedIn() ) { ?>


	<h1 class='loud-voice'>Hi!</h1>

	<p class='calm-voice'>This is where Marco and I were going to practice some secret "saving to a text file" stuff.</p>


	<?php } else { ?>
		<h1 class='attention-voice'>Nice try!</h1>

		<p class='calm-voice'>Only people who are on team MAID are allowed. You'll never guess our names!!!</p>
	<?php } ?>

</inner-column>
</section>



<?php if ( isLoggedIn() ) { ?>
	<section>
	<inner-column>
		
		<h2 class='attention-voice'>Savin some stuff...</h2>

		<form method='POST'>
			<field>
				<label for='handle'>Name</label>
				<input id='handle' type='text' name='example'>
			</field>

			<button type='submit' name='save'>Enter</button>
		</form>

	</inner-column>
	</section>
<?php } ?>
