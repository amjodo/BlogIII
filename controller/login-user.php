<?php
	require_once(__DIR__ . "/../model/config.php");
//gains acess to database
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);	
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//select proper user from database
	//where database connection is being stored
	//running query on database connection
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
	//being selected by the query