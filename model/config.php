<?php

	require_once(__DIR__ . "/database.php");
//stores the path to our project
	$path = "/BlogIII/";

//stores localhost
	$host = "localhost";
//stores root in username	
	$username = "root";
//stores root in password	
	$password = "root";
//stores blog_db in database	
	$database = "blog_db";
//information for xxamp	


//database object
//pass into consturctor, uses information, stores into variable	
$connection = new Database($host, $username, $password, $database);