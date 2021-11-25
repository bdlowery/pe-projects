<!doctype html>

<?php

	include('project_data.php'); // $project_data
	include('functions.php');


	if (isset($_POST["submit"])) {
		login();
		header("location:index.php?page=admin");
	}



	/* ROUTING */
	$page = null;

	if ( isset($_GET['page']) ) {
		$page = $_GET['page']; // url?page=string
	}

	$homePage = ($page == "" or $page == "home");

	if ($page == "logout") {
		logout();
		header("location:index.php?page=home");
	}

	if ( isset($_GET['project']) ) {
		$current_project_id = $_GET['project'];
	} else {
		$current_project_id = false;
	}

	$uri = $_SERVER['REQUEST_URI']; // ?
	// echo $uri;

	/* page class for CSS */
	if ($current_project_id) {
		$pageClass = "project " . $current_project_id;
	} else {
		$pageClass = $page;
	}

?>

<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title><?=$page?></title>
		<meta name='description' content='[[insert description]]'>
		<meta property='og:image' content='images/default.png'>

		<link rel='stylesheet' href='css/site.css'>
	</head>


	<body class='<?=$pageClass?>'>

		<header class='site-header'>
		<inner-column>

			<?php $showLogin = true; ?>
			<?php include('components/site-menu.php'); ?>

		</inner-column>
		</header>


		<main class='page-content'>
			<?php 
				if ($homePage) {
					include('templates/home-page.php');
				}

				if ($page == "list") {
					include('templates/project-loop.php');
				}

				if ($page == "detail") {
					include('templates/detail.php');
				}

				if ($page == "admin") {
					include('templates/admin.php');
				}

				if ($page == "login") {
					include('templates/login.php');
				}

				if ($page == "contact") {
					include('templates/contact.php');
				}
			?>
		</main>


		<footer class='site-footer'>
		<inner-column>

			<p class='calm-voice'>page: <?=$page?></p>

			<?php $showLogin = true; ?>
			<?php include('components/site-menu.php'); ?>

			<p class='calm-voice'>People seem to like addresses and stuff.</p>

			<p class='calm-voice'>You could just have tons of addresses. What are the 4 most boring cities? Let's do those!</p>

		</inner-column>	
		</footer>

	</body>	
</html>