
<?php
	if ( isset($_POST['sent']) ) {
		$username = ($_POST['username']);
		$password = ($_POST['password']);

		$correctCredentials = $username == 'derek' && $password == 'pass';

		if ($correctCredentials) {
			$loggedIn = true;
		} else {
			$message = "Incorrect login";
		}
	}
?>

<style>
	body {
		padding: 30px;
	}
	field, label, input {
		display:  block;
	}
	input {
		font: inherit;
		font-size: 16px;
		padding: 4px 8px;
	}
	field + field {
		margin-top:  10px;
	}
	.button {
		display: inline-block;
	}
	button {
		all: unset;
	}
	button[type='submit'] {
		display: inline-block;
		background-color: black;
		padding: 10px 20px;
		color: white;
		margin-top: 20px;
		border-radius: 6px;
	}
</style>


<?php if ( isset($loggedIn) ) { ?>
	<p class='message'>You logged in.</p>
<?php } ?>

<?php if ( isset($message) ) { ?>
	<p class='message'><?=$message?></p>
<?php } ?>


<?php if ( !isset($loggedIn) ) { ?>
	<form method='POST'>
		<field>
			<label for='handle'>Username</label>
			<input id='handle' name='username'>
		</field>

		<field>
			<label for='secret'>
				<span>Password</span>
				<span class='button' rel='password-visibility-toggle'>👀</span>
			</label>
			<input id='secret' type='password' name='password' rel='passwordField'>
		</field>

		<button type='submit' name='sent'>Submit</button>
	</form>
<?php } ?>

<script>
	function togglePasswordVisibility(target, click) {
		click.preventDefault();
		var field = document.querySelector(`[rel="${target}"]`);
		if (field.type == 'password') {
			field.type = 'text';
		} else {
			field.type = 'password';
		}
	}

	document.addEventListener('click', function(click) {

		if ( event.target.matches('[rel="password-visibility-toggle"]') ) {
			togglePasswordVisibility("passwordField", click);
		}

	});
</script>
