
<nav class='site-menu'>
	<a href='?page=home'>welcome</a>

	<a href='?page=list'>projects</a>

	<?php if ( isLoggedIn() ) { ?>

		<a href='?page=admin'>admin</a>

		<a href='?page=logout'>logout</a>

	<?php } else { ?>

		<?php if ($showLogin) { ?>
			<a href='?page=login'>login</a>
		<?php } ?>

	<?php	} ?>

	<a class='cta' href='?page=contact'>contact</a>
</nav>
