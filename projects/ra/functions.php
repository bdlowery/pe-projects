<?php

// error_reporting(0);
error_reporting(E_ALL);


function findProject($projects, $id) {
	foreach ($projects as $project) {
		if ($project["key"] == $id) {
			return $project;
		}
	}
}

function login() {
	if ( isset($_POST["login"]) ) {
		$admins = ["marco", "ivy", "anna lena", "derek"];
		foreach ($admins as $admin) {
			if ( $admin == strtolower($_POST["login"]) ) {
				setcookie('loggedIn', true);
				return true;
			}
		}
	} else {
		return false;
	}
}

function isLoggedIn() {
	if ( isset( $_COOKIE['loggedIn'] ) ) {
		if ( $_COOKIE['loggedIn'] == 1) {
			return true;
		}
	} else {
		return false;
	}
}

function logout() {
	setcookie('loggedIn', false);
}
